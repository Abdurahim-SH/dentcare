<div class="mb-5">
        <h3 class="mb-4 section-title">Popular Post</h3>
    @foreach($popularPosts as $popularPost)
        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
            <a href="{{route('post.detail',$popularPost->slug)}}">
                <img class="img-fluid rounded" src="{{asset('temp/img/'.$popularPost->image)}}" style="width: 100px; height: 80px; object-fit: cover;" alt="">
                <div class="d-flex flex-column pl-3">
                    <a class="text-dark mb-2" href="">{{$popularPost['description_'.\App::getLocale()]}}</a>
                    <div class="d-flex">
                        <span class="news__date basic-flex">{{$popularPost->created_at->format('H:i / d.m.Y')}}</span>
                    </div>
                </div>
            </a>
        </div>
     @endforeach
</div>

                  
              