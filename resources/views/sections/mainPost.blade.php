<div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-primary font-weight-semi-bold text-uppercase mb-3">@lang('word.post_title')</h6>
                    <h1 class="section-title mb-3">@lang('word.post_description')</h1>
                </div>  
            </div>
            <div class="row">   
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="position-relative mb-4">
                                <img class="img-fluid rounded w-100" style="height: 300px;" src="{{asset('temp/img/'.$post->image)}}" alt="">
                            </div>
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase font-weight-medium" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase font-weight-medium" href="">Cleaning</a>
                            </div>
                            <h5 class="font-weight-medium mb-2">{{$post['title_'.\App::getLocale()]}}</h5>
                            <p class="mb-4">{{$post['description_'.\App::getLocale()]}}</p>
                            <a class="btn btn-sm btn-primary py-2" href="{{route('post.detail',$post->slug)}}">Read More</a>
                    </div>
                @endforeach
            </div>
        </div>
</div>