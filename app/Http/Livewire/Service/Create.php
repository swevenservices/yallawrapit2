<?php

namespace App\Http\Livewire\Service;

use App\Models\Project;
use App\Models\Service;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Service $service;

    public array $projects = [];

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Service $service)
    {
        $this->service         = $service;
        $this->service->status = true;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.service.create');
    }

    public function submit()
    {
        $this->validate();

        $this->service->save();
        $this->service->projects()->sync($this->projects);
        $this->syncMedia();

        return redirect()->route('admin.services.index');
    }

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    protected function rules(): array
    {
        return [
            'service.title' => [
                'string',
                'required',
            ],
            'service.excerpt' => [
                'string',
                'required',
            ],
            'service.slug' => [
                'string',
                'required',
                'unique:services,slug',
            ],
            'service.content' => [
                'string',
                'required',
            ],
            'service.meta_title' => [
                'string',
                'nullable',
            ],
            'service.meta_content' => [
                'string',
                'nullable',
            ],
            'service.meta_description' => [
                'string',
                'nullable',
            ],
            'service.status' => [
                'boolean',
            ],
            'mediaCollections.service_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.service_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'projects' => [
                'array',
            ],
            'projects.*.id' => [
                'integer',
                'exists:projects,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['projects'] = Project::pluck('title', 'id')->toArray();
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->service->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
