@extends('front-end.app.master')
@section('content')
    <style xmlns="http://www.w3.org/1999/html">
        .y-image {
            width: 600px;
            height: 500px;
            position: absolute;
            overflow: hidden;
            padding-left: 10px;
        }

        .m-search {
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px solid lightgray;
        }

        .sample-img {
            border-radius: 10px;

        }

        .title {
            margin-top: 0;
            padding-top: 6px;
            margin-bottom: 4px;
            padding-left: 2px;
        }

        .dimensions {
            border-radius: 4px;
            border: 1px solid lightgray;
            padding-left: 10px;
            padding-right: 10px;
        }

        .b-search {
            background: none;
            border: 1px solid lightgray;
            font-size: 14px;
            margin: 3px;
            padding: 4px;
            border-radius: 6px;
        }

        .b-active {
            background-color: rgb(239 145 44) !important;
            color: white !important;
        }
        .contact-form form .form-control{
            border-radius: 3px;
            box-shadow: none;
            height: 40px;
        }
        .pointer-wrapper{
            display: flex ;
            flex-direction: row;
            z-index:  99;
            position: absolute;
            cursor: pointer;
        }
        .btn-pointer{
            background: white;
            color: black;
            border-color: white;
            margin-right: 3px;
            border-radius: 3px;
            box-shadow: none;
            padding: 2px;
            height: 25px;
        }
        .btn-cab{
            margin-top: 120px;
            margin-left: 120px;
        }
        .btn-back{
             margin-top: 212px;
            margin-left: 165px;
        }
        .btn-count{
            margin-top: 271px;
            margin-left: 20px;
        }

        .btn-marker{
            height: 25px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Start Projects Area -->
    <section class="projects-area ptb-100">
        <div class="container" style="min-width: 100% ;height: 500px">
            <div class="row">
                <div class="col-md-3" style="overflow-y: scroll;">
                    <div class="col-md-12 mb-3 " style="display: flex ;flex-direction: row">
                        <input class="m-search form-control"
                               name="m_search" type="search" placeholder="Search products">
                        <button style="background: none; border: none"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="col-md-12 mb-3 " style="display: flex ;flex-direction: row">
                        <button onclick="exportCanvasAsPNG('canvas' ,'sample')" class="b-search b-active"> Counter Top
                        </button>
                        <button class="b-search"> Back Splash</button>
                        <button class="b-search"> Cabinets</button>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-2 pr-0">
                            <img class="sample-img" src="{{asset('img/PNT01.jpg')}}"
                                 alt="counter" style="width:100%"
                                 onclick="counterTop(this ,'{{asset('img/cab.png')}}');">
                            <h6 class="title "> Sample</h6>
                            <span class="dimensions"> 100 x 100</span>
                        </div>
                        <div class="col-md-6 mt-2 pr-0">
                            <img class="sample-img" src="{{asset('img/UMI01.jpg')}}"
                                 alt="Snow" style="width:100%"
                                 onclick="changeCab(this , '{{asset('img/count.png')}}');">
                            <h6 class="title "> Sample</h6>
                            <span class="dimensions"> 100 x 100</span>
                        </div>
                        <div class="col-md-6 mt-2 pr-0">
                            <img class="sample-img" src="{{asset('img/NS815.jpg')}}"
                                 alt="Snow" style="width:100%"
                                 onclick="changeBack(this ,'{{asset('img/backsplash.png')}}');">
                            <h6 class="title "> Sample</h6>
                            <span class="dimensions"> 100 x 100</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" >
                    <div id="my-canvas">
                    <img class="y-image" id="expandedImg" src="{{asset('img/base.jpg')}}">
                    <img class="y-image" id="expandedImgcab">
                    <img class="y-image" id="expandedImgcounter">
                    <img class="y-image" id="expandedImgBack">
                    </div>
                    <div class="pointer-wrapper btn-cab" >
                    <span class="btn-pointer">Cabinates</span>
                       <img class="btn-marker" src="{{asset('img/u_marker.svg')}}">
                    </div>

                    <div class="pointer-wrapper btn-count" >
                        <span class="btn-pointer">Countertops </span>
                        <img class="btn-marker" src="{{asset('img/u_marker.svg')}}">
                    </div>

                    <div class="pointer-wrapper btn-back" >
                        <span class="btn-pointer">Backsplash</span>
                        <img class="btn-marker" src="{{asset('img/u_marker.svg')}}">
                    </div>
                </div>
                <div class="col-md-3">
                    <h5 class="text-left ml-2">Contact Us</h5>
                    <div class="row contact-form">
                        <form wire:submit.prevent="submit" >
                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" wire:model.defer="contact.name" wire name="name" id="name" class="form-control {{ $errors->has('contact.name') ? 'is-invalid' : '' }} " required data-error="Please enter your name" placeholder="Full Name">
                                        @error('contact.name') <div class="text-red ml-md-2"> {{ str_replace('contact.', '', $message) }} </div>  @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input  type="email" wire:model.defer="contact.email" name="email" id="email" class="form-control {{ $errors->has('contact.email') ? 'is-invalid' : '' }}" required data-error="Please enter your email" placeholder="Your Email Address">
                                        @error('contact.email') <div class="text-red ml-md-2"> {{ str_replace('contact.', '', $message) }} </div>  @enderror

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="number" wire:model.defer="contact.phone" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control {{ $errors->has('contact.phone') ? 'is-invalid' : '' }}" placeholder="Phone / Mobile">
                                        @error('contact.phone') <div class="text-red ml-md-2"> {{ str_replace('contact.', '', $message) }} </div>  @enderror

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea wire:model.defer="contact.message" name="message" class="form-control {{ $errors->has('contact.message') ? 'is-invalid' : '' }}" id="message" cols="30" rows="3" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        {{ $errors->has('contact.message') ? 'is-invalid' : '' }}
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button style="background-color: rgb(239 145 44);border-color: rgb(239 145 44)"
                                            name="save" value="save" type="submit"
                                            class="btn btn-primary">
                                        <i class="fa fa-paper-plane"></i> Book Appointment
                                    </button>
                                </div>
                                <p class="mt-3 mb-3">
                               <strong> Email : </strong>  <a target="_blank" href="mailto:info@yallawrapit.com">info@yallawrapit.com </a>
                               <br>
                                <strong> Phone : </strong> <a href="tel:+971 52 689 7285">+971 52 689 7285</a>
                                </p>
                                <div class="col-lg-12 col-md-12 ">
                                    <button style="background-color: #242a69; border-color: #242a69"  name="save" value="save" type="submit"
                                             class="btn btn-success">
                                        <i class="fa fa-download"></i> Download Image
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
                <script>
                    var element = $("#my-canvas"); // global variable
                    var getCanvas; // global variable

                    var checkacabImage = true;
                    var checkCountImage = true;
                    var checkBackImage = true;

                    var composedImage = '';
                    var selectedCab = {
                        name: '',
                        image: ''
                    };
                    var SelectedCount = {
                        name: '',
                        image: ''
                    };
                    var SelectedBack = {
                        name: '',
                        image: ''
                    };

                    function changeCab(imgs, src) {
                        var expandImg = document.getElementById("expandedImgcab");
                        if (checkacabImage) {
                            checkacabImage = false;
                            expandImg.src = src;
                            imgs.style.border = "2px solid rgb(239 145 44)";
                            expandImg.style.display = "initial";
                            selectedCab.image = src;
                            selectedCab.name = 'sample';
                        } else {
                            checkacabImage = true;
                            imgs.style.border = "none";
                            expandImg.style.display = "none";
                            selectedCab.image = '';
                            selectedCab.name = '';
                        }
                    }

                    function counterTop(imgs, src) {

                        var expandImg = document.getElementById("expandedImgcounter");
                        if (checkCountImage) {
                            checkCountImage = false;
                            expandImg.src = src;
                            imgs.style.border = "2px solid rgb(239 145 44)";
                            expandImg.style.display = "initial";
                            SelectedCount.image = src;
                            SelectedCount.name = 'sample';
                        } else {
                            checkCountImage = true;
                            imgs.style.border = "none";
                            expandImg.style.display = "none";
                            SelectedCount.image = '';
                            SelectedCount.name = '';
                        }
                    }

                    function changeBack(imgs, src) {
                        var expandImg = document.getElementById("expandedImgBack");
                        if (checkBackImage) {
                            checkBackImage = false;
                            expandImg.src = src;
                            imgs.style.border = "2px solid rgb(239 145 44)";
                            expandImg.style.display = "initial";
                            SelectedBack.image = src;
                            SelectedBack.name = 'sample';
                        } else {
                            checkBackImage = true;
                            imgs.style.border = "none";
                            expandImg.style.display = "none";
                            SelectedBack.image = '';
                            SelectedBack.name = '';
                        }
                    }

                    function exportCanvasAsPNG() {
                        html2canvas($('#my-canvas'), {
                            onrendered: function (canvas) {
                                var a = document.createElement('a');
                                a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
                                a.download = 'sample.jpg';
                                composedImage = a.href;
                                a.click();
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </section>
    <!-- End Projects Area -->
@endsection
