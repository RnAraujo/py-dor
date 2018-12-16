<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefited extends Model
{
    protected $table = 'benefited';

    public function ration()
    {
        return $this->belongsTo('App\Ration');
    }

    public function typeBeneficiary()
    {
        return $this->belongsTo('App\TypeBeneficiary', 'type_benefited_id');
    }

    public function dependence()
    {
        return $this->belongsTo('App\Dependence');
    }

    public function getFullNameAttribute()
    {
        return $this->lastname . ' ' .$this->firstname;
    }
}
