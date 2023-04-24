@extends('layouts.plantilla')

@section('title','Teams edit')

@section('content')

<h1>aqui se editan los equipos</h1>

<form action="{{route('teams.update',$team)}}" method="POST">

    @csrf
    @method('put')

    <label>
        Nombre:
    <br>
        <input type="text" name="name" value="{{$team->name}}">
    </label>

    @error('name')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <label >
        Description:
    <br>
        <textarea name="bio"  rows="5">{{$team->bio}}</textarea>
    </label>
    
    @error('bio')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror

    <br>

    <label >user
        <input type="text" name="user_id">
    </label>
   
   
    <br>
    <button type="submit">Actualizar</button>
</form>


@endsection