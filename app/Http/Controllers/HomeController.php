<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('painel.home');
    }

    public function painel(){
        
        if(Auth::user()->can('view_painel')){
            
            return view('painel.painel');    

        }
    }


}
