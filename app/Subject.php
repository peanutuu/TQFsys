<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    
    protected $fillable = ['subjectid','subjectnameen','subjectnameth','subjectfac','credit','avalible'];
    // protected $fillable = ['subjectid','subjectnameen','subjectnameth','subjectfac','credit','avalible','course_id'];

    public function Course(){
        return $this->belongsTo(Course::class);
    }

    public function Tqf3s(){
        return $this->hasMany(Tqf3::class);
    }

    public function Tqf5s(){
        return $this->hasMany(Tqf5::class);
    }

    public function SIC(){
        return $this->hasMany(SIC::class);
    }

}