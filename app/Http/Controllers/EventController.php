<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{

    //
    public function index() {

        $events = Event::all();//comando chama todos os eventos do banco
        return view('home', ['events' => $events]);
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
