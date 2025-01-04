@extends('master')
@section('content')

 <div class="card d-flex">
<div class="card-body d-flex">
<!--<div class="row   p-3">-->
    
<!--    <div class="col-1">-->
<!--          <input style="width:30px; height:30px" class="form-check-input" type="radio" name="flexRadioDefault" id="on_website">-->
<!--    </div>-->
<!--      <div class="col-10">-->
<!--       <label class="form-check-label" for="on_website">-->
<!--   <h4>Ik wil op website registreren </h4>-->
<!--  </label>-->
<!--  </label>-->
<!--    </div>-->

<!--</div>-->
<input style="width:2rem; height:2rem" class="form-check-input " type="radio" name="flexRadioDefault" id="on_website">
<label class="form-check-label ms-3 " for="on_website">
    <p style="font-size:1rem" class="align-self-center">Ik wil op website registreren </p>
    </label>
    </div>
</div>



 <div class="card d-flex mt-5">
<div class="card-body d-flex">
<!--<div class="row   p-3">-->
    
<!--    <div class="col-1">-->
<!--          <input style="width:30px; height:30px" class="form-check-input" type="radio" name="flexRadioDefault" id="on_website">-->
<!--    </div>-->
<!--      <div class="col-10">-->
<!--       <label class="form-check-label" for="on_website">-->
<!--   <h4>Ik wil op website registreren </h4>-->
<!--  </label>-->
<!--  </label>-->
<!--    </div>-->

<!--</div>-->
<input style="width:2rem; height:2rem" class="form-check-input " type="radio" name="flexRadioDefault" id="download_formule">
<label class="form-check-label ms-3 " for="download_formule">
    <p style="font-size:1rem" class="align-self-center">Ik wil registratieformulier downloaden en zelf invullen </p>
    </label>
    </div>
</div>

<button class="btn btn-primary w-100 mt-5 mb-5 fw-bold text-white">Bevestig uw keuze</button>


<script>
    $("button").click(function(){
    on_website= $("#on_website").prop("checked");
    download_formule= $("#download_formule").prop("checked");
    if (on_website){
        location.href="/register_on_web";
    }
     if (download_formule){
        location.href="/download_formule";
    }
    if (!on_website && !download_formule) {
        Swal.fire("Kiest u A.U.B. een optie",  "", "error")
    }
    })
</script>

@endsection