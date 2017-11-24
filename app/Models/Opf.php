<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Company
 *
 * @property integer $id
 * @property string $short
 * @property string $full
 * @property-read \App\Models\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Opf whereFull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Opf whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Opf whereShort($value)
 * @mixin \Eloquent
 */

class Opf extends Model
{
    /**
     * Таблица связанная с моделью
     *
     * @var string
     * */

    protected $table = "opf";

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'id','opf_id');
    }
}
