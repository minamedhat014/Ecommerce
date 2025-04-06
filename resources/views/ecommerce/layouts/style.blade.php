<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="author" content="{{siteInfo('name')}}">
    <meta name="keywords" content="{{siteInfo('key_words')}}">
    <meta name="description" content="{{siteInfo('discriptions')}}">

    
{{-- CK edit  --}}
{{-- <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.0.0/ckeditor5.css" />
<script src="https://cdn.ckeditor.com/ckeditor5/44.0.0/ckeditor5.umd.js"></script> --}}



  <link href="{{asset('assets/plugins/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets/dist/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('assets/dist/bootstrap-5.3.0-dist/css/bootstrap.min.css')}}"> 
     <link rel="stylesheet" type="text/css" href="{{asset('assets/front end/css/myCustom.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/front end/css/main.css')}}">
    @livewireStyles
    @yield('css')
    @stack('css')
   
<!-- Messenger Chat Plugin -->


  </head>