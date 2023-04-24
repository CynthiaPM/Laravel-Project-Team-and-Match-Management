@extends('layouts.plantilla')

@section('title','Games '. $game->name)

@section('content')

<h1>Bienvenido al equipo {{$game->name}}</h1>

<a href="{{route('games.index')}}">volver a todos los equipos</a>
<br>
<a href="{{route('games.edit',$game)}}">editar equipo</a>


@endsection