  @extends('front-end.app.master')
  @section('content')
   <!-- Start Main Banner Area -->
        <div class="home-slides owl-carousel owl-theme">
            <div class="main-banner item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <h1>Design is thinking made visual</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <div class="btn-box">
                                    <a href="{{ route('contact')}}" class="default-btn">Contact Us <span></span></a>
                                    <a href="{{ route('about') }}" class="optional-btn">More About Us <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-banner item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <h1>Design is a journey of discovery</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <div class="btn-box">
                                    <a href="{{ route('contact')}}" class="default-btn">Contact Us <span></span></a>
                                    <a href="{{ route('about') }}" class="optional-btn">More About Us <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-banner item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <h1>Building the homes of our neighbors</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <div class="btn-box">
                                    <a href="contact.html" class="default-btn">Free Quote <span></span></a>
                                    <a href="contact.html" class="optional-btn">About Us <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start About Area -->
        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="about-content">
                            <span class="sub-title">Let us Totally Wrap Your Home</span>
                            <h2>We are an Award-Winning <span>Interior Wrapper</span></h2>
                            <p>Introducing a cost effective solution to your home renovations with our bespoke interior vinyl wrapping service. Our aim is to offer our clients a high quality service and finished product at affordable prices.</p>
                            <a href="{{ route('about')}}" class="default-btn">More About Us <span></span></a>
                            <div class="back-animation-text">Yalla wrap it</div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="about-image">
                            <img src="{{ asset('front-end') }}//img/home-page-view.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-100 bg-faf5f5">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Services</span>
            <h2> Services That we offer</h2>
        </div>
         @livewire('front-end.services')
    </div>
</section>
<!-- End Blog Area -->

        <!-- Start Our Story Area -->
        <section class="our-story-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Awsome Work</span>
                    <h2>Some of Our work</h2>
                </div>
                <div class="our-story-content row">
                    <div class="row">
                        @foreach ($projects as $project)
                           <div class="col-lg-6 col-md-6 col-sm-6">
                             <div class="single-projects-box">
                               <div class="juxtapose">
                                @foreach ($project->before_image as $beforeImage)
                                <img class="img-fluid" data-label="Before" src="{{$beforeImage['preview_thumbnail']}}">
                                      @endforeach
                                   @foreach ($project->after_image as $afterImage)
                                 <img class="img-fluid" data-label="After" src="{{$afterImage['preview_thumbnail']}}">
                                @endforeach
                                  </div>
                                  <div class="card-footer">
                                    <h4><a href="single-services.html">Skilled Architecture</a></h4>
                                    <a href="single-services.html" class="details-btn"><i class="flaticon-right-chevron"></i></a>
                                </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12 col-md-12">
                            <div class="pagination-area">
                               <a  class="default-btn" href="{{ route('projects') }}" ><i class="fa fa-eye"></i> See all Projects</a>
                               </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Story Area -->

        <!-- Start Fun Facts Area -->
        <section class="fun-facts-area ptb-100 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 col-md-3 col-sm-3">
                        <div class="single-fun-facts">
                            <h3><span class="odometer" data-count="350">00</span>+</h3>
                            <p>Projects Finished</p>
                            <div class="back-text">P</div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 col-md-3 col-sm-3">
                        <div class="single-fun-facts">
                            <h3><span class="odometer" data-count="200">00</span>+</h3>
                            <p>Happy Clients</p>
                            <div class="back-text">C</div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 col-md-3 col-sm-3">
                        <div class="single-fun-facts">
                            <h3><span class="odometer" data-count="180">00</span>+</h3>
                            <p>Team Members</p>
                            <div class="back-text">T</div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 col-md-3 col-sm-3">
                        <div class="single-fun-facts">
                            <h3><span class="odometer" data-count="35">00</span>+</h3>
                            <p>Years of Experience</p>
                            <div class="back-text">E</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fun Facts Area -->

         <!-- Start How We Work Area -->
         <section class="how-we-work-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">How We Work</span>
                    <h2>Proven Process for the Best Result</h2>
                    <p>If you ever asked for a quote to have your grooved kitchen doors wrapped and got turned away because it ‘Cant Be done’. Then this is kind of true but we have a workaround for you.</p>
                </div>

                <div class="how-we-work-process">
                    <div class="process-list">
                        <div class="single-process">
                            <div class="content bg-1">
                                <div class="number">
                                    1
                                </div>
                                <h3>Concept</h3>
                                <p>Do you have a concept in mind? let us help you visualize it.</p>
                            </div>
                        </div>

                        <div class="single-process">
                            <div class="content bg-2">
                                <div class="number">
                                    2
                                </div>
                                <h3>Idea</h3>
                                <p>With our wide collection of colors and finishes, get the idea of the job we will execute.</p>
                            </div>
                        </div>

                        <div class="single-process">
                            <div class="content bg-3">
                                <div class="number">
                                    3
                                </div>
                                <h3>Design</h3>
                                <p>Proffesional designs we make based on the measurements taken during our inspection.</p>
                            </div>
                        </div>

                        <div class="single-process">
                            <div class="content bg-4">
                                <div class="number">
                                    4
                                </div>
                                <h3>Execution</h3>
                                <p>Perfectly executed to match the designs and inspected for snagging.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End How We Work Area -->


         <!-- Start Testimonials Area -->
         <section class="testimonials-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Testimonials</span>
                    <h2>What People Say About Yalla Wrap iT</h2>
                </div>

                <div class="testimonials-slides owl-carousel owl-theme">
                    <div class="single-testimonials-item">
                        <p>Excellent communication from initial enquiry to job being professionally finished. The lads arrived bang on time, were remarkably tidy and left our house with our wardrobes being completely transformed..</p>

                        <div class="client-info">
                            <img class="lazy" data-src="{{ asset('front-end') }}//img/author1.jpg" alt="image">

                            <h3>Bunny Williams</h3>
                            <span>Home owner</span>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <p>Fantastic job. Amazed at what these guys can do. Turned a very old kitchen into a new one at a fraction of the cost. Highly recommended.</p>

                        <div class="client-info">
                            <img class="lazy" data-src="{{ asset('front-end') }}//img/author2.jpg" alt="image">

                            <h3>Mazen Kassar</h3>
                            <span>Home Owner</span>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <p>From when I initially enquired to installation, comminication and service was excellent.
The choice of wraps available for worktops and cupboards & drawers was great and we were even sent samples to help us decide.</p>

                        <div class="client-info">
                            <img class="lazy" data-src="{{ asset('front-end') }}//img/author3.jpg" alt="image">

                            <h3>Sarah Taylor</h3>
                            <span>Home Owner</span>
                        </div>
                    </div>

                     <div class="single-testimonials-item">
                        <p>It feels and looks like I have a new kitchen - thanks :). Friends and family have commented on the kitchen already and said how great it looks as well.
Overall I'm a very happy customer.</p>

                        <div class="client-info">
                            <img class="lazy" data-src="{{ asset('front-end') }}//img/author4.jpg" alt="image">

                            <h3>Wael Hamwi</h3>
                            <span>Home Owner</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Area -->


        <!-- Start Partner Area -->
        <div class="partner-area ptb-100">
            <div class="partner-slides owl-carousel owl-theme">
                <div class="partner-item">
                    <a href="#">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner1.png" alt="image">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner1.png" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner2.png" alt="image">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner2.png" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner3.png" alt="image">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner3.png" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner4.png" alt="image">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner4.png" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner5.png" alt="image">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner5.png" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner6.png" alt="image">
                        <img class="lazy" data-src="{{ asset('front-end') }}//img/partner6.png" alt="image">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->

@endsection
