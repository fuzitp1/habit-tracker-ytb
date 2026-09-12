<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Ygor';
        $habits = ['Ler', 'Estudar', 'Correr'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
