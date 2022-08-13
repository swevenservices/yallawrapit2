    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-style-three">
        <div class="zovio-responsive-nav">
            <div class="container">
                <div class="zovio-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('front-end') }}/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="zovio-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ url('/')}}">
                        <img src="{{ asset('front-end') }}/img/logo.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ route('/')}}" class="nav-link ">Home</a></li>
                         <li class="nav-item"><a href="{{route('about')}}" class="nav-link ">About us</a></li>

                         <li class="nav-item"><a href="{{route('projects')}}" class="nav-link ">Projects</a></li>
                         <li class="nav-item"><a href="{{route('services')}}" class="nav-link ">Services</a></li>
                         <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link ">Blogs</a></li>
                        <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
                        </ul>
                        <div class="others-options">
                            <div class="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Sidebar Modal -->
    <div class="sidebar-modal">
        <div class="sidebar-modal-inner">
            <div class="sidebar-about-area">
                <div class="title">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra. Quis suspendisse ultrices gravida.</p>
                </div>
            </div>

            <div class="sidebar-instagram-feed">
                <h2>Instagram</h2>

                <ul>
                    <li><a href="#"><img src="{{ asset('front-end') }}/img/services-img1.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="{{ asset('front-end') }}/img/services-img2.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="{{ asset('front-end') }}/img/services-img3.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="{{ asset('front-end') }}/img/services-img4.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="{{ asset('front-end') }}/img/services-img1.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="{{ asset('front-end') }}/img/services-img2.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="{{ asset('front-end') }}/img/services-img3.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="{{ asset('front-end') }}/img/services-img4.jpg" alt="image"></a></li>
                </ul>
            </div>

            <div class="sidebar-contact-area">
                <div class="contact-info">
                    <div class="contact-info-content">
                        <h2>
                            <a href="tel:+0881306298615">+088 130 629 8615</a>
                            <span>OR</span>
                            <a href="mailto:zovio@gmail.com">info@yallawrapit.com</a>
                        </h2>

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <span class="close-btn sidebar-modal-close-btn"><i class="fas fa-times"></i></span>
        </div>
    </div>
    <!-- End Sidebar Modal -->
