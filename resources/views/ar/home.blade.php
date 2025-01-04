@extends('master')
@section('content')

<div class="container">

<div class="row">
 <div class="col">
<img width="100%" src="{{ asset('img/image1.jpg') }}" alt="" class="img-fluid">
 </div>
 <div class="col">
            <img width="100%" src="{{ asset('img/image2.jpg') }}" alt="" class="img-fluid">
             </div>
</div>




<div class="embed-responsive embed-responsive-16by9 mt-5 mb-5" style="width:100%">
            <iframe  width="100%"  height="400" class="embed-responsive-item" src="{{ asset('img/video.mp4') }}"  allowfullscreen></iframe>
          </div>
</div>
@endsection