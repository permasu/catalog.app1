<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //

    public function opf () {
        return $this->hasOne('App\Models\Opf', 'id', 'opf_id');
    }

    public function phones () {
        return $this->hasMany('App\Models\Phone');
    }

    public function addresses () {
        return $this->hasMany('App\Models\Address\Address');
    }

    public function categories () {
        return $this->belongsToMany('App\Models\Category');
    }
}
