<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprendizController extends Controller
{
    public function aprendiz()
    {
        $nombres = ['Juan','Pedro','Ana','Juliana','Dalis'];
        return view('Aprendiz.aprendiz', compact('nombres'));
    }
}
