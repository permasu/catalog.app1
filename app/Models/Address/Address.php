<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function company () {
        return $this->belongsTo('App\Models\Company');
    }

    public function region () {
        return $this->hasOne('App\Models\Address\Region', 'region_guid', 'guid');
    }

    public function city () {
        return $this->hasOne('App\Models\Address\City', 'city_guid', 'guid');
    }

    public function street () {
        return $this->hasOne('App\Models\Address\Street', 'street_guid', 'guid');
    }
}
