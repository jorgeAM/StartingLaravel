<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /* elementos que pueden ser agregados por el modelo*/
    protected $fillable = ['name', 'article_id'];
}
