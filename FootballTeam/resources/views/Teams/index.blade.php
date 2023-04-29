@extends('layouts.plantilla')

@section('title','Teams')

@section('content')
    <h1 class="text-center text-2xl mt-20 font-bold">¡Bienvenido a tus equipos!</h1>
    <p class="text-center mt-2">en esta seccion podras ver todos los equipos que posees, editarlos y agregarle los partidos correspondientes!</p>
    
    <div class="flex justify-center mt-16">
    <a href="{{route('teams.create')}}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            New Team
      </button>
    </a>
    </div>
    
    <div class="flex flex-wrap items-stretch justify-between max-w-screen-lg mx-auto m-20">
    @foreach ($teams as $team)
    <div class="flex-grow-0 flex-shrink-0 flex-basis-auto">
    <a href="{{route('teams.show',$team->id)}}" class="flex-auto w-80 h-40 mb-6 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{$team->name}}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{$team->bio}}</p>
    </a>
    </div>
    @endforeach
</div>

  
    
    {{$teams->links()}}


@endsection