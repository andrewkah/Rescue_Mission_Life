<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Revolution Slider CSS -->
        <link rel="stylesheet" href="{{ asset('assets/revolution/css/settings.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/revolution/css/layers.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/revolution/css/navigation.css')}}">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <!-- Owl Theme Default CSS --> 
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
        <!-- Owl Carousel CSS --> 
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
        <!-- Owl Magnific CSS --> 
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
        <!-- Box icons CSS --> 
		<link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css')}}">
        <!-- Flat icon CSS --> 
		<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
        <!-- Image Light Box CSS --> 
		<link rel="stylesheet" href="{{ asset('assets/css/imagelightbox.min.css')}}">
        <!-- Mean menu CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css')}}">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <!-- Dark CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/dark.css')}}">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
		
		<title>{{config('app.name', '')}}</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
    </head>

    <body>

        <!-- Start Header Area -->
        <div class="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- End Header Area -->

        <!-- Start Navbar Area -->
        @include('layout.top')
        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
        @include('layout.sidenav')
        <!-- End Sidebar Modal -->
        
        <div>
            @yield('content')
        </div>
        
        <!-- Start Footer Area -->
        @include('layout.footer')
        <!-- End Footer Area -->

        <!-- Start Go Top Section -->
        <div class="go-top">
            <i class="bx bx-chevron-up"></i>
            <i class="bx bx-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->

        <!-- Jquery Slim JS -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{ asset('assets/js/jquery.meanmenu.js')}}"></script>
         <!-- Easing Min JS -->
		<script src="{{ asset('assets/js/jquery.easing.min.js')}}"></script>
        <!-- Owl Carousel JS -->
		<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Owl Magnific JS -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Nice Select JS -->
		<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
		<!-- Appear JS --> 
        <script src="{{ asset('assets/js/jquery.appear.js')}}"></script>
		<!-- Odometer JS --> 
		<script src="{{ asset('assets/js/odometer.min.js')}}"></script>
        <!-- Image Light Box JS --> 
		<script src="{{ asset('assets/js/imagelightbox.min.js')}}"></script>
		<!-- Form Ajaxchimp JS -->
		<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
		<!-- Form Validator JS -->
		<script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
        
        <!-- Slider Revolution core JavaScript files -->
        <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{ asset('assets/js/rev-slider-custom.js')}}"></script>
    </body>
</html>