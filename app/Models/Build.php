<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }

    public function buildItems()
    {
        return $this->hasMany(BuildItem::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'build_items')
            ->withPivot(['category_id', 'slot_position'])
            ->withTimestamps();
    }
}
