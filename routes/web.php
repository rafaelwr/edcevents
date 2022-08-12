<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //ATENÇÃO! Apenas para testes. Esta ação deve ficar no Controller.
    $nome = 'Rafael';
    $idade = 32;
    $profissao = 'Desenvolvedor Web';

    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao]);
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/produtos', function() {
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function($id) {
    return view('product', ['id' => $id]);
});