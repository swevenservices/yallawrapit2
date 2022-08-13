@extends('front-end.app.master')
@section('content')
    <!-- Start Page Title Area Area -->
    <div class="page-title-area page-title-bg5 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Blog Details</h2>
                        <p>{{$blog->title}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Start Services Details Area -->
        <section class="services-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-12">
                        <div class="services-details-desc">
                            <div class="services-details-image">
                                @foreach ($blog->image as $image)
                                    <img class="img-fluid" data-label="Before" src="{{$image['url']}}">
                                @endforeach
                            </div>

                            <h3>{{$blog->title}}</h3>
                            <p>{{$blog->excerpt}}</p>
                            <p> {{$blog->content}}</p>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Details Area -->
@endsection
