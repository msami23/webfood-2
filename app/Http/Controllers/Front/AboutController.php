<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('front.about' ,compact('abouts'));
    }


}
