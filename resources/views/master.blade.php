
@include("header")
@if (Cookie::get('language')=="ar")
@include('ar.navbar')
@else
@include('nl.navbar2')
@endif
@yield('content')
@include("footer")

@if (Cookie::get('language')=="ar")
@include("ar.bel_bij_overlijden")
@else
@include("nl.bel_bij_overlijden")
@endif




