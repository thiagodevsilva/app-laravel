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

    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    $busca = request('search');
    return view('products', ['busca' => $busca]);
});

Route::get('/product/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});

Route::get('/testes', function () {

    $nome = "Thiago";
    $idade = 32;
    $arr = [1,2,3,4,5];
    $nomes = ['Thiago', 'Thais', 'Elisama', 'Quesia'];
    return view('welcome', ['nome' => $nome, 'arr' => $arr, 'nomes' => $nomes]);
});