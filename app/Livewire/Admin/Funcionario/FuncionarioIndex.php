<?php

namespace App\Livewire\Admin\Funcionario;

use App\Models\funcionario;
use Livewire\Component;

class FuncionarioIndex extends Component
{
    public function render()
    {
        $funcionarios = funcionario::all();

        return view('livewire.admin.funcionario.funcionario-index', compact('funcionarios')); 
        // enviando para a view uma variável funcionarios
    }
}
