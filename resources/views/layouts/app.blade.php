<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEST SITE</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset("/components/plugins/owl/owl.carousel.css") }}">
      <link rel="stylesheet" href="{{ asset("/components/plugins/owl/owl.theme.css") }}">
      <link rel="stylesheet" href="{{ asset("/components/plugins/owl/owl.transitions.css") }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css'>
      {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
      <link rel="stylesheet" href="{{ asset("/components/plugins/materializecss/css/materialize.min.css")}}">
      <link rel="stylesheet" href="{{ asset("/components/assets/css/main.css")}}">
      <link rel="stylesheet" href="{{ asset ("/components/assets/css/simple-sidebar.css") }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset("/components/assets/css/portfolio.css")}}">
      <link rel="stylesheet" type="text/css" href="{{ asset ("/components/assets/css/jquery.fancybox.css")}}">
      <link rel="stylesheet" href="{{ asset ("/components/assets/css/portfolio.css")}}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        body {
            font-family: 'Roboto';
        }
        .fa-btn {
            margin-right: 6px;
        }
        @font-face {
          font-family: 'Roboto';
          src: url('/plugins/materializecss/fonts/Roboto-Regular.eot');
        }
      .bgimg-1, .bgimg-3{
          position: relative;
          opacity: 1;
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          background-color: black;
        }
        .bgimg-1 {
          background-image: url("img/head2.png");
          min-height: 90%;
        }
      .bgimg-3 {
          background-image: url("img/head2.png");
          min-height: 100%;
        }
      .caption {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        color: #000;
      }
      .caption span.border {
        background-color: #111;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 10px;
      }
      .education-inner .card .card-image img {
          max-width: 100%;
      }

      </style>
</head>

<body id="app-layout">

    @include('layouts.dashboard')

    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="{{ asset("/components/js/main.js")}}"></script>
    <script src="{{ asset ("/components/plugins/jQuery/jQuery-2.2.0.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("/components/plugins/owl/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("/components/assets/js/isotope.min.js") }}"></script>
    <script src="{{ asset("/components/assets/js/jquery.fancybox.pack.js") }}"></script>
    <script src="{{ asset("/components/assets/js/portfolio.js") }}"></script>
    <script type="text/javascript" src="http://bdinfosys.com/demo/materialx/assets/js/jquery.nicescroll.min.js"></script>
    <script>
    $(document).ready(function() {
      var owl = $("#owl-demo");
        owl.owlCarousel({
            itemsCustom : [
              [0, 2],
              [450, 4],
              [600, 7],
              [700, 9],
              [1000, 10],
              [1200, 12],
              [1400, 13],
              [1600, 15]
            ],
            navigation : true
        });
        $("#services-slider").owlCarousel({
            items:3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[1000,2],
            itemsMobile : [650,1],
            navigationText:false,
            autoPlay:true
        });
        $("#blog-slider").owlCarousel({
            items:3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[1000,2],
            itemsMobile : [650,1],
            navigationText:false,
            autoPlay:true
        });


    });

    </script>
    <script src="{{ asset("/components/plugins/materializecss/js/materialize.min.js")}}"></script>
    <script type="text/javascript" src="{{ asset("components/assets/js/jquery.mixitup.min.js")}}"></script>
    <script type="text/javascript" src="{{ asset("components/assets/js/plug.js")}}"></script>
    <script>

        jQuery(document).ready(function(){
        	jQuery('.skillbar').each(function(){
        		jQuery(this).find('.skillbar-bar').animate({
        			width:jQuery(this).attr('data-percent')
        		},6000);
        	});
        });
        $(document).ready(function(){
          $('.inquirymodal-trigger').leanModal();
        });
        $(document).ready(function(){
         // Activate the side menu
         $(".button-collapse").sideNav();
        });
        $(document).ready(function(){
          $('ul.tabs').tabs();
        });
        // Pause slider
        $('.slider').slider('pause');
        // Start slider
        $('.slider').slider('start');
        // Next slide
        $('.slider').slider('next');
        // Previous slide
        $('.slider').slider('prev');
        $(document).ready(function(){
          $('.materialboxed').materialbox();
        });

        $(document).ready(function(){
          $('.parallax').parallax();
        });
        $(function() {
    				Grid.init();
    			});

    </script>

    <script src="{{ asset ("/components/plugins/portfilter-master/bootstrap-portfilter.min.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>
    <script src="{{ asset ("/components/assets/js/sidebar_menu.js") }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
</body>
</html>
