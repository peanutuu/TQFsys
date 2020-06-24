<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [  'courseid','coursename','coursefac'
                            ,'coursefac2','courselv','coursecredit','courseyear'
                            ,'courselowcredit','course1'
                            ,'course2','course21','course22','course221','course222'
                            ,'course223','course224','course225','course3','course4','course5','coursesum'
                            ,'user_id'
                        ];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function sics(){
        return $this->hasMany(SIC::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
