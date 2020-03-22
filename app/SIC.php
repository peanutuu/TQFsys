<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SIC extends Model
{
    protected $fillable = ['course_id','subject_id','tag'];

    public function Course(){
        return $this->belongsTo(Course::class);
    }

    public function Subject(){
        return $this->belongsTo(Subject::class);
    }
}
