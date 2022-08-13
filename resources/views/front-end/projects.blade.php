@extends('front-end.app.master')
@section('content')

        <!-- Start Page Title Area Area -->
        <div class="page-title-area page-title-bg5 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Projects</h2>
                            <p>Latest From Work</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area Area -->

        <!-- Start Projects Area -->
        <section class="projects-area ptb-100">
            <div class="container">
                <div class="row">
                    @foreach ($projects as $project)
                       <div class="col-lg-6 col-md-6 col-sm-6">
                         <div class="single-projects-box">
                           <div class="juxtapose">
                                $@foreach ($project->before_image as $beforeImage)
                             <img class="img-fluid" data-label="Before" src="{{$beforeImage['preview_thumbnail']}}">
                             @endforeach
                             $@foreach ($project->after_image as $afterImage)
                             <img class="img-fluid" data-label="After" src="{{$afterImage['preview_thumbnail']}}">
                             @endforeach
                              </div>

                        </div>
                     </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            {{$projects->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Projects Area -->

@endsection
