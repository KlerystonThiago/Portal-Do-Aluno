<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome', 'sobreNome', 'email', 'senha', 'nivelDeAcesso'
    ];

    protected $hidden = [
        'senha', 'created_at', 'updated_at'
    ];
}

