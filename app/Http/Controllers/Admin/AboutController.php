<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.about.index',['abouts'=>About::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutRequest $request)
    {
      

        $formData = $request->all();

        if($request->hasFile('image')){

            $file = $request->file('image');
            $fileName = time();
            $file->move('asset/img',$fileName);
            $formData['image'] = $fileName;

        }

        
        About::create($formData);

        return redirect()->route('admin.about.index')->with('created','Post created successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.about.show',compact('about'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutRequest $request, About $about)
    {
        $formData = $request->all();

        if($request->hasFile('image')){

            $file = $request->file('image');
            $fileName = time();
            $file->move('asset/img',$fileName);
            $formData['image'] = $fileName;

        }

        $about->update($formData);

        return redirect()->route('admin.about.index')->with('updated','Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {

        if($about->image != ""){
            $aboutImage = public_path('asset/img/'.$about->image);
            unlink($aboutImage);
        }

        $about->delete();

        return back()->with('deleted','Post deleted successfully!');
    }
}
