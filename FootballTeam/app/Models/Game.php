<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
    protected $guarded = [];
    //relation one to many (inverse)

    public function localteam(){
        return $this->belongsTo(Team::class,'team_id');
    }
    public function oponentGames(){
        return $this->belongsTo(Game::class,'other_team');
    }
}
