<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpellLevel extends Model
{
    protected $fillable = [
        'spell_id',
        'level',
        'pa_cost',
        'po',
        'cc',
        'cc_rate',
        'ir',
        'ldv',
        'ltj',
        'pb',
        'lel',
        'lt',
    ];

    public function spell()
    {
        return $this->belongsTo(Spell::class);
    }
}
