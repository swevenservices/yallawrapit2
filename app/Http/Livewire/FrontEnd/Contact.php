<?php

namespace  App\Http\Livewire\FrontEnd;

use Livewire\Component;
use App\Notifications\ContactUsMail;
use App\Models\User;
use App\Models\Contact as ContactModel;
use Illuminate\Support\Facades\Notification;

class Contact extends Component
{
    public $contact;
    public $service;

    public function mount($service)
    {
    $this->service = $service;
   }
    public function render()
    {
        if($this->service != null) {   $this->contact['service'] = $this->service->title; }
        return view('livewire.front-end.contact',
        [
           'service' => $this->service
        ]);
    }

    public function submit()
    {

         $this->validate();
         $message = null;
         $service = null ;
         if(key_exists('message', $this->contact))
         {
              $message =$this->contact['message'];
         }
         if(key_exists('service', $this->contact))
         {
              $service =$this->contact['service'];
         }
         $contact = ContactModel::create([
             'name' => $this->contact['name'],
             'email' => $this->contact['email'],
             'phone' => $this->contact['phone'],
             'message' => $message,
             'service' => $service,
         ]);

         $users = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
         })->get();
         Notification::send($users, new ContactUsMail($contact));
         session()->flash('message', 'Thank You Message Has been Received ! We will get back to you');
    }

    protected $rules = [
            'contact.name' => 'required',
            'contact.email' => 'required|email',
            'contact.phone' => 'required',
            'contact.message' => 'nullable',
            'contact.service' => 'nullable',
        ];
    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
