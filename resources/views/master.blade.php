
@include("header")
@if (Cookie::get('language')=="ar")
@include('ar.navbar')
@else
@include('nl.navbar2')
@endif
@yield('content')
@include("footer")

