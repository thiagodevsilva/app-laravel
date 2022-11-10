@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="">
        <input type="text" id="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Proximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias.</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">

            @if ($event->image)
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            @else
            <img src="/img/placeholder-img.jpg" alt="{{ $event->title }}">
            @endif
            
            <div class="card-body">
                <p class="card-date">
                    10/09/2022
                </p>
                <h5 class="card-title">
                    {{ $event->title }}
                </h5>
                <p class="card-participants">
                    X Participantes
                </p>
                <a href="#" class="btn btn-primary">
                    Saber mais
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection