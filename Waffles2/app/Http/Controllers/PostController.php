<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostController extends Controller{

    public function index(){ /* declares the index function within this controller */
        return view('post', [
            'post'=>Post::latest()->filter(request(['search', 'category', 'author']))->get(),
        'categories' => Category::all(),
        'currentCategory' => Category::firstWhere('slug', request('category'))]);

        /* I have no clue fo what this thing is returning beyond the fact that it is a view */
    }

    public function show(Post $post){
        return view('post', ['post' => $post]);
    }
}

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
