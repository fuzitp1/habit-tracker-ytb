<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;


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

    public function dashboard()
    {
        return view('dashboard');
    }
}
