<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Message;
use App\Models\Post;
use Mail;

class MailController extends Controller
{
    public function mail(Request $request){

        $massage = $request->all();

        Mail::to('abduraximsharifjonov466@gmail.com')->send(new Message($massage));


        $mess = 'Post sent successfully!';


        return back()->with(['email'=>$mess]);

    }

    public function searchPage(Request $request){

        $value = $request->q;

        $posts = Post::where('title_uz','like','%'.$value.'%')->
        orwhere('title_ru','like','%'.$value.'%')->
        orwhere('title_en','like','%'.$value.'%')->
        orwhere('description_uz','like','%'.$value.'%')->
        orwhere('description_ru','like','%'.$value.'%')->
        orwhere('description_en','like','%'.$value.'%')->
        orwhere('content_uz','like','%'.$value.'%')->
        orwhere('content_ru','like','%'.$value.'%')->
        orwhere('content_en','like','%'.$value.'%')->get();
     
        if(count($posts)>0){
            return view('search',['posts'=>$posts]);
        }else{
            return redirect()->route('index')->with('message','Bunday malumot mavjud emas');
        }
        
    }
}
