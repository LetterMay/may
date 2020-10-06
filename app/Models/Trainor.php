<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainor extends Model
{
    public function course(){
        return $this->hasMany('App\Course');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    use HasFactory;
}
