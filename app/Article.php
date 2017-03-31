<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /* elementos que pueden ser agregados por el modelo*/
    protected $fillable = ['title', 'content', 'user_id', 'category_id'];

    /*relacion con category*/
    public function category(){
    	return $this->belongsTo('App\Category');
    }

    /*relacion con user*/
    public function user(){
    	return $this->belongsTo('App\User');
    }

    /*relacion con image*/
    public function images(){
        return $this->hasMany('App\Image');
    }

    /*relacion con tag*/
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
