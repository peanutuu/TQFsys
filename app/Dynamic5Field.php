<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dynamic5Field extends Model
{
    protected $fillable = [
        'tqf5231', 'tqf5232', 'tqf5233', 'tqf5234','tqf5_id'
    ];

    public function Dynamic5Field(){
        return $this->belongsTo(Tqf5::class);
    }
}
