<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matriculas extends Model
{
    protected $fillable = [        
        'idAluno', 'idCurso'
    ];
}
