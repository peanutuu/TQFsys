<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dynamic4Field extends Model
{
    protected $fillable = [
        'tqf5221', 'tqf5222', 'tqf5223','tqf5_id'
    ];

    public function Dynamic4Field(){
        return $this->belongsTo(Tqf5::class);
    }
}
