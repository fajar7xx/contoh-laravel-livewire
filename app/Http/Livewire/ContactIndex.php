<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public $statusUpdate = false;
//    public $data;
//    buat listener untuk menampung data
    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdated' => 'handleUpdated'
    ];

    public function render()
    {
//        $this->data = Contact::latest()->get();

        $contacts = Contact::latest()->get();
        return view('livewire.contact-index', compact('contacts'));
    }

    public function handleStored($contact)
    {
//        dd($contact);
    }

    public function handleUpdated($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . 'was updated');
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }
}
