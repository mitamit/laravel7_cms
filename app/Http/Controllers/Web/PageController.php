<?php

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;


class PageController extends Controller
{
    public function blog(){

        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.posts', compact('posts'));
    }

    public function post($slug){

        $post = Post::where('slug', $slug)->first();
        return view('web.post', compact('post'));
    }

    public function category($slug){
        //consigue los post a partir de las categorias con este slug
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        
        return view('web.posts', compact('posts'));
    }

    public function tag($slug){
        //consigue los post que contengan las etiquetas cuyo slug sea el slug que estoy pasando
        $posts = Post::whereHas('tags', function($query) use ($slug){
            $query->where('slug', $slug);
        })->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.posts', compact('posts'));
    }

}
