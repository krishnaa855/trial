<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class First extends Model
{
    protected $fillable = [
        'name', 'number','image',
    ];
}
