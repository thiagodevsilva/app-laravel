@extends('layouts.main')

@section('title', 'Novo Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3 mt-4">

    <h1>Crie o seu evento</h1>

    <form action="/events" method="POST">
        @csrf
        <div class="form-group mb-2">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group mb-2">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group mb-2">
            <label for="private">Evento privado?</label>
            <select class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="description">Descrição:</label>            
            <textarea name="description" id="description" class="form-control" placeholder="Nos diga tudo sobre seu evento"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>

</div>

@endsection