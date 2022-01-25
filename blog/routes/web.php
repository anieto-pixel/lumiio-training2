<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}' , function ($post) {
    $path = __DIR__ . "/../resources/posts/{$post}.html";

    if (!file_exists($path)) {
        ddd('file does not exist');
    }

    $post =cache()->remember("posts.{$post}", 5, function() use ($path) {
        var_dump('file_get_contents');//this is ehre to show when we are in the cache and when we are not
        return file_get_contents($path);

        });
    return view('post', [
        'post' => $post
    ]);
})->where('post', '[A-z_/-]+');


/*
 //the final thing that should work

Route::get(
    $path = __DIR__ . "/../resources/posts/{$slug}.html";
        if(!file_exists($path)){
            ddd('file does not exist');
        }

        $post = file_get_contents($path);

        return view('post', [
            'post' => $post
        ]);

);
 */


/*
  //the last sample before it no longer worked
Route::get(
    'post', function(){
        return view(
            'post', [
                'post' => file_get_contents(
                    __DIR__ . '/../resources/posts/my-first-post.html'
                )
            ]
        );
    }

);
*/


