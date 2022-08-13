<?php

namespace App\Http\Livewire\FrontEnd;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{

    public  $services;
    public function mount()
    {
        $this->services = Service::with('media')->take(10)->get();
    }

    public function render()
    {
        return view('livewire.front-end.services',[
            'service' => $this->services
        ]);
    }
}
