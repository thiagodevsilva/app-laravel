@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="img-container" class="col-md-6">
                @if ($event->image)
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                @else 
                <img src="/img/placeholder-img.jpg" alt="sem imagem">
                @endif
            </div>

            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon> 
                        {{$event->city}}                    
                </p>
                <p class="events-participants">
                    <ion-icon name="people-outline"></ion-icon>
                    X participantes
                </p>
                <p class="event-owner">
                    <ion-icon name="star-outline"></ion-icon>
                    Dono do evento
                </p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
            </div>

            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento</h3>
                <p class="event-description">{{$event->description}}</p>
            </div>            
        </div>
    </div>

@endsection