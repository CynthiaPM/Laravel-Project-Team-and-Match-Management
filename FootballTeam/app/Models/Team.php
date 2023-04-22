<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    //relation one to many (inverse)

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relation one to many

    public function Games(){
        return $this->hasMany('App\Models\Game');
    }
}
