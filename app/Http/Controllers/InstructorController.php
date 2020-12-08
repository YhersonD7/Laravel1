<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function instructor()
    {
        $datos = ['Ingenieria', 'Telecomunicaciones', 'Electronica',
        'Medicina', 'Ingles', 'Veterinaria', 'Contabilidad'];
         
        return view('instructor.instructor', compact('datos'));
    }
}
