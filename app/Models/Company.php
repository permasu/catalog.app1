<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Company
 *
 * @property integer $id
 * @property string $short_name
 * @property string $full_name
 * @property string $description
 * @property string $web
 * @property string $email
 * @property string $address
 * @property float $inn
 * @property \App\Models\opf $opf
 * @property int|null $opf_id Код ОКОПФ
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Phone[] $phones
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereInn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereOpfId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereWeb($value)
 * @mixin \Eloquent
 */
class Company extends Model
{

    protected $fillable = [
        'short_name', 'full_name', 'description',
        'address', 'web', 'email'
    ];

    public function opf () {
        return $this->hasOne('App\Models\Opf', 'id', 'opf_id');
    }

    public function phones () {
        return $this->hasMany('App\Models\Phone');
    }

    public function categories () {
        return $this->belongsToMany('App\Models\Category');
    }

}
