<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lembrete extends Model
{
    protected $fillable = [
        'nome', 'descricao_arquivo', 'dt_inicio', 'dt_final', 'id_user'
    ];
}
