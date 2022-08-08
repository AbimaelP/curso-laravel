@extends('layouts.main')
@section('title',$event->title)
@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="div col-md-6" id="image-container">
                <img src="/img/events/{{$event->image}}" alt="" class="img-fluid">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{$event->city}}</p>
                <p class="event-participants"><ion-icon name="people-outline"></ion-icon>X Participantes</p>
                <p class="event-owner"><ion-icon class="star-outline"></ion-icon>Dono do Evento</p>
                <a href="" class="btn btn-primary" id="event-submit">Confirmar presença</a>
            </div>
            <div class="col-md-12" id="description-container">
                <h1>Sobre o Evento:</h1>
                <p class="event-description">{{$event->description}}</p>
            </div>
        </div>
    </div>
@endsection
