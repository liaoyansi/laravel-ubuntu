<?php

namespace App\module\system;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //
    protected $table = 'system_config';

    protected $fillable = [
        'name'
    ];
}
