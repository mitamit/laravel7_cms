<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
        'name','slug'
    ];

    //un post tiene muchas etiquetas que pueden estar en muchos posts
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
