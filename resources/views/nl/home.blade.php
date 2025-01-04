@extends('master')
@section('content')

<div class="container mt-5 pt-5 ">

<div class="row row-cols-1 row-cols-lg-2 ">
 <div class="col mt-5">
<img width="100%" src="{{ asset('img/image1.jpg') }}" alt="" class="img-fluid">
 </div>
 <div class="col mt-5">
            <img width="100%" src="{{ asset('img/image2.jpg') }}" alt="" class="img-fluid">
             </div>
</div>



<div class="row row-cols-1 row-cols-lg-2">

<div class="col mt-5">
   <div class="embed-responsive embed-responsive-16by9 " style="width:100%;height:100%">
            <iframe  width="100%"  height="400" class="embed-responsive-item" src="{{ asset('img/video.mp4') }}"  allowfullscreen></iframe>
          </div> 
</div>

<div class="col mt-5">
  <img style="width:100%; height:100%" src="{{ asset('img/ayet.PNG') }}" alt="" class="img-fluid">  
</div>
    
</div>





<!--<div class="embed-responsive embed-responsive-16by9 " style="width:100%">-->
<!--            <iframe  width="100%"  height="400" class="embed-responsive-item" src="{{ asset('img/video.mp4') }}"  allowfullscreen></iframe>-->
<!--          </div>-->
</div>



<div class="container fixed-bottom" style=" margin-right:1%; margin-bottom:2%">
 
 <a href="tel:06-123456789"
  <button class="btn btn-danger sticky-sm-top float-end ">
 <div class="d-flex justify-content-between">
 <div>
  <img width="40" height="40" src="{{ asset('img/phone.png') }}" alt=""> 
 </div>

  <div class="d-flex flex-column">
      <div class="ps-3">
          Bel bij overlijden
      </div>
      <div>
          06-123456789
      </div>
  </div>

 </div>
  </button>
  </a>
</div>


@endsection