<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    //use FormAccessible;
    
    protected $fillable = ['name', 'address', 'type', 'longitude', 'latitude',
    'model_url', 'owner_id', 'description'];

    
}
