@extends('layouts.master')

@section('content')
<section class="news">
      <div class="container">
        <div class="news__wrapper basic-flex">
          <div class="mb-5 py-5">
            <h3 class="mb-4 section-title">{{$category['name_'.\App::getLocale()]}}</h3>
              @foreach($category->posts as $post)
                  <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                      <a href="{{route('post.detail',$post->slug)}}">
                          <img class="img-fluid rounded" src="{{asset('temp/img/'.$post->image)}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                          <div class="d-flex flex-column pl-3">
                              <a class="text-dark mb-2" href="">{{$post->description}}</a>
                              <div class="d-flex">
                                  <span class="news__date basic-flex">{{$post->created_at->format('H:i / d.m.Y')}}</span>
                              </div>
                          </div>
                      </a>
                  </div>
              @endforeach
          </div>
               <div class="mb-5">
                          <h3 class="mb-4 section-title">Categories</h3>
                          <ul class="list-inline m-0">
                              @foreach($categorys as $category)
                                  <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                      <a class="text-dark" href="{{ route('categoryPosts',$category->slug) }}"><i class="fa fa-angle-right text-primary mr-2"></i>{{$category['name_'.\App::getLocale()]}}</a>
                                      
                              @endforeach
                          </ul>
              </div>
        </div>
      </div>
 </section>

@endsection
 