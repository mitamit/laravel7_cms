<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'body', 'file'
    ];

    //un post es de un usuario
    public function user(){
        return $this->belongsTo('User::class');
    }

    //un post es de una categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //un post tiene muchas etiquetas que tienen muchos posts
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
