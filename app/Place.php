<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'id', 'user_id', 'name'
    ];
}
