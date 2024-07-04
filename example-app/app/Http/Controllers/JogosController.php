<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index(){
        $nome = 'estevao';
        $sobrenome = 'Bresolin';
        return view('jogos.index', ['nome' => $nome, 'sobrenome' => $sobrenome]);
    }
}
