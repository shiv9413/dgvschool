<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      
    <link rel="shortcut icon" href="{{asset('images/'.widget(13)->extra_image_1)}}">  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ widget(1)->extra_field_1 }}</title>
    <meta name="theme-color" content="#ec3336">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link href="{{asset('css/all.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/switcher.css"> -->
	<link rel="stylesheet" href="{{asset('rsplugin/css/settings.css')}}">
	<!-- Jquery Fancybox CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.min.css')}}" media="screen" />
	<link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet"  id="colors">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/notification/notification.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	  <link href="{{asset('admin/bower_components/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('admin/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />

    @stack('css')

    <script type="text/javascript">
      var base_url = "{!!url('/')!!}"
    </script>
   </head>
   <body>
   	@include('includes.topbar')
   	@yield('content')
   	@include('includes.footer')
   	<script src="{{asset('js/jquery.min.js')}}"></script> 
   	 <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
   	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!--<script src="{{asset('js/bootstrap.min.js')}}"></script> -->
	<script src="{{asset('js/popper.min.js')}}"></script> 
	<script src="{{asset('rsplugin/js/jquery.themepunch.tools.min.js')}}"></script> 
	<script src="{{asset('rsplugin/js/jquery.themepunch.revolution.min.js')}}"></script> 
	<!-- Jquery Fancybox --> 
	<script src="{{asset('js/jquery.fancybox.min.js')}}"></script> 
	<!-- Animate js --> 
	<script src="{{asset('js/animate.js')}}"></script> 
	<script>
	  new WOW().init();
	</script> 
	<!-- WOW file --> 
	<script src="{{asset('js/wow.js')}}"></script> 
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<!-- general script file --> 
	<script src="{{asset('js/owl.carousel.js')}}"></script> 
	<script src="{{asset('admin/bower_components/jquery.filer/js/jquery.filer.min.js')}}"></script>
	<script src="{{asset('js/select2.min.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/bootstrap-growl.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
	@stack('js')
   </body>
</html>