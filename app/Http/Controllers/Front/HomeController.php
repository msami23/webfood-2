<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $menus = Menu::all();
        $categories = Category::all();
        return view('front.home', compact('categories', 'menus' , 'abouts'));
    }
}
