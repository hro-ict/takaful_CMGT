@extends('master')
@section('content')


<div class="container mt-5">
<div class="btn-group d-flex flex-wrap flex-md-nowrap" role="group" aria-label="Basic radio toggle button group">
            <div class="card h-100 w-50">
              <img src="{{ asset('img/family.png') }}" class="card-img-top rounded-circle"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body">
                <h6 class="card-title"> Gezin minder dan 40 jaar oud</h6>
                <p class="card-text">
                 120 Euro
                </p>
                <input type="radio" class="btn-check" name="btnradio" id="family-40" autocomplete="off" >
                <label class="btn btn-outline-primary w-100" for="family-40"><span class="fw-bold text-black ">AANMELDEN</span> </label>
              </div>
            </div>
           
          
            <div class="card h-100 w-50">
              <img src="{{ asset('img/family_2.png') }}" class="card-img-top"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body">
                <h6 class="card-title">Gezin meer dan 40 jaar oud</h6>
                <p class="card-text">
                250 Euro
                </p>
                <input type="radio" class="btn-check" name="btnradio" id="family+40" autocomplete="off" >
                <label class="btn btn-outline-primary w-100" for="family+40"><span class="fw-bold text-black ">AANMELDEN</span> </label>
              </div>
            </div>
          
            <div class="card h-100 w-50">
              <img src="{{ asset('img/single_1.png') }}" class="card-img-top rounded-circle"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body">
                <h6 class="card-title">Individueel minder dan 40 jaar oud</h6>
                <p class="card-text">
                75 Euro
                </p>
                <input type="radio" class="btn-check" name="btnradio" id="single-40" autocomplete="off" >
                <label class="btn btn-outline-primary w-100" for="single-40"><span class="fw-bold text-black ">AANMELDEN</span> </label>
              </div>
            </div>
          
            <div id="register_form" class="card h-100 w-50">
              <img src="{{ asset('img/single_2.png') }}" class="card-img-top"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body">
                <h6 class="card-title">Individueel meer dan 40 jaar oud</h6>
                <p class="card-text">
                150 Euro
                </p>
                <input type="radio" class="btn-check" name="btnradio" id="single+40" autocomplete="off" >
                <label class="btn btn-outline-primary w-100" for="single+40"><span class="fw-bold text-black ">AANMELDEN</span> </label>
              </div>
            </div>
          </div>

</div>

<script>
$(".btn-check").click(function(){
            location.href="/register"
})           
</script>

@endsection