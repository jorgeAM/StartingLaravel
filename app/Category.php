<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* elementos que pueden ser agregados por el modelo*/
    protected $fillable = ['name'];

    /*relacion con articles*/
    public function articles(){
    	return $this->hasMany('App\Article');
    }
}
