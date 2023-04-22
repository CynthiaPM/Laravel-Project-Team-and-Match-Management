@extends('layouts.plantilla')

@section('title','Teams')

@section('content')
    <h1>aqui se mostraran los equipos</h1>

    <ul>
        @foreach ($teams as $team)
        <li>{{$team->name}}</li>
        
    @endforeach
    </ul>
    
    {{$teams->links()}}


@endsection