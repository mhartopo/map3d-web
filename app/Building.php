<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['name', 'address', 'function', 'value', 
    'longitude', 'latitude', 'length', 'width', 'height', 'model_url', 
    'owner_id', 'cluster_id', 'description' ];
}
