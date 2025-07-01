<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpellEffect extends Model
{
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = [
        'id',
        'spell_id',
        'spell_level_id',
        'title',
        'effect_type_id',
        'min',
        'max',
        'cc',
        'duration',
    ];
    public function level()
    {
        return $this->belongsTo(SpellLevel::class);
    }

    public function type()
    {
        return $this->belongsTo(EffectType::class);
    }
}
