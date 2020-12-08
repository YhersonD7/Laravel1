<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function aprendices()
    {
        return view('welcome');
    }

    public function plantillaweb()
    {
        return view('plantillaweb');
    }

   public function personas($varnum2='sin parametro') 
   {
        //return view('persona', ['varnum2' => 5000]);
        return view('persona', compact('varnum2'));
   }

    public function cliente()
    {
        return view('cliente', ['numero' => "Andrea Carolina"]);
    }
} //end clase
