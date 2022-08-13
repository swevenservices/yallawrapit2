<?php

namespace App\Http\Livewire\Tag;

use App\Models\Tag;
use Livewire\Component;

class Create extends Component
{
    public Tag $tag;

    public function mount(Tag $tag)
    {
        $this->tag         = $tag;
        $this->tag->status = true;
    }

    public function render()
    {
        return view('livewire.tag.create');
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
                'unique:tags,slug',
            ],
            'tag.status' => [
                'boolean',
            ],
        ];
    }
}
