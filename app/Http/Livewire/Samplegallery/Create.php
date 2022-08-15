<?php

namespace App\Http\Livewire\Samplegallery;

use App\Models\Samplegallery;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Samplegallery $samplegallery;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function mount(Samplegallery $samplegallery)
    {
        $this->samplegallery = $samplegallery;
    }

    public function render()
    {
        return view('livewire.samplegallery.create');
    }

    public function submit()
    {
        $this->validate();

        $this->pageTitle =

            $this->samplegallery->save();
        $this->syncMedia();

        return redirect()->route('admin.samplegallery.index');
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
            'samplegallery.name' => [
                'string',
                'required',
            ],
            'samplegallery.description' => [
                'string',
            ],
            'samplegallery.dimention' => [
                'string',

            ],
            'mediaCollections.sample_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.sample_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'mediaCollections.backslash_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.backslash_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'mediaCollections.countertop_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.countertop_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'mediaCollections.cabnet_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.cabnet_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
                ->update(['model_id' => $this->samplegallery->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
