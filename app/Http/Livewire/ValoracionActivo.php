<?php

namespace App\Http\Livewire;

use App\Models\Dependencia;
use App\Models\NombreActivo;
use App\Models\TipoActivos;
use Livewire\Component;

class ValoracionActivo extends Component
{
    public $valoracionActivoId = 1;
    public $tipoActivoId = '';

    public function render()
    {
        return view('livewire.valoracion-activo', [
            'dependencias' => Dependencia::where('valoracion_activo_id', $this->valoracionActivoId)->get(),
            'activos' => NombreActivo::all(['id', 'nombre']),
            'tipoActivos' => TipoActivos::all(['id', 'nombre']),
        ]);
    }
}
