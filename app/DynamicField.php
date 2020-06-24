<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicField extends Model
{
    protected $fillable = [
        'tqf3511', 'tqf3512', 'tqf3513', 'tqf3514', 'tqf3515', 'tqf3516', 'tqf3517','tqf3_id'
    ];

    public function DynamicField(){
        return $this->belongsTo(Tqf3::class);
    }
}
