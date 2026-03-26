<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use Str;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::paginate(2);
        return view("admin.tag.index",compact("tags"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.tag.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request)
    {

        $requestData = $request->all();
        $requestData["slug"] = Str::slug($request->name_uz);

        Tag::create($requestData);

        return redirect()->route("admin.tag.index")->with("success","Tag create successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('admin.tag.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view("admin.tag.edit",compact("tag"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagRequest $request, Tag $tag)
    {

        $requestData = $request->all();
        $requestData["slug"] = Str::slug($request->name_uz);

        $tag->update($requestData);

        return redirect()->route("admin.tag.index")->with("success","Tag edit successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return back()->with('deleted'.'Post deleted successfully!');
    }
}
