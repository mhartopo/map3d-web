<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    protected $fillable = ['name', 'address', 
    'longitude', 'latitude', 'length', 'width', 'model_url', 
    'owner_id', 'cluster_id', 'description' ];
}
