
@include("header")
@if (Cookie::get('language')=="ar")
@include('ar.navbar')
@else
@include('nl.navbar')
@endif
@yield('content')
@include("nl.bij_bij_overlijden")


