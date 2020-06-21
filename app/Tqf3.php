<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tqf3 extends Model
{
    protected $fillable = ['name','year','term','subject_id','user_id'];

    public function Subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function SIC()
    {
        return $this->belongTo(SIC::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
