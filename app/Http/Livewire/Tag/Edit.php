<?php

namespace App\Http\Livewire\Tag;

use App\Models\Tag;
use Livewire\Component;

class Edit extends Component
{
    public Tag $tag;

    public function mount(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function render()
    {
        return view('livewire.tag.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->tag->save();

        return redirect()->route('admin.tags.index');
    }

    protected function rules(): array
    {
        return [
            'tag.title' => [
                'string',
                'max:255',
                'required',
            ],
            'tag.slug' => [
                'string',
                'max:255',
                'required',
                'unique:tags,slug,' . $this->tag->id,
            ],
            'tag.status' => [
                'boolean',
            ],
        ];
    }
}
