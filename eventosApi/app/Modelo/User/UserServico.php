<?php

namespace App\Modelo\User;

use Illuminate\Database\Eloquent\Model;

class UserServico extends Model
{
    protected $fillable = ['operador_id', 'user_id', 'servico_id', 'estado'];
}
