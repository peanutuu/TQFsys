<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    protected $fillable = ['coursename','coursefac','course1_1','course1_2','course1_3','course1_4','course1_5','course2_1','course2_2','course2_3','course2_4','course2_5'];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function sics(){
        return $this->hasMany(SIC::class);
    }
}
