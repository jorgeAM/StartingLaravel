<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /* elementos que pueden ser agregados por el modelo*/
    protected $fillable = ['title', 'content', 'user_id', 'category_id'];
}
