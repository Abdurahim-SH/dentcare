<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Post;
use App\Models\Category;
use App\Models\Price;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Service;
use App\Models\Testiominal;
use App\Models\Appointment;

class MainController extends Controller
{
    public function index(){
        $abouts = About::all();
        $prices = Price::all();
        $teams = Team::all();
        $services = Service::all();
        $appointments = Appointment::all();
        $testiominals = Testiominal::all();
        $posts = Post::where('special_new',1)->limit(6)->latest()->get();
        return view('index',compact('posts','abouts','prices','appointments','testiominals','services','teams'));
    }
    public function about(){
        $about = About::all();
        return view('about',['abouts'=>$about]);
    }
    public function service(){
        return view('service',['services'=>Service::all()]);
    }
    public function price(){
        return view('price',['prices'=>Price::all()]);
    }
    public function team(){
        return view('team',['teams'=>Team::all()]);
    }
    public function testiominal(){
        $testiominals = Testiominal::all();
        return view('testiominal',['testiominals'=>$testiominals]);
    }
    public function appointment(){
        $appointments = Appointment::all();
        return view('appointment',['appointments'=>$appointments]);
    }
    
    public function categoryPosts($slug){  
        $latestPosts = Post::limit(6)->latest()->get();
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->paginate(2);
        return view("categoryPosts",compact('posts','category','latestPosts'));
    }
    public function postDetail($slug){
        $latestPosts = Post::limit(6)->latest()->get();
        $post = Post::where('slug',$slug)->first();
        return view('postDetail',compact('post','latestPosts'));
    }
    public function latestBlog(){
        return view('sections.latestPost');
    }
    public function contact(){
        return view('contact');
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    
}
