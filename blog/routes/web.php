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

Route :: get('post', function(){
        $post => file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html');
        return view ('post',[
            'post'=>$post
    ]); /*as a second set of value arguments, this method accepts
an array of key-value pairs, in the variable "post*, that in this case we'll use to ensure that the text in the
posts displayed aren't always the same one*/
});
