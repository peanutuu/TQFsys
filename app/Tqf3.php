<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tqf3 extends Model
{
    protected $fillable = ['name','year','term','subject_id','user_id'
                            ,'tqf3121','tqf3131','tqf3132','tqf3133','tqf3141','tqf3151','tqf3152','tqf3161','tqf3171','tqf3181','tqf3182','tqf3183','tqf3191'
                            ,'tqf3211','tqf3221'
                            ,'tqf3311','tqf3321','tqf3322','tqf3323','tqf3324','tqf3331','tqf3341'
                            ,'tqf3412','tqf3413','tqf3422','tqf3423','tqf3432','tqf3433','tqf3442','tqf3443','tqf3452','tqf3453'
                            ,'tqf3521','tqf3522'
                            ,'tqf3610','tqf3620','tqf3630'
                            ,'tqf3710','tqf3720','tqf3730','tqf3740','tqf3750'];

    public function Subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function SIC()
    {
        return $this->belongTo(SIC::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function DynamicFields()
    {
        return $this->hasMany(DynamicField::class);
    }

}
