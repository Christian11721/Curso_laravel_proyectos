<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class Counter extends Component
{
    public $note = "";
    public $feedback ="";

    public function update($id)
    {
        $noteToUpdate = Note::find($id);
        $noteToUpdate->content = $this->note;
        $noteToUpdate->save();
        $this->feedback ="Nota actualizada";

    }

    public function store()
    {
        Note::create([
            "content" => $this->note
        ]);
        $this->feedback= "Nota creada";
    }

    public function destroy($id)
    {
        Note::destroy($id);
        $this->feedback ="Nota eliminada";
    }

    public function render()
    {
        $notes = Note::all();
        return view('livewire.counter', ['notes'=>$notes]);
    }
}
