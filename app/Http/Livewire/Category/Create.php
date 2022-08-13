<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public Category $category;

    public function mount(Category $category)
    {
        $this->category         = $category;
        $this->category->status = true;
    }

    public function render()
    {
        return view('livewire.category.create');
    }

    public function submit()
    {
        $this->validate();

        $this->category->save();

        return redirect()->route('admin.categories.index');
    }

    protected function rules(): array
    {
        return [
            'category.title' => [
                'string',
                'max:255',
                'required',
            ],
            'category.slug' => [
                'string',
                'required',
                'unique:categories,slug',
            ],
            'category.status' => [
                'boolean',
            ],
        ];
    }
}
