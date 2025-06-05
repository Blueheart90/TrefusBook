<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $fillable = [
        'item_id',
        'pa_cost',
        'po_min',
        'po_max',
        'cc_bonus',
        'cc_hits',
        'cc_rate',
        'hits_count',
        'hits_lines',
        'one_hand',
        'incarnation',
        'etheral',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    // Método helper para obtener el nombre del arma
    public function getName(): string
    {
        return $this->item->name;
    }

    // Método helper para obtener el daño promedio
    public function getAverageDamage(): float
    {
        return ($this->po_min + $this->po_max) / 2;
    }
}
