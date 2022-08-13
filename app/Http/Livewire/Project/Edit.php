<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Project $project;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function mount(Project $project)
    {
        $this->project          = $project;
        $this->mediaCollections = [
            'project_before_image' => $project->before_image,
            'project_after_image'  => $project->after_image,
        ];
    }

    public function render()
    {
        return view('livewire.project.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->project->save();
        $this->syncMedia();

        return redirect()->route('admin.projects.index');
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

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    protected function rules(): array
    {
        return [
            'project.title' => [
                'string',
                'required',
            ],
            'project.excerpt' => [
                'string',
                'required',
            ],
            'project.slug' => [
                'string',
                'required',
                'unique:projects,slug,' . $this->project->id,
            ],
            'mediaCollections.project_before_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.project_before_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'mediaCollections.project_after_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.project_after_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->project->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
