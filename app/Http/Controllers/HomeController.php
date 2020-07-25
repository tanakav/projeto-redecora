<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('index');
    }
    
    public function quemSomos(){
        return view('quemsomos');
    }

    public function contato(){
        return view('contato');
    }

    public function favoritos(){
        return view('favoritos');
    }

    public function produtos(){
        return view('produtos');
    }

}
