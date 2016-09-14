<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
      <!-- Styles -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css'>
      {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
      <link rel="stylesheet" href="{{ asset("/components/plugins/slick-master/slick/slick.css")}}">
      <link rel="stylesheet" href="{{ asset("/components/plugins/slick-master/slick/slick-theme.css")}}">
      <link rel="stylesheet" href="{{ asset("/components/assets/css/main.css")}}">
      <link rel="stylesheet" href="{{ asset("/components/assets/css/component.css")}}">
      <link href="{{ asset ("/components/assets/css/simple-sidebar.css") }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    </style>
</head>

<body id="app-layout">

    @include('layouts.dashboard')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
          $('.inquirymodal-trigger').leanModal();
        });
        $(document).on('ready', function() {
          $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
          });
          $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 3
          });
          $(".variable").slick({
            dots: false,
            infinite: true,
            variableWidth: true
          });
        });
    </script>



    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{ asset("/components/js/main.js")}}"></script>
    <script src="{{ asset("/components/plugins/materializecss/js/materialize.min.js")}}"></script>
    <script src="{{ asset("/components/plugins/slick-master/slick/slick.js")}}"></script>
    <script>
        jQuery(document).ready(function(){
        	jQuery('.skillbar').each(function(){
        		jQuery(this).find('.skillbar-bar').animate({
        			width:jQuery(this).attr('data-percent')
        		},6000);
        	});
        });
        $(document).ready(function(){
         // Activate the side menu
         $(".button-collapse").sideNav();
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
    <script src="{{ asset("/components/js/grid.js")}}"></script>
    <script src="{{ asset("/components/js/modernizr.custom.js")}}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
</body>
</html>
