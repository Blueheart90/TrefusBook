<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EffectType extends Model
{
    public $incrementing = false;
    protected $keyType = 'integer';
    protected $fillable = [
        'id',
        'value',
        'display_name',
        'description',
        'type',
    ];
}
