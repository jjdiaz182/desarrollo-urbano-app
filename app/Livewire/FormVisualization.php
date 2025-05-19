<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class FormVisualization extends Component
{

    public $fecha_autorizacion;

    #[On('fechaAutorizacionUpdated')] 
    public function updatePostList($fecha_autorizacion)
    {
        $this->fecha_autorizacion = $fecha_autorizacion;
    }

    public function render()
    {
        return view('livewire.form-visualization');
    }
}
