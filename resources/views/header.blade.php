<!DOCTYPE html>
<html lang="en">
<head>
  <title>TAKAFUL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="icon" href="{{ asset('img/test.png') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  

  
  <!--animate css-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  
  <!--//PWA-->
  <link rel="manifest" href="{{ asset('manifest.json') }}">
  <link rel="icon" sizes="192x192" href="{{asset('img/pwa/icon-192x192.png')}}">
  <link rel="icon" sizes="128x128" href="{{asset('img/pwa/icon-128x128.png')}}">
  <link rel="apple-touch-icon" href="{{asset('img/pwa/icon-192x192.png')}}">
  <meta name="theme-color" content="#5f5eaa">
  <!--PWA-->
   <!--<script src="{{ asset('/sw.js') }}"></script>-->
   <script>
   
        if ('serviceWorker' in navigator) {
        	window.addEventListener('load', function () {
        		navigator.serviceWorker.register("{{ asset('/sw.js') }}");
        	});
        }
        else {
            console.log("Fout")
        }
    </script>
    
    <!--jquery ui-->
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <!--jquery ui-->
  
  <!--jquery_print-->
  
  <script src="{{asset('js/jprint.js')}}"></script>
    <!--jquery_print-->
  
<!--Bootstrap icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<!--Bootstrap icons-->
  
  <style>
      body {
     background-color: red;
    background: url("{{asset('img/background_2.jpg')}}");
    height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
  
</head>