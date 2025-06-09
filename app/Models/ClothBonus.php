<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClothBonus extends Model
{
    protected $fillable = [
        'cloth_id',
        'effect_type_id',
        'count',
        'value',
        'emote',
        'title',
        'spell',
        'spell_description',
    ];
}
