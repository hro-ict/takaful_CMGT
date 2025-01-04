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
  
  <!--//PWA-->
  <link rel="manifest" href="{{ asset('manifest.json') }}">
  <link rel="icon" sizes="192x192" href="{{asset('img/pwa/192x192.png')}}">
  <link rel="icon" sizes="128x128" href="{{asset('img/pwa/128x128.png')}}">
  <link rel="apple-touch-icon" href="{{asset('img/pwa/192x192.png')}}">
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
</head>