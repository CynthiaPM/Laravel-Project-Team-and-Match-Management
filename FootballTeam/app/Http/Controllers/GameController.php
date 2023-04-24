<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGame;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
        
    public function index(){

        $games = Game::orderBy('id','desc')->paginate();
        
            
        return view('games.index',compact('games'));

    }

    public function show(Game $game){
        return view ('games.show',compact('game'));
    }

    public function create(){
        return view('games.create');
    }

    public function store(StoreGame $request){

        $game = Game::create($request->all());

        return redirect()->route('games.show',$game);

    }

    public function edit(Game $game){
        return view('games.edit',compact('game'));
    }

    public function update(Request $request, Game $game){

        $game->update($request->all());

        return redirect()->route('games.show',$game);

    }

    public function destroy(Game $game){

        $game->delete();

        return redirect()->route('games.index');
    }
}
