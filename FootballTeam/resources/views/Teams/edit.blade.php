@extends('layouts.plantilla')

@section('title','Teams edit')

@section('content')

<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">¡Time to edit your Team!</h2>

  
    <div class="mt-8 mb-20 sm:mx-auto sm:w-full sm:max-w-md shadow-xl rounded flex flex-col justify-center py-12 px-6 lg:px-8 z-10 bg-opacity-0">
        <div class="bg-white py-8 px-6 rounded-lg sm:px-10">
            <form action="{{route('teams.update',$team)}}" method="POST" class="mb-0 space-y-6 w-full h-full p-0">
            
                @csrf
                @method('put')
            
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Team name:                
                    <div class="mt-4">
                        <input type="text" name="name" value="{{$team->name}}" class="border-0 font-light border-b rounded-sm w-full h-10"></div>
                </label>
                @error('name')
                <small>{{$message}}</small>                
                @enderror
                
            </div>
                       
            <div class="block text-sm font-medium text-gray-700">
                <label>Biography
                    <div class="mt-4">
                        <textarea name="bio"  rows="5"  class="border-0 font-light border-b rounded-sm w-full h-30">{{$team->bio}}  
                        </textarea></div>
                </label>
                @error('bio')
                <small>{{$message}}</small>
                @enderror
            </div>
   
            <div class="flex flex-col" >
                <label class=" text-sm font-medium text-gray-700 mb-5">User number
                    <input type="text" name="user_id" value="{{$team->user_id}}"class="border-4 h-10 ml-4">
                </label>
            </div>

                       
                                     
                <div class="flex justify-center"><button type="submit" value="send" class="w-40 py-2 px-4 mr-4 mb-5 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-4">Edit</button></div>

            </form>    
                    
            <div class="flex justify-center "> 
                <a href="{{route('teams.show',$team)}}">
                <button class="w-40 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">go back</button></a>
            </div>
            
        </div>
    </div>


@endsection