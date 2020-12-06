<div class="col-lg-4 col-sm-6">
    <div class="card-item card-item-6">
        <div class="card">
            <div class="card-image">
            <img src="{{loadImage($post->image)}}" class="card-img-top" alt="{{$post->seo}}">
                <div class="card-info">
                <span class="card__date"> <i class="la la-calendar"></i> {{$post->created_at}}</span>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                <a href="{{route('post', ['slug' => $post->slug])}}" class="card__link">{{$post->title}}</a>
                </h5>
                <a href="{{route('post', ['slug' => $post->slug])}}" class="link-btn">{{__('main.more')}}
                    <span class="la la-long-arrow-right"></span>
                </a>
            </div>
        </div>
    </div><!-- end card-item card-item-6 -->
</div><!-- end col-lg-4 -->