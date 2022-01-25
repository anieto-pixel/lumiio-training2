<?php

namespace App\Models;

class Post
{
    public static function find($slug){

        $path = __DIR__ . "/../resources/posts/{$slug}.html";

        if (!file_exists($path = resource_path("post/{$slug}.html"))) {//I don't know what he's doign ehre!
            //return redirect('/');//we took this out because the job of this method isn't to redirect thigns, is just to find posts
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", 5, function() use ($path) {
            var_dump('file_get_contents');
        });

    }

}
