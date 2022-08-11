<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    //
    public function index() {
        return view('home');
    }

    //
    public function create() {
        return view('events.create');
    }

    //
    public function contact() {
        return view('contact');
    }

    //
    public function products() {
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }

    //
    public function teste() {
        $nome = "Thiago";
        $idade = 32;
        $arr = [1,2,3,4,5];
        $nomes = ['Thiago', 'Thais', 'Elisama', 'Quesia'];
        return view('welcome', ['nome' => $nome, 'arr' => $arr, 'nomes' => $nomes]);
    }
}
