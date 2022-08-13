  @extends('front-end.app.master')

  @section('content')
  <div class="page-title-area page-title-bg5 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>About us </h2>
                    <p>want to Know more about us !</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start About Area -->
<div class="about-section ptb-100 pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="about-text">
                    <span class="sub-title">Who We Are</span>
                    <h2>Yalla Wrap it is based in <span>United Arab Emirates</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="quote">
                        " Yalla Repairs makes the  best of your house "
                    </div>
                    <a href="contact.html" class="default-btn">Contact Us <span></span></a>

                    <div class="back-animation-text">Yalla Wrap it </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="about-img">
                    <img src="{{ asset('front-end') }}/img/about-img2.jpg" alt="image">
                    <img src="{{ asset('front-end') }}/img/about-img3.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Start Offer Area -->
<section class="offer-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="offer-box">
                    <div class="icon">
                        <i class="flaticon-curtain"></i>
                    </div>
                    <h3><a href="#">Professional Design</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="offer-box">
                    <div class="icon">
                        <i class="flaticon-desktop"></i>
                    </div>
                    <h3><a href="#">Creative desktop</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="offer-box">
                    <div class="icon">
                        <i class="flaticon-rulers"></i>
                    </div>
                    <h3><a href="#">Skilled Architecture</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                </div>
            </div>
        </div>
    </div>
</section>


   <!-- Start How We Work Area -->
   <section class="how-we-work-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">How We Work</span>
            <h2>Proven Process for the Best Result</h2>
            <p>If you ever asked for a quote to have your grooved kitchen doors wrapped
                 and got turned away because it ‘Cant Be done’. Then this is kind of true but we have a workaround for you.</p></div>

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


 <!-- Start Partner Area -->
 <div class="partner-area ptb-100">
    <div class="partner-slides owl-carousel owl-theme">
        <div class="partner-item">
            <a href="#">
                <img src="{{ asset('front-end') }}//img/partner1.png" alt="image">
                <img src="{{ asset('front-end') }}//img/partner1.png" alt="image">
            </a>
        </div>

        <div class="partner-item">
            <a href="#">
                <img src="{{ asset('front-end') }}//img/partner2.png" alt="image">
                <img src="{{ asset('front-end') }}//img/partner2.png" alt="image">
            </a>
        </div>

        <div class="partner-item">
            <a href="#">
                <img src="{{ asset('front-end') }}//img/partner3.png" alt="image">
                <img src="{{ asset('front-end') }}//img/partner3.png" alt="image">
            </a>
        </div>

        <div class="partner-item">
            <a href="#">
                <img src="{{ asset('front-end') }}//img/partner4.png" alt="image">
                <img src="{{ asset('front-end') }}//img/partner4.png" alt="image">
            </a>
        </div>

        <div class="partner-item">
            <a href="#">
                <img src="{{ asset('front-end') }}//img/partner5.png" alt="image">
                <img src="{{ asset('front-end') }}//img/partner5.png" alt="image">
            </a>
        </div>

        <div class="partner-item">
            <a href="#">
                <img src="{{ asset('front-end') }}//img/partner6.png" alt="image">
                <img src="{{ asset('front-end') }}//img/partner6.png" alt="image">
            </a>
        </div>
    </div>
</div>
<!-- End Partner Area -->
@endsection
<!-- End Offer Area -->
