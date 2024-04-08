<?php

namespace App\Livewire;

use App\Models\Telefono;
use Livewire\Component;

class ChangePhone extends Component
{

    public $telefono;

    public function changePhone()
    {
       $telefonos = Telefono::find(1);
       $telefonos->update(['telefono' => $this->telefono]);
       return session()->flash('message', 'Teléfono Guardado');
    }

    public function mount(Telefono $telefono) 
    {
        $this->telefono = $telefono->find(1);
        $this->telefono =  $this->telefono->telefono;
    }

    public function render()
    {
        return view('livewire.change-phone');
    }
}
