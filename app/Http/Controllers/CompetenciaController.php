<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    public function competencia()
    {
        return view('Competencia.competencia');
    }   
}
