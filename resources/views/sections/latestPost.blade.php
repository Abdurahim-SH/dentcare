<div class="mb-5">
    <h3 class="mb-4 section-title">Latest Post</h3>
    @foreach($latestPosts as $latestPost)
        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
            <a href="{{route('post.detail',$latestPost->slug)}}">
                <img class="img-fluid rounded" src="{{asset('temp/img/'.$latestPost->image)}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                    <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">{{$latestPost['title_'.\App::getLocale()]}}</a>
                            <div class="d-flex">
                            <span class="news__date basic-flex">{{$latestPost->created_at}}</span>
                            </div>
                    </div>
            </a>  
        </div>
    @endforeach

</div>
    