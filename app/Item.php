<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'licitation_id', 'description', 'order', 'measure','quantity', 'unity_value'
    ];

    protected $dates = ['deleted_at'];
}
