<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        return view('index',
            ['titulo'=>'Redecora'
                ]);
    }

    public function quemSomos(){
        return view('quemsomos');
    }

    public function contato(){
        return view('contato');
    }

}
