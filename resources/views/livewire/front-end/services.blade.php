<div class="row">

    @foreach ($services as $service)
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-blog-post">
            <div class="post-image">
                @foreach ($service->image as $image)
                <img class="img-fluid" data-label="Before" src="{{$image['preview_thumbnail']}}">
                @endforeach
            </div>
            <div class="post-content">
                <h3><a href="single-blog.html">{{ $service->title }}</a></h3>
                <p>{{ $service->excerpt }}</p>
                <a href="{{ route('service.slug', $service->slug)}}" class="read-more-btn">Read More <i class="flaticon-right-chevron"></i></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
