@extends('master')
@section('content')



<div id="register_choose">
  <h3 class="mb-4 text-center"><span class="badge bg-secondary">KIES EEN PAKKET</span></h3>


{{-- TEST --}}



{{-- TEST --}}

<div class="btn-group d-flex flex-wrap flex-md-nowrap" role="group" aria-label="Basic radio toggle button group">
  <div class="card h-100 w-50">
    <img src="{{ asset('img/family.png') }}" class="card-img-top rounded-circle"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body">
      <h6 class="card-title">Leeftijd minder dan 40 jaren (gezin)</h6>
      <p class="card-text">
       120 Euro
      </p>
      <input type="radio" class="btn-check" name="btnradio" id="family-40" autocomplete="off" >
      <label class="btn btn-outline-primary w-100" for="family-40"><span class="fw-bold text-black ">KIEZEN</span> </label>
    </div>
  </div>
 

  <div class="card h-100 w-50">
    <img src="{{ asset('img/family_2.png') }}" class="card-img-top"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body">
      <h6 class="card-title">Leeftijd meer dan 40 jaren (gezin)</h6>
      <p class="card-text">
      250 Euro
      </p>
      <input type="radio" class="btn-check" name="btnradio" id="family+40" autocomplete="off" >
      <label class="btn btn-outline-primary w-100" for="family+40"><span class="fw-bold text-black ">KIEZEN</span> </label>
    </div>
  </div>

  <div class="card h-100  w-50">
    <img src="{{ asset('img/single_1.png') }}" class="card-img-top rounded-circle"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body">
      <h6 class="card-title">Leeftijd minder dan 40 jaren (Individueel)</h6>
      <p class="card-text">
      75 Euro
      </p>
      <input type="radio" class="btn-check" name="btnradio" id="single-40" autocomplete="off" >
      <label class="btn btn-outline-primary w-100" for="single-40"><span class="fw-bold text-black ">KIEZEN</span> </label>
    </div>
  </div>

  <div id="register_form" class="card h-100 w-50">
    <img src="{{ asset('img/single_2.png') }}" class="card-img-top"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body">
      <h6 class="card-title">Leeftijd meer dan 40 jaren (Individueel)</h6>
      <p class="card-text">
      150 Euro
      </p>
      <input type="radio" class="btn-check" name="btnradio" id="single+40" autocomplete="off" >
      <label class="btn btn-outline-primary w-100" for="single+40"><span class="fw-bold text-black ">KIEZEN</span> </label>
    </div>
  </div>
</div>




{{-- <div id="register_form"></div><br><br><br> --}}
<div  class="register_form mt-5">

</div>


<!--register_choose-->
</div>

<script>
fill_in= '<h3 class="mb-4 text-center"><span class="badge bg-info">Vul de formulier in</span></h3>'
$(".btn-check").click(function(){
    // $(this).next().text("GEKOZEN")
    choosen= $(this).attr("id")
  if (choosen.includes("family")) {
    Swal.fire({
  title: 'Heeft u kind(eren)?',
  showDenyButton: true,
  confirmButtonText: 'JA',
  denyButtonText: 'NEE',
 
}).then((result) => {
  if (result.isConfirmed) {
    $.get("/register_family", function(data){
      $(".register_form").empty()
      $(".register_form").append(fill_in)
     $(".register_form").append(data)
     location.href= "#register_form";
    })
  } else if (result.isDenied) {
    $.get("/register_family_no_kind", function(data){
      $(".register_form").empty()
      $(".register_form").append(fill_in)
     $(".register_form").append(data)
     location.href= "#register_form";
    })
  }
})


  }

  else {
    $.get("/register_single", function(data){
      $(".register_form").empty()
      $(".register_form").append(fill_in)
     $(".register_form").append(data)
     location.href= "#register_form";
    })
  }




})
 </script>

 

@endsection


