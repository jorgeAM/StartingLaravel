<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /* elementos que pueden ser agregados por el modelo*/
    protected $fillable = ['name'];

    /*relacion con article*/
    public function articles(){
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }

    public function scopeSearch($query, $name){
    	return $query->where('name', 'LIKE', '%'.$name.'%');
    } 
}
