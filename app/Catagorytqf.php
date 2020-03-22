<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagorytqf extends Model
{
    protected $table = 'catagorytqfs';

    public function tqf3s()
    {
        return $this->hasMany(Tqf3::class);
    }
}
