@extends('layouts.plantilla')

@section('title','Games')

@section('content')
    <h1>aqui se mostraran los juegos de los equipos</h1>
    <a href="{{route('games.create')}}">registrar equipo</a>
 

    <ul>
        @foreach ($games as $game)
        <li><a href="{{route('games.show',$game->id)}}">{{$game->city}}</a></li>
        
    @endforeach
    </ul>
    
    {{$games->links()}}


@endsection