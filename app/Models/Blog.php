<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_decs',
        'img',
        'category',
        'author',
        'des',
    ];
}
