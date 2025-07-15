<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;

class ContactForm extends Component
{
    public $name, $email, $message;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:5',
    ];

    public function submit()
    {
        $this->validate();

        Mail::to('lawasshem@gmail.com')->send(
            new ContactFormMail($this->name, $this->email, $this->message)
        );

        Mail::to($this->email)->send(
            new ContactConfirmationMail($this->name, $this->message)
        );

        session()->flash('success', 'Thanks for reaching out!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
