<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'icon',
        'des',
        'service_id',
    ];

}
