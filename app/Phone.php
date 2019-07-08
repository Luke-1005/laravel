<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    public function getPhoneAttribute($value)
    {
    	if(mb_strlen($value)>5){
    		return mb_substr($value, 0,5).'...';
    	}
        return ucfirst($value);
    }
    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = strtolower($value);
    }
}
