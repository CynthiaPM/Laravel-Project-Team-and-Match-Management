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
        <textarea name="description"  rows="5">{{old('description')}}</textarea>
    </label>
    
    @error('description')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    
    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>

    @error('categoria')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror

    <br>
    <button type="submit">Enviar</button>
</form>

@endsection