
@include("header")
@if (Cookie::get('language')=="ar")
@include('ar.navbar')
@else
@include('navbar')
@endif
@yield('content')

