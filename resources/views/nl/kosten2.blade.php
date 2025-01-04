@extends('master')
@section('content')


<div class="container pt-5 mt-5">
<div class="mt-5 pb-5 pt-5 btn-group d-flex flex-wrap flex-sm-nowrap" role="group" aria-label="Basic radio toggle button group">
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5">
    
        <div class="col">
            <div class="card w-100 ">
              <img src="{{ asset('img/family.png') }}" class="card-img-top rounded-circle"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body position-sm-relative ">
                <h6 class="card-title"> Gezin minder dan 40 jaar oud</h6>
                <p class="card-text">
                 120 Euro (Jaarlijks)
                </p>
                <div class="position-sm-absolute bottom-sm-0  w-75 mb-sm-3">
                <input type="radio" class="register   btn-check " name="btnradio" id="family-40" autocomplete="off" >
                <label class="btn btn-outline-primary w-100" for="family-40"><span class="fw-bold text-black "><small>AANMELDEN</small></span> </label>
                </div>
              </div>
            </div>
        </div>
        
           
        <div class="col"> 
            <div class="card  w-100  w-sm-50">
              <img src="{{ asset('img/family_2.png') }}" class="card-img-top"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body">
                <h6 class="card-title">Gezin meer dan 40 jaar oud</h6>
                <p class="card-text">
                250 Euro (Jaarlijks)
                </p>
                <table class="table">
                    <tr>
                        <td>
                            <small>Leeftijd 60-69 <br> 950 euro eenmalig</small>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <small><stron></stron>Leeftijd vanaf 70 <br> 1500 euro eenmalig</strong</small>
                        </td>
                    </tr>
                </table>
                <input type="radio" class="register btn-check" name="btnradio" id="family+40" autocomplete="off" >
                <label class="btn btn-outline-primary w-100" for="family+40"><span class="fw-bold text-black "><small>AANMELDEN</small></span> </label>
              </div>
            </div>
        </div>
          
        <div class="col">
            <div class="card  w-100">
              <img src="{{ asset('img/single_1.png') }}" class="card-img-top rounded-circle"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body position-relative">
                <h6 class="card-title">Individueel minder dan 40 jaar oud</h6>
                <p class="card-text">
                75 Euro (Jaarlijks)
                </p>
                <div class="position-absolute bottom-0 mx-auto w-75 mb-3">
                <input type="radio" class="register btn-check" name="btnradio" id="single-40" autocomplete="off" >
                <label class="btn btn-outline-primary w-100" for="single-40"><span class="fw-bold text-black "><small>AANMELDEN</small></span> </label>
                </div>
              </div>
            </div>
          
            <div id="register_form" class="card  w-100  w-sm-50">
              <img src="{{ asset('img/single_2.png') }}" class="card-img-top"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body">
                <h6 class="card-title">Individueel meer dan 40 jaar oud</h6>
                <p class="card-text">
                150 Euro (Jaarlijks)
                </p>
                  <table class="table">
                    <tr>
                        <td>
                            <small>Leeftijd 60-69 <br> 950 euro eenmalig</small>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <small><stron></stron>Leeftijd vanaf 70 <br> 1500 euro eenmalig</strong</small>
                        </td>
                    </tr>
                </table>
                <input type="radio" class="register btn-check" name="btnradio" id="single+40" autocomplete="off" >
                <label class="btn btn-outline-primary w-100" for="single+40"><span class="fw-bold text-black "><small>AANMELDEN</small></span> </label>
              </div>
            </div>
        </div>
        
        <div class="col">
            
              <div class="card  w-100  w-sm-50">
              <img src="{{ asset('img/donatie.png') }}" class="card-img-top"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body position-relative">
                <h6 class="card-title">DONATIE</h6>
                <p class="card-text">
                Minimaal 1 euro
                </p>
                <div class="position-absolute bottom-0 mx-auto w-75 mb-0 mb-sm-3">
                <input type="radio" class="btn-check " name="btnradio" id="donatie" autocomplete="off" >
                <label class="btn btn-outline-primary w-100" for="donatie"><span class="fw-bold text-black "><small>DONEREN</small></span> </label>
                </div>
              </div>
            </div>
        </div>
    </div>
            
          </div>

</div>

<script>
$(".register").click(function(){
            location.href="/register"
})           
</script>

@endsection