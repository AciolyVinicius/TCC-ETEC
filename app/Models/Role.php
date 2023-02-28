<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public function permissions(){

    	return $this->belongsToMany( Permisson::class, Config::get('entrust::permission_role_table'));

    }
}
