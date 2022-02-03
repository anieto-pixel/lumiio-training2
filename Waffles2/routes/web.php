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

Route::get('/', [Postcontroller::class, 'índex'])->name('home');
    /* when you receive '/'from the url, do...[an array of the string returned by the class method in postcontroller, and the string 'índex']?
    and from the tesult of this get, that hsould be an object, get the value  name('home'), with home being a method I think, adn hpme being a string given as a variable?, and thats the route I think


    I think that :: is for static methods and -> for regular?
      */

Route::get('posts/{post::slug}', [Postcontroller::class , 'show']);
    /* when you receive 'posts/ + the function slug from a post class?' from the url, do [array like the one avobe] */


Route::get('authors/{author::username}', function($author){
    return view('posts',['post'=>$author->posts, 'categories'=>Category::all()]);
    /* when you receive 'posts/ + the function username frim the author class?' from the url, run the function that,
    given the author as a parameter, returns the required view of the 'post'view, and gives as parameter an asociative array that has key 'post'for the value posts of the author,
    andthe key 'categories' for the function all of the class category  */
});
