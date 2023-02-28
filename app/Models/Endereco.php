<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'nome_rua', 'num_residencia', 'complemento', 'bairro', 'cep', 'id_cidade'
    ];

    public function cidade()
    {
        $this->hasOne('App\Models\Cidade', 'id_cidade', 'id');
    }
}
