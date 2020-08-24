<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function index() {
        $titulo = 'Animales';
        $animales = ['Perro', 'Gato', 'Tigre'];
        
        return view('pruebas.index', array(
            'titulo' => $titulo,
            'animales' => $animales
        ));
    }
}
