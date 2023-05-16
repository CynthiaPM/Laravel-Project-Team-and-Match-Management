<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGame;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GameController extends Controller
{
        
    public function index(){

        $games = Game::orderBy('id','desc')->paginate();
        
            
        return view('games.index',compact('games'));

    }

    public function show(Game $game){
        return view ('games.show',compact('game'));
    }

    public function create($team){        
        
        $teams = Team::all();
      
        return view('games.create',compact('team','teams'));
    }

    public function store(StoreGame $request){
        
        // $team= $request->input('id');
        
        $game = Game::create($request->all());

        // $game = Game::create(array_merge($request->all(), ['team_id' => $team]));

        return redirect()->route('teams.show',$game->team_id);

    }

    public function edit(Game $game){
        $teams = Team::all();
        
        return view('games.edit',compact('game','teams'));
    }

    public function update(Request $request, Game $game){

        $game->update($request->all());

        return redirect()->route('teams.show',$game->team_id);

    }

    public function destroy(Game $game){

        $team_id = $game->team_id;

        $game->delete();

        return redirect()->route('teams.show',$team_id);
    }
}
