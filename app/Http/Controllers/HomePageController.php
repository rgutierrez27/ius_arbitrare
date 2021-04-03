<?php

namespace App\Http\Controllers;

use App\AreasPractice;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getIndexHome(){
        $areaPractice = AreasPractice::all();
        return view('index', ['areaPractice' => $areaPractice] );
    }

    public function quienesSomos(){
        return view('about');
    }

    public function proyectoProBono(){
        return view('proyectoProBono');
    }

    public function diversidadEquidad(){
        return view('diversidadEquidad');
    }

    public function codigoEtico(){
        return view('contactus');
    }
}
