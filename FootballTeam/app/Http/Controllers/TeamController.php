<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeam;
use App\Models\game;

class TeamController extends Controller
{
    public function index(){        

        $teams = Team::orderBy('id','desc')->paginate();

        return view('teams.index', compact('teams'));
    }

    public function create(){

        return view('teams.create');
    }

    public function show(Team $team){
        
        $game= $team->Games()->get();

        

    return view('teams.show', compact('team','game'));

    }

    public function edit(Team $team){
        return view('teams.edit',compact('team'));
       
    }

    public function store(StoreTeam $request){

       
        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;

        // $ o -> save();

        $team = Team::create($request->all());

        return redirect()->route('teams.show',$team);

    }

    public function update(Request $request, Team $team){

        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'categoria' => 'required'
        // ]); 

    //    $curso->name= $request->name;
    //    $curso->description= $request->description;
    //    $curso->categoria= $request->categoria;

    //    $curso-> save();

    $team->update($request->all());

       return redirect()->route('teams.show',$team);


    }

    public function destroy(Team $team){

        $team->delete();

        return redirect()->route('teams.index');

    }

}
