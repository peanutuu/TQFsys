<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dynamic3Field extends Model
{
    protected $fillable = [
        'tqf5211', 'tqf5212', 'tqf5213', 'tqf5214','tqf5_id'
    ];

    public function Dynamic3Field(){
        return $this->belongsTo(Tqf5::class);
    }

}
