<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    protected $fillable = ['name', 'type', 'function',
    'longitude', 'latitude', 'model_url', 'cluster_id', 'description' ];
}
