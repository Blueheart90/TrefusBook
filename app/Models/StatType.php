<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatType extends Model
{
    protected $fillable = ['value', 'display_name', 'icon'];
}
