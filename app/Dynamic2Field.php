<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dynamic2Field extends Model
{
    protected $fillable = [
        'tqf3521', 'tqf3522', 'tqf3523', 'tqf3524','tqf3_id'
    ];

    public function Dynamic2Field(){
        return $this->belongsTo(Tqf3::class);
    }

}

