<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_text',
        'icon',
        'banner',
        'des',
        'head1',
        'head2',
        'head3',
    ];
}
