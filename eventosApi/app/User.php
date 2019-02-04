<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Token;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'apelido', 'endereco', 'celular', 'estado', 'bi', 'nuit', 'nivel', 'estado_perfil', 'data_nascimento', 'uuid', 'foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }
    public function setApelidoAttribute($value)
    {
        $this->attributes['apelido'] = ucfirst(strtolower($value));
    }
    public function token()
    {
        return $this->hasMany(Token::class);
    }
}
