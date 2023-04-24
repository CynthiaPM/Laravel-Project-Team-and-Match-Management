@extends('layouts.plantilla')

@section('title','Teams')

@section('content')
    <h1>aqui se mostraran los equipos</h1>
    <a href="{{route('teams.create')}}">registrar equipo</a>

    <ul>
        @foreach ($teams as $team)
        <li><a href="{{route('teams.show',$team->id)}}">{{$team->name}}</a></li>
        
    @endforeach
    </ul>
    
    {{$teams->links()}}


@endsection