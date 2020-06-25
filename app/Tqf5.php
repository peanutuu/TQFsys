<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tqf5 extends Model
{
    protected $fillable = ['name','year','term','subject_id','user_id'
                            ,'tqf5121','tqf5131','tqf5132','tqf5141','tqf5142','tqf5143','tqf5151','tqf5241'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Dynamic3Fields()
    {
        return $this->hasMany(Dynamic3Field::class);
    }

    public function Dynamic4Fields()
    {
        return $this->hasMany(Dynamic4Field::class);
    }

    public function Dynamic5Fields()
    {
        return $this->hasMany(Dynamic5Field::class);
    }
}   
