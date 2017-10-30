<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $fillable = ['name', 'type', 
    'longitude', 'latitude', 'model_url', 'cluster_id', 'description' ];
}
