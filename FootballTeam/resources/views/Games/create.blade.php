@extends('layouts.plantilla')

@section('title','Teams')

@section('content')

<h1 class="text-blue-600">en esta pagina podras crear un equipo</h1>

<form action="{{route('teams.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
    <br>
        <input type="text" name="name" value="{{old('name')}}">
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
        <textarea name="bio"  rows="5">{{old('description')}}</textarea>
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
    <button type="submit">Enviar</button>
</form>

@endsection