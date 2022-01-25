<?php

use Illuminate\Support\Facades\Route;
use app\Models\Post;

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


Route::get('posts/{slug}' , function ($slug) {
    //I'm trying to find a post by it's tail address (slug) and pass it to a view called "post"
    return view('post',[
        'post' => Post::find($slug) //no constructor here/ you call the class without building an isntance? can you do that?
    ]);

})->where('post', '[A-z_/-]+');
