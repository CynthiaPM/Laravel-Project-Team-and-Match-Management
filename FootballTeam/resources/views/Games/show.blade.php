@extends('layouts.plantilla')

@section('title','Games '. $game->city)

@section('content')

<h1>Bienvenido al equipo {{$game->city}}</h1>

<a href="{{route('games.index')}}">volver a todos los equipos</a>
<br>
<a href="{{route('games.edit',$game)}}">editar equipo</a>

<form action="{{route('games.destroy',$game)}}" method="POST">
    @csrf
    @method ('delete')
    <button type="submit">eliminar</button>
</form>


@endsection