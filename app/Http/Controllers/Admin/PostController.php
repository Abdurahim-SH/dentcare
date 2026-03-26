<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $posts = Post::all();
        return view('admin.post.index',['posts'=>Post::paginate(2)],compact('posts'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $tag = Tag::all();
        return view('admin.post.create',['categorys'=>$category,'tags'=>$tag]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {


        $requestData = $request->all();
        

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move('temp/img/',$file_name);
            $requestData['image'] = $file_name;
        }

        $post = Post::create($requestData);

        $post->tags()->attach($request->tags);

        return redirect()->route('admin.post.index')->with('msg','Post created successfully');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categorys = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit',compact('post','categorys','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {

        $requestData = $request->all();

        if(empty($request->special_new)){
            $requestData['special_new'] = 0;
        }

        if($request->hasFile("image")){
            $file = $request->file("image");
            $imageName = time().'.'.$file->getClientOriginalExtension();
            $file->move('temp/img/',$imageName);
            $requestData['image'] = $imageName;
        }
        
        $requestData['slug'] = \Str::slug($request->title_uz);

        $post->update($requestData);
        
        $post->tags()->sync($request->tags);

        return redirect()->route('admin.post.index')->with('success','Post update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->back()->with("delete","Deleted");
    }
}
