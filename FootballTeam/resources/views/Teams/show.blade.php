@extends('layouts.plantilla')

@section('title','Teams '. $team->name)

@section('content')

<h1>Bienvenido al equipo {{$team->name}}</h1>

<a href="{{route('teams.index')}}">volver a todos los equipos</a>
<br>
<a href="{{route('teams.edit',$team)}}">editar equipo</a>

<form action="{{route('teams.destroy',$team)}}" method="POST">
    @csrf
    @method ('delete')
    <button type="submit">eliminar</button>
</form>


@endsection