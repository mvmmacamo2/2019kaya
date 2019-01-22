<?php

namespace App\Modelo\Constantes;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = ['name', 'estado', 'descricao'];
}
