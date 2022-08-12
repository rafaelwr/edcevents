<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(){
        //ATENÇÃO! Apenas para testes. Esta ação deve ficar no Controller.
        $nome = 'Rafael';
        $idade = 32;
        $profissao = 'Desenvolvedor Web';

        return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao]);
    }

    public function create(){
        return view('events.create');
    }

}
