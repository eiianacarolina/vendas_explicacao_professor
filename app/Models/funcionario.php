<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'cargo',
        'user_id' //vamos relacionar com a tabela de usuários
    ];
}
