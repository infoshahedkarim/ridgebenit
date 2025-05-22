<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function service()
    {
    return $this->belongsTo(Service::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    protected $fillable = [
        'name',
        'slug',
        'short_des',
        'service_1',
        'service_2',
        'service_id',
        'project_id',
        'img',
        'des'
    ];
}
