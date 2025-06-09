<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    protected $fillable = [
        'id',
        'level',
        'bonus',
        'count_item',
        'cannot_craft',
        'name',
        'slug',
    ];
}
