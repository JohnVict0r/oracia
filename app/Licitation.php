<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Licitation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'licitation_code', 'description', 'scope'
    ];

    protected $dates = ['deleted_at'];
}
