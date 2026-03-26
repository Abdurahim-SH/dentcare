@extends('layouts.blogMaster')

@section('content')



   <!-- Detail Start -->
   <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="d-flex mb-2">
                            <a class="text-primary text-uppercase font-weight-medium" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-primary text-uppercase font-weight-medium" href="">Cleaning</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-primary text-uppercase font-weight-medium" href="">{{$post->created_at}}</a>
                        </div>
                        <h1 class="section-title mb-3">{!! $post['title_'.\App::getLocale()] !!}</h1>
                    </div>
                    <div class="mb-5">
                        <img class="img-fluid rounded w-100 mb-4" src="{{asset('temp/img/'. $post->image)}}" alt="Image">
                         <p>{!! $post['description_'.\App::getLocale()] !!}</p>
                         <p>{!! $post['content_'.\App::getLocale()] !!}</p>
                    </div>
                   @include('sections.latestPost')
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4">
                        <img src="{{asset('blog/img/user.jpg')}}" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-white mb-3">Sharifjonov Abdurakhim</h3>
                        <p class="text-white m-0">Hello I'm backend developer and senior develop my language is Laravel,Php,MySql,Node.js and Express.js</p>
                    </div>
                    <div class="mb-5">
                        <div class="w-100">
                          <form action="{{route('search.page')}}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="q" autocomplete="off" class="form-control" style="padding: 25px;" placeholder="Keyword">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4">Search</button>
                                    </div>
                                </div>
                          </form>
                        </div>
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
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                             @foreach($post->tags as $tag)
                                  <a href="">#{{ $tag->name_uz }} &nbsp;</a>
                             @endforeach
                        </div>
                    </div>
                   @include('sections.popularPost')
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

@endsection