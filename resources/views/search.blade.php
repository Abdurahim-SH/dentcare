@extends('layouts.master')

@section('content')

   <!-- Detail Start -->
   <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                @if (Session::has('message'))
                  <p class="alert alert-danger">{{ Session::get('message') }}</p>
                @endif
                <div class="col-lg-8">
                    @foreach($posts as $post)
                        <div class="mb-5">
                            <h1 class="section-title mb-3">{{$post['title_'.\App::getLocale()]}}</h1>
                        </div>

                        <div class="mb-5">
                            <img class="img-fluid rounded w-100 mb-4" src="{{asset('temp/img/'.$post->image)}}" alt="Image">
                            <p>{{$post['description_'.\App::getLocale()]}}</p>
                            <p>{{$post['content_'.\App::getLocale()]}}</p>
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                   @include('sections.popularPost')
                </div>

            </div>
        </div>
    </div>


@endsection