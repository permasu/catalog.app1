<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function Cities () {
        return $this->belongsTo('App\Models\Address\City','id','parent_id');
    }
}
