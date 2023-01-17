<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $image = $request->file('image')->store('public/abouts');
      About::create([
            'name' => $request->name,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'image' => $image,

        ]);

        return redirect(route('admin.about.index'))->with('success', 'Category Created Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = About::get([
            'name' ,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return  view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'name'=> 'required',
            'description'=>'required',
            'short_description'=>'required',
        ]);
        $image = $about->image;
        if ($request->hasFile('image')) {
            Storage::delete($about->image);
            $image = $request->file('image')->store('public/abouts');
        }

        $about->update([
            'name' => $request->name,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'image'=>$image,
        ]);

        return redirect(route('admin.about.index'))->with('success', 'Category Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        Storage::delete($about->image);
        $about->delete();
        return redirect(route('admin.about.index'))->with('danger', 'Category Deleted Successfully!!');
    }
}
