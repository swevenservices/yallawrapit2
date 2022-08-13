@extends('front-end.app.master')
@section('content')

<div class="page-title-area page-title-bg5 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact Us </h2>
                    <p>we are here to help you please let us know how we  can help  ?</p>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Start Contact Area -->
 <section class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Send Message</span>
            <h2>Drop us message for any query</h2>
            <p>If you have an idea, we would love to hear about it.</p>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12">
               @livewire('front-end.contact', ['service' => null])
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>Address</span>
                            11th floor, Onyx 2, Emaar Business Park, Green & Views,Dubai United Arab of Emirates
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Email</span>
                            <a href="mailto:info@yallawrapit.com">info@yallawrapit.com</a>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <span>Phone</span>
                            <a href="tel:+971 45686225"> +971 45686225</a>
                            <a href="tel:+971 52 835 2545 ">+971 52 835 2545</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
</section>
<!-- End Contact Area -->
@endsection
