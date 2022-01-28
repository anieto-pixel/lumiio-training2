<?php

namespace App\Models;
use Illuminate\Support\Facades\File;
use mysql_xdevapi\Exception;

class Post{
    public $title;
    public $except;
    public $date;
    public$body;
    public $slug;
     public function __constuct($title, $excerpt, $date, $body, $slug){
         $this->title = $title;
         $this-> except = $excerpt;
         $this->date;
         $this-> body;
         $this ->slug;
     }

    public static function all(){
        $files=File::files(resource_path("post/"));
        return array_map(function ($file) { return $file-- > getComments();}, $files);//this applies a function (get the comments in the file(what is comments in this context)
        //Question. Does File define itself for Array_maps?
    }

    public static function find($slug){
        $path = resource_path('"post/{$slug}.html');
        if(!file_exists($path)){
            throw new ModelNotFoundException();
        }
        return cache()->remember('"posts.{$slug}', 1200, function () use ($path) {//what's the difference with function($path)
            return file_get_contents($path);
        });
    }


}
