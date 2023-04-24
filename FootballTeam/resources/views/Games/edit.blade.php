@extends('layouts.plantilla')

@section('title','Teams')

@section('content')

<h1>aqui se editan los equipos</h1>

<form action="{{route('games.update',$game)}}" method="POST">

    @csrf
    @method('put')

    <label>
        other team:
    <br>
        <input type="text" name="other_team" value="{{$game->other_team}}">
    </label>

    @error('other_team')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>

    <label >team id
        <input type="text" name="team_id">
    </label>
    <br>
      
    <label >city
        <input type="text" name="city">
    </label>
<br>
    <label>
        
        <select name="status" >
        <option value="win">win</option>
        <option value="lose">lose</option>
        <option value="draw">draw</option>
        <option value="coming soon">coming soon</option>
        </select>

    </label>
    <br>
      
    <label >fecha
        <input type="date" name="game_date" value="{{$game->game_date}}">
    </label>

      
    <br>
    <button type="submit">Enviar</button>
</form>

@endsection