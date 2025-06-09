<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = [
        'id',
        'official_id',
        'name',
        'information',
        'slug',
        'level',
        'picture',
        'category_id',
        'cloth_id',
        'choose_effect',
        'give_boost',
        'cannot_fm',
        'swf',
        'harness',
        'main_color1',
        'main_color2',
        'main_color3',
        'png_color1',
        'png_color2',
        'png_color3',
        'size',
        'cameleon',
    ];

    public function cloth()
    {
        return $this->belongsTo(Cloth::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function weapon()
    {
        return $this->hasOne(Weapon::class);
    }

    public function effects()
    {
        return $this->hasMany(ItemEffect::class);
    }

    public function constraints()
    {
        return $this->hasMany(ItemConstraint::class);
    }

    public function isWeapon(): bool
    {
        return $this->weapon !== null;
    }

    // Scope para obtener solo armas
    public function scopeWeapons($query)
    {
        return $query->whereHas('weapon');
    }

    // Scope para obtener solo items que NO son armas
    public function scopeNonWeapons($query)
    {
        return $query->whereDoesntHave('weapon');
    }
}
