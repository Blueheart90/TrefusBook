<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = [
        'id',
        'race_id',
        'is_variante',
        'is_passif',
        'is_invoc',
        'name',
        'picture',
        'description',
    ];

    public function levels()
    {
        return $this->hasMany(SpellLevel::class);
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}
