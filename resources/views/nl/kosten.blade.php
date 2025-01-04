@extends('master')
@section('content')


<div class="container pt-5 mt-5">
<div class="mt-5 text-center">
 
<h3><span class="badge bg-primary text-center">TARIEVEN-PAKKETTEN</span></h3>
</div>
<div class="mt-2 pb-5 pt-3 btn-group d-flex flex-wrap flex-md-nowrap" role="group" aria-label="Basic radio toggle button group">
            <div class="card w-100  w-sm-50">
              <img src="{{ asset('img/family.png') }}" class="card-img-top rounded-circle"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body position-sm-relative ">
                <h6 class="card-title"> Gezin minder dan 40 jaar oud</h6>
                <p class="card-text">
                 120 Euro (Jaarlijks)
                </p>
                <table class="table">
                    <tr>
                        <td><small>Kinderen tot 18 jaar gratis</small></td>
                    </tr>
                </table>
                <div class="position-sm-absolute bottom-sm-0  w-75 mb-sm-3">
                <!--<input type="radio" class="register   btn-check " name="btnradio" id="family-40" autocomplete="off" >-->
                <!--<label class="btn btn-outline-primary w-100" for="family-40"><span class="fw-bold text-black "><small>AANMELDEN</small></span> </label>-->
                </div>
              </div>
            </div>
           
          
            <div class="card mt-4 mt-md-0  w-100  w-sm-50">
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
                    <tr>
                        <td><small>Kinderen tot 18 jaar  gratis</small></td>
                    </tr>
                </table>
                <!--<input type="radio" class="register btn-check" name="btnradio" id="family+40" autocomplete="off" >-->
                <!--<label class="btn btn-outline-primary w-100" for="family+40"><span class="fw-bold text-black "><small>AANMELDEN</small></span> </label>-->
              </div>
            </div>
          
            <div class="card mt-4 mt-md-0   w-100  w-sm-50">
              <img src="{{ asset('img/single_1.png') }}" class="card-img-top rounded-circle"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body position-relative">
                <h6 class="card-title">Individueel minder dan 40 jaar oud</h6>
                <p class="card-text">
                75 Euro (Jaarlijks)
                </p>
                <div class="position-absolute bottom-0 mx-auto w-75 mb-3">
                <!--<input type="radio" class="register btn-check" name="btnradio" id="single-40" autocomplete="off" >-->
                <!--<label class="btn btn-outline-primary w-100" for="single-40"><span class="fw-bold text-black "><small>AANMELDEN</small></span> </label>-->
                </div>
              </div>
            </div>
          
            <div id="register_form" class="card mt-4 mt-md-0   w-100  w-sm-50">
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
                <!--<input type="radio" class="register btn-check" name="btnradio" id="single+40" autocomplete="off" >-->
                <!--<label class="btn btn-outline-primary w-100" for="single+40"><span class="fw-bold text-black "><small>AANMELDEN</small></span> </label>-->
              </div>
            </div>
            
              <div class="card mt-4 mt-md-0    w-100  w-sm-50">
              <img src="{{ asset('img/donatie.png') }}" class="card-img-top"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body position-relative">
                <h6 class="card-title">DONATIE</h6>
                <p class="card-text">
                Minimaal 1 euro
                </p>
                <div class="position-absolute bottom-0 mx-auto w-75 mb-0 mb-sm-3">
                <!--<input type="radio" class="btn-check " name="btnradio" id="donatie" autocomplete="off" >-->
                <!--<label class="btn donatie_btn btn-outline-primary w-100" for="donatie"><span class="fw-bold text-black "><small>DONEREN</small></span> </label>-->
                <button class="btn donatie_btn btn-primary w-100"><span class="fw-bold">DONEREN</span></button>
                </div>
              </div>
            </div>
            
          </div>

</div>

<div class="register container w-100  text-center">
    <button class="btn btn-info w-100 text-white fw-bold"><p class="h3 fw-bold">Klik hier om aan te melden</p></button>
</div>


<!--modal doneren-->

<div id="myModal" class="modal mt-5 w-100" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Kies een bedrag</h5>
        <button type="button" class="btn-close hide" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          
          <div class="input-group mb-3">
 
  <input id="donateur" type="text" class="form-control" placeholder="Naam van donateur" aria-label="Username" aria-describedby="basic-addon1">
</div>
        <select id= "bedrag" class="w-100 form-select form-select-lg mb-3">
            <option>1.00</option>
        </select>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn betaal_btn btn-danger w-100">KLIK HIER OM HET BEDRAG TE BETALEN</button>
      </div>
    </div>
  </div>
</div>

<!--modal doneren-->


<script>
$(".register").click(function(){
            location.href="/register"
})     


$(".donatie_btn").click(function(){
for(var x=5; x<1005; x+=5) {
    $("select").append("<option>"+x+".00"+"</option>")
}
$("#myModal").show();
})

$(".hide").click(function(){
   $("#myModal").hide(); 
})

// $("#myModal").modal({
//             backdrop: 'static',
//             keyboard: false
//         });

$(".betaal_btn").click(function(){
    var donateur= $("#donateur").val()
    var bedrag= $("#bedrag").val()
    if (donateur.length==0){
        donateur="anoniem"
    }
    location.href= "/mollie-payment/"+bedrag+"/Donatie door: "+donateur
})

</script>

@endsection