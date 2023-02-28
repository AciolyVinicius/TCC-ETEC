<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'nome', 'id_estado'
    ];

    public function estado()
    {
        $this->hasOne('App\Models\Estado', 'id_estado', 'id');
    }
}
