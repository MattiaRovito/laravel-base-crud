@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<div class="container">
    <h1>{{$comic->title}}</h1>

    <div class="row">
        <div class="col"></div>
    </div>

    <div class="row">
        <div class="col-4">
            {{-- Inserisco l'immagine --}}
            <img class="w-50 mb-3" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
            
        <div class="col-8">
            {{-- Inserisco la descrizione --}}
            <p>{{$comic->description}}</p>
        </div>
    </div>

    <p class="btn btn-success">Costo di {{$comic->price}} €</p>

</div>



@endsection