<?php

namespace App\Http\Livewire\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Post $post;

    public array $tags = [];

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Post $post)
    {
        $this->post         = $post;
        $this->post->status = 'active';
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.post.create');
    }

    public function submit()
    {
        $this->validate();

        $this->post->save();
        $this->post->tags()->sync($this->tags);
        $this->syncMedia();

        return redirect()->route('admin.posts.index');
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
            'post.title' => [
                'string',
                'max:255',
                'required',
            ],
            'post.excerpt' => [
                'string',
                'required',
            ],
            'post.slug' => [
                'string',
                'max:255',
                'required',
                'unique:posts,slug',
            ],
            'mediaCollections.post_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.post_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'post.content' => [
                'string',
                'nullable',
            ],
            'post.status' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['status'])),
            ],
            'post.meta_title' => [
                'string',
                'nullable',
            ],
            'post.meta_description' => [
                'string',
                'nullable',
            ],
            'post.meta_content' => [
                'string',
                'nullable',
            ],
            'post.catgeory_id' => [
                'integer',
                'exists:categories,id',
                'nullable',
            ],
            'tags' => [
                'array',
            ],
            'tags.*.id' => [
                'integer',
                'exists:tags,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['status']   = $this->post::STATUS_RADIO;
        $this->listsForFields['catgeory'] = Category::pluck('title', 'id')->toArray();
        $this->listsForFields['tags']     = Tag::pluck('title', 'id')->toArray();
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->post->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
