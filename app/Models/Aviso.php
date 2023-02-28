<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $fillable = [
        'nome', 'aviso', 'dt_aviso', 'anexo_aviso', 'id_user', 'id_curso', 'id_turma'
    ];
}
