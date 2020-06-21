<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SIC extends Model
{
    protected $fillable = ['course_id','subject_id','tag'
                            ,'resp11','resp12','resp13','resp14','resp15','resp16','resp17'
                            ,'resp21','resp22','resp23','resp24','resp25','resp26','resp27','resp28'
                            ,'resp31','resp32','resp33','resp34'
                            ,'resp41','resp42','resp43','resp44','resp45','resp46'
                            ,'resp51','resp52','resp53','resp54'
                            ];

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

    public function Subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function Tqf3s()
    {
        return $this->hasMany(Tqf3::class);
    }
}
