<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $fillable = ['address', 'function' , 'value', 'length', 'width',
    'longitude', 'latitude', 'model_url', 'cluster_id', 'owner_id', 'description'];
}
