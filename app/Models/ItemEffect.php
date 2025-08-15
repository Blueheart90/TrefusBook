<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemEffect extends Model
{
    protected $fillable = [
        'id',
        'item_id',
        'effect_type_id',
        'min_value',
        'max_value',
        'emote',
        'title',
        'spell',
        'spell_description',
    ];

    public function effectType()
    {
        return $this->belongsTo(EffectType::class);
    }
}
