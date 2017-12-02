<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nome', 'email', 'nascimento', 'naturalidade', 'telefone', 'genero', 'ocupacao', 'cep'
    ];
}
