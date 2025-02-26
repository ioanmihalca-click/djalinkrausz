<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Livewire\Attributes\Rule;

class Contact extends Component
{
    #[Rule('required|min:2|max:100')]
    public $name = '';

    #[Rule('required|email|max:100')]
    public $email = '';

    #[Rule('required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10')]
    public $phone = '';

    #[Rule('required')]
    public $event_type = '';

    #[Rule('required|min:10')]
    public $message = '';

    public $success = false;

    public function submit()
    {
        $this->validate();

        // Opțiunea 1: Trimite email
        Mail::to('contact@djalinkrausz.ro')->send(new ContactFormMail([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'event_type' => $this->event_type,
            'message' => $this->message,
        ]));

        // Opțional: Salvează în baza de date
        // ContactRequest::create([
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'phone' => $this->phone,
        //     'event_type' => $this->event_type,
        //     'message' => $this->message,
        // ]);

        // Resetează valorile și afișează mesaj de succes
        $this->reset(['name', 'email', 'phone', 'event_type', 'message']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.contact');
    }
}