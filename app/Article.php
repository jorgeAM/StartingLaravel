<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    /* llamamos al paquete Sluggable*/
    use Sluggable;

    public function sluggable(){
        return [
            'slug'=>[
                'source'=>'title'
            ]
        ];
    }

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

    /*scope para buscar articles*/
    public function scopeSearch($query, $title){
        return $query->where('title', 'LIKE', '%'.$title.'%');
    } 
}
