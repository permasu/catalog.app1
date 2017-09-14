<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function region () {
        return $this->HasOne('\App\Models\Address\Region', 'parent_id', 'id');
    }
}
