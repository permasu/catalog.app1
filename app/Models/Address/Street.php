<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;

class Street extends model {

    public function City () {
        return $this->hasOne('App\Models\Address\City', 'paretn_id', 'id');
    }

}
