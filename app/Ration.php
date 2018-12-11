<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ration extends Model
{
    public $timestamps = false;

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}
