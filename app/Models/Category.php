<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $incrementing = false;
    protected $keyType = 'integer';
    protected $fillable = ['id', 'value', 'name', 'type'];
}
