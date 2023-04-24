<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
    protected $guarded = [];
    //relation one to many (inverse)

    public function team(){
        return $this->belongsTo('App\Models\Team');
    }
}
