@extends('front-end.app.master')
@section('content')

    <!-- Start Page Title Area Area -->
    <div class="page-title-area page-title-bg5 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Serivces</h2>
                        <p>Services we provide</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area Area -->
    <!-- Start Services Area -->
    <section class="services-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-services-box">
                            <div class="services-image">
                                @foreach ($service->image as $image)
                                    <img class="img-fluid" data-label="Before" src="{{$image['preview_thumbnail']}}">
                                @endforeach
                            </div>
                            <div class="services-content">
                                <h6 ><a href="{{ route('service.slug' , $service->slug)}}">{{$service->title}}</a></h6>
                                <a href="{{ route('service.slug' , $service->slug)}}" href="single-services.html" class="details-btn"><i
                                     class="flaticon-right-chevron"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Services Area --
@endsection
