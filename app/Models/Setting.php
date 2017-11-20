<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

    protected $fillable = [
        'name', 'key', 'value', 'desc'
    ];

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
    }
}