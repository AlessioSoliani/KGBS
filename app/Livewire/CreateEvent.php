<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class CreateEvent extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $date;
    public $location;
    public $contact;
    public $image_url;
    // public $categories;


    protected $rules =
            [
                'title' => 'required|min:8|max:150',
                'description' => 'required|max:500',
                'date' => 'required|regex:/^\d{4}-\d{2}-\d{2}$/',
                'location' => 'required|min:8',
                'contact' => 'required|min:8',
                'image_url.*' => 'required|image|max:1024',
                // 'categories' => 'required'
            ];


    protected $messages = 
                        [
                            'required'=> 'Il campo :attribute non può essere vuoto',
                            'min'=> ' Il campo :attribute troppo corto',
                            'max'=>'Il campo attribute é troppo lungo',
                            'url'=>'Percorso non valido',
                            

                        ];


    

    public function store()
    {   // Carico il file e ottiengo il percorso
        $imagePath = $this->image_url->store('events' , 'public');
        $this->validate();
        Event::create([
            'title' => $this->title,
            'description' => $this->description,
            'date' => $this->date ? : null,
            'location' => $this->location,
            'contact' => $this->contact,
            'image_url' => $imagePath, // Salvo il percorso del file caricato
            // 'categories' => $this->categories,

        ]);
        session()->flash('message' , 'Evento creato con successo');
        $this->clearForm();
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function clearForm()
    {
        $this->title = '';
        $this->description = '';
        $this->date = '';
        $this->location = '';
        $this->contact = '';
        $this->image_url = '';
        // $this->categories = '';
    }

    public function render()
    {
        return view('livewire.create-event');
    }
}
