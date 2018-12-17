<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    public function benefited()
    {
        return $this->belongsTo('App\Benefited', 'benefited_id');
    }
}
