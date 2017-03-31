<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /* elementos que pueden ser agregados por el modelo*/
    protected $fillable = ['name'];
}
