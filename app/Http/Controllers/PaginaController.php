<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PaginaController extends Controller
{
    public function saludo()
    {
        return "Hola Aprendices 2024605";
    }

   public function inicio()
   {
     return view('welcome');
   }

   public function index()
   {
    return view('welcome');
   }


}//end clase
