<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public function render()
    {
        // return view('livewire.create-post');
        // Componentes inline, renderizan todo el contenido sin una vista por ser muy simples
        return <<< 'HTML'
            <div>
                <h1>Hola desde el componente</h1>
            </div>
        HTML;
    }
}
