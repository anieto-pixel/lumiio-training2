<?php

namespace App\View\Components;

class CategoryDropdown extends Component{
    public function __construct(){

    }

    @return \Illuminate\Contract\View\View\Closure_string

    public function render(){
        return view('components.category-dropdown',['categories'=> Category::all()]);
    }

}
