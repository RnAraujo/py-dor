<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefited extends Model
{
    protected $table = 'benefited';

    public function scopeName($query, $name)
    {
        if(trim($name != ''))
        {
            return $query->where('firstname', 'LIKE', "%$name%")
                ->orWhere('lastname', 'LIKE', "%$name%");
        }
    }

    public function scopeActive($query, $active)
    {
        if($active != '')
        {
            return $query->where('is_active', $active);
        }
    }

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
