<!doctype html>
<html lang="{{app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @include('front-end.app.styles')
    </head>

    <body>
        {{-- <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader --> --}}
        @include('front-end.app.header')


        @yield('content')
        <!-- Start Footer Area -->
        @include('front-end.app.footer')
        <!-- End Footer Area -->

        <div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>

        @include('front-end.app.scripts')

    </body>
</html>
