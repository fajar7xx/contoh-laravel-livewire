<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUpdate extends Component
{

    public $name;
    public $phone;
    public $contactId;

    protected $listeners = [
        'getContact' => 'showContact'
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function showContact($contact)
    {
        $this->name = $contact['name'];
        $this->phone = $contact['phone'];
        $this->contactId = $contact['id'];
    }

    public function updateContact()
    {
        if($this->contactId){
            $contact = Contact::find($this->contactId);
            $contact->name = $this->name;
            $contact->phone = $this->phone;
            $contact->save();
        }


        $this->resetInputForm();
        $this->emit('contactUpdated', $contact);
    }

    private function resetInputForm()
    {
        $this->name = null;
        $this->phone = null;
    }
}
