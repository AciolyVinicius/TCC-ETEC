<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait{
        restore as private restoreA;
    }

    use SoftDeletes{
        restore as private restoreB;
    }

    public function restore(){
        $this->restoreA();
        $this->restoreB();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'sobrenome', 'nascimento', 'cpf_user', 'rg_user', 'contato1', 'contato2', 'email', 'password', 'foto_user', 'nome_responsavel', 'contato_responsavel', 'email_responsavel', 'cpf_responsavel', 'id_endereco'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function endereco()
    {
        return $this->hasOne('App\Models\Endereco', 'id', 'id_endereco');
    }

    public function role(){

        return $this->belongsToMany( Role::class, Config::get( 'entrust::assigned_roles_table'));
    
    }
}
