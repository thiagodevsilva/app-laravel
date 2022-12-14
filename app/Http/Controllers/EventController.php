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
    public function store(Request $request) {        

        $event = new Event;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            //extensão do arquivo que foi up
            $extension = $requestImage->extension();

            //nome único para a imagem
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            //criar pasta e mover arquivo para o diretório
            $requestImage->move(public_path('img/events'), $imageName);

            //setando o nome da imagem
            $event->image = $imageName;

        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');

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

    public function show($id) {
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}
