<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    //con filable se colocan los campos que quiero que se guarden
    //protected $fillable =['name','bio','user_id'];
    //con guarded se colocan los campos que no quiero que se guarden
    
    protected $guarded = [];

    //relation one to many (inverse)    

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relation one to many

    public function Games(){
        return $this->hasMany('App\Models\Game');
    }
}
