<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatCost extends Model
{
    protected $fillable = [
        'race_id',
        'stat_type_id',
        'start',
        'cost_per_point',
    ];
}
