<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tqf5 extends Model
{
    protected $fillable = ['name','year','term','subject_id','user_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}   
