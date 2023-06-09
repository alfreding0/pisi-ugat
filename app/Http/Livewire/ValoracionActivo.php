<?php

namespace App\Http\Livewire;

use App\Models\NombreActivo;
use App\Models\User;
use Livewire\Component;

class ValoracionActivo extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.valoracion-activo', [
            'users' => User::where('name', 'like', '%'.$this->search.'%')->get(),
            'activos' => NombreActivo::all(['id', 'nombre']),
        ]);
    }
}
