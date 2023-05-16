@extends('layouts.plantilla')

@section('title','games create')

@section('content')



<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Match data</h2>

  
    <div class="mt-8 mb-20 sm:mx-auto sm:w-full sm:max-w-md shadow-xl rounded flex flex-col justify-center py-12 px-6 lg:px-8 z-10 bg-opacity-0">
        <div class="bg-white py-8 px-6 rounded-lg sm:px-10">
            <form action="{{route('games.store')}}" method="POST" class="mb-0 space-y-6 w-full h-full p-0">
            @csrf
            
            <div>
                
                <label class="block text-sm font-medium text-gray-700">
                    Opponent name:                
                    <select name="other_team" class="h-10 border-4 ml-4">
                        @foreach ($teams as $teams)
                            <option value="{{$teams->id}}">{{$teams->name}}</option>
                        @endforeach                    
                    </select>
                    
                </label>
                @error('other_team')                    
                    <small>{{$message}}</small>
                @enderror
                
            </div>
            {{-- <label >team id
                <input type="text" name="team_id">
            </label>
            <br> --}}
            
            <div class="block text-sm font-medium text-gray-700">
                <label>City/Stadium
                    <div class="mt-4">
                        <input type="text" name="city" class="border-0  border-b rounded-sm w-full h-10"></div>
                </label>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Status of the game
                                 
                    <select name="status" class="h-10 border-4 ml-4">
                        {{-- @foreach ($game as $game)
                            <option value="{{$game->status}}">{{$game->status}}</option>
                        @endforeach --}}
                    <option value="win">win</option>
                    <option value="lose">lose</option>
                    <option value="draw">draw</option>
                    <option value="coming soon">coming soon</option>
                    </select>
                
                </label>
            </div>
            
            <div class="flex flex-col" >
                <label class=" text-sm font-medium text-gray-700 mb-5">Date of the game
                    <input type="date" name="game_date" class="border-4 h-10 ml-4">
                </label>
            </div>

            {{-- paso el id del team --}}

            <label>           
                <input type="hidden" name="team_id" value="
                {{$team}}">
            </label>
            
                                     
                <div class="flex justify-center"><button type="submit" value="send" class="w-40 py-2 px-4 mr-4 mb-5 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-4">ok!</button></div>

            </form>    
                    
            <div class="flex justify-center "> 
                <a href="{{route('teams.show',$team)}}">
                <button class="w-40 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">go back</button></a>
            </div>
            
        </div>
    </div>

@endsection