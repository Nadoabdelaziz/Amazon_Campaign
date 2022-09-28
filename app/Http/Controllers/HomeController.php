<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index($name){
        $cat = Category::where('name',$name)->first();
        return view('partials.scrape',['cat' => $cat]);
    }
}
