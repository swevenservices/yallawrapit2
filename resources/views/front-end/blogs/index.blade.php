@extends('front-end.app.master')
@section('content')
    <!-- Start Page Title Area Area -->
    <div class="page-title-area page-title-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Blog</h2>
                            <p>Our News. Read Trending Post in Zovio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="services-area ptb-100">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-blog-post">
                                <div class="post-image">
                                 <a href="{{ route('blog.slug' , $blog->slug)}}">
                                        @foreach ($blog->image as $image)
                                        <img  src="{{$image['url']}}">
                                    @endforeach
                                </a>
                                </div>
                                <div class="post-content">
                                    <h3><a href="{{ route('blog.slug' , $blog->slug)}}">{{$blog->title}}</a></h3>
                                    <p>{{ $blog->excerpt}}</p>
                                    <a href="{{ route('blog.slug' , $blog->slug)}}" class="read-more-btn">Read More <i class="flaticon-right-chevron"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
@endsection
