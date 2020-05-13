<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from gambolthemes.net/html-items/jobby/jobby-medical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 May 2020 13:36:02 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
        <meta name="author" content="Gambolthemes">
         <title>{{ config('app.name', 'Freelancer') }}</title>
        
        <!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/publics/images/fav.png') }}">
        
        <!-- Stylesheets -->

        <link href="{{ asset('assets/publics/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/publics/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/publics/css/datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/publics/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/publics/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/publics/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/publics/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/publics/vendor/semantic/semantic.min.css') }}" rel="stylesheet">

        
    </head>
  
<body>
    
        <x-public.navbar />

        <main class="body-section">
            @yield('content')

            @include('layouts/alert')
            
        </main>

        <x-public.footer />
   
        <!-- footer End -->
        <!-- Scroll to Top Button Start -->
        <button onclick="topFunction()" id="pageup" title="Go to top"><i class="fas fa-arrow-up"></i></button>
        <!-- Scroll to Top Button End -->
        <!-- Scripts js --> 


        <script src="{{ asset('assets/publics/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/publics/js/datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/publics/js/i18n/datepicker.en.js') }}"></script>
        <script src="{{ asset('assets/publics/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/publics/vendor/OwlCarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/publics/vendor/semantic/semantic.min.js') }}"></script>
        <script src="{{ asset('assets/publics/js/custom1.js') }}"></script>
           
        <script>
            window.oncontextmenu = function () {
                return false;
            }
            $(document).keydown(function (event) {
                if (event.keyCode == 123) {
                    return false;
                }
                else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
                    return false;
                }
            });
        </script>


        @yield('script')
    </body>
    
</html>

