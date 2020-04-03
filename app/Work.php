<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'Works';
    protected $fillable = [
        'slug', 'name', 'cat', 'period', 'description', 'technique', 'url', 'link', 'img'
    ];
}
