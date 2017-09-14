<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class opf extends Model
{
    /**
     * Таблица связанная с моделью
     *
     * @var string
     * */

    protected $table = "opf";

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
