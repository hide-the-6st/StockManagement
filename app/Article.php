<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'place_id', 'article_name', 'number'
    ];
}
