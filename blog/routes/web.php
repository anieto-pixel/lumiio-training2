<?php

use Illuminate\Support\Facades\Route;
use app\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

    Route::get('/', function () {
        $files = File::files(resource_path("posts"));


            $posts



    }




    );






    Route::get('posts/{slug}' , function ($slug) {
        //I'm trying to find a post by it's tail address (slug) and pass it to a view called "post"
        return view('post', ['post' => Post::find($slug)]);

    })->where('post', '[A-z_/-]+');
