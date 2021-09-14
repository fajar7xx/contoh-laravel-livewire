<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    //properti
//    public $contacts;
//
//    public function mount($contacts)
//    {
////        dd($contacts);
//        $this->contacts = $contacts;
//    }

    //properti
    public $name;
    public $phone;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function storeContact()
    {
        $contact = Contact::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);

        $this->resetInputForm();

//        $this->emit('nama dari emit', 'data yang akan kita kirimkan')
        $this->emit('contactStored', $contact);
    }

    private function resetInputForm()
    {
        $this->name = null;
        $this->phone = null;
    }
}
