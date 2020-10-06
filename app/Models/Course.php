<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function trainor(){
        return $this->belongsTo('App\Trainor');
    }
    public function trainee(){
        return $this->hasMany('App\Trainee');
    }
    use HasFactory;
}
