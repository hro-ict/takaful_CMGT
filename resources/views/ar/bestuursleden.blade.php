@extends('master')
@section('content')

<div class="container mt-5 pt-5 ">
<h2 class="mt-5 text-center">Bestuursleden</h2>

<div class="d-flex flex-wrap flex-md-nowrap " role="group" aria-label="Basic radio toggle button group">
    <div class="card  w-50">
      <img width="200" height="268" src="{{ asset('img/bestuur/voorzitter.png') }}" class="card-img-top "
        alt="Voorzitter" />
      <div class="card-body d-flex flex-column">
        <h6 class="card-title">Voorzitter</h6>
        <p class="card-text">
            Salah Ali Mohamed Said
        </p>
        {{-- <input type="radio" class="btn-check " name="btnradio" id="family-40" autocomplete="off" > --}}
        <label  id="voorzitter" class="btn btn-outline-primary w-100 mt-auto align-self-start" ><span class="fw-bold text-black ">Meer Info - Contact</span> </label>
      </div>
    </div>
   


    <div id="register_form" class="card  w-50">
      <img width="200" height="268" src="{{ asset('img/bestuur/secretaris.png') }}" class="card-img-top"
        alt="Hollywood Sign on The Hill" />
      <div class="card-body d-flex flex-column">
        <h6 class="card-title">Secretaris</h6>
        <p class="card-text">
          Ahmed Ali Mohamed Said

        </p>
        {{-- <input type="radio" class="btn-check" name="btnradio" id="single+40" autocomplete="off" > --}}
        <label id="secretaris" class="btn btn-outline-primary w-100 mt-auto align-self-start" ><span class="fw-bold text-black ">Meer Info - Contact</span> </label>
      </div>
    </div>


  
    <div class="card  w-50">
      <img width="200" height="268" src="{{ asset('img/bestuur/raad_van_bestuurslid_1.png') }}" class="card-img-top"
        alt="Hollywood Sign on The Hill" />
      <div class="card-body d-flex flex-column">
        <h6 class="card-title">Raad van bestuurslid</h6>
        <p class="card-text">
            Mohsen Aly
        </p>
        {{-- <input type="radio" class="btn-check" name="btnradio" id="family+40" autocomplete="off" > --}}
        <label id="raad_van_bestuurslid_1" class="btn btn-outline-primary w-100 mt-auto align-self-start" ><span class="fw-bold text-black ">Meer Info - Contact</span> </label>
      </div>
    </div>
  
    <div class="card   w-50">
      <img width="200" height="268" src="{{ asset('img/bestuur/raad_van_bestuurslid_2.png') }}" class="card-img-top "
        alt="Hollywood Sign on The Hill" />
      <div class="card-body d-flex flex-column">
        <h6 class="card-title">Raad van bestuurslid</h6>
        <p class="card-text">
            Shahat Amin Kolil
        </p>
        {{-- <input type="radio" class="btn-check" name="btnradio" id="single-40" autocomplete="off" > --}}
        <label id="raad_van_bestuurslid_2" class="btn btn-outline-primary w-100 mt-auto align-self-start" ><span class="fw-bold text-black ">Meer Info - Contact</span> </label>
      </div>
    </div>
  
  

    <div class="card   w-50">
        <img width="200" height="268" src="{{ asset('img/bestuur/penningmeester.png') }}" class="card-img-top "
          alt="Hollywood Sign on The Hill" />
        <div class="card-body d-flex flex-column">
          <h6 class="card-title">Penningmeester</h6>
          <p class="card-text">
            Abdu El Sharkawy
          </p>
          {{-- <input type="radio" class="btn-check" name="btnradio" id="single-40" autocomplete="off" > --}}
          <label id="penningmeester" class="btn btn-outline-primary w-100 mt-auto align-self-start" ><span class="fw-bold text-black ">Meer Info - Contact</span> </label>
        </div>
      </div>
  </div>
  
  
  
  
  {{-- <div id="register_form"></div><br><br><br> --}}
  <div  class="register_form mt-5">
  
  </div>
  
  
  <!--register_choose-->
  </div>
  


  </div>




{{-- modal --}}

<!-- The Modal -->
<div class="modal" id="myModal" >
  <div class="modal-dialog modal-sm modal-dialog-scrollable">
    <div class="modal-content">

     

      <!-- Modal body -->
      <div class="modal-body">
        <div class="card  ">
          <img width="200px" height="200px" id="about_img" src="{{ asset('img/bestuur/raad_van_bestuurslid_1.png') }}" class="card-img-top"
            alt="meer info over bestuurslid" />
          <div class="card-body d-flex flex-column">
            <h6 dir="rtl" lang="ar" id="name"  class="card-title"></h6>
            <p dir="rtl" lang="ar" id="about" class="card-text">
                
            </p>
            <hr class="fw-bold">
            <p dir="rtl" lang="ar" class="text-center fw-bold">اتصال</p>
            <div class="d-flex ">
                <div><img width="20" height="20" src="{{asset('img/phone.png')}}"></div>
                <div  class="ps-3">
                    <a id="phone_about" href=""></a>
                </div>
            </div>
            
            <div class="d-flex">
                <div><img width="20" height="20" src="{{asset('img/email.png')}}"></div>
                <div  class="ps-3">
                    <a id="email_about" href=""></a>
                </div>
            </div>
            
            
            
            
            
           
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Afsluiten</button>
      </div>

    </div>
  </div>
 

 

{{-- modal --}}




<script>


//console.log("Hello"+ {{ Cookie::get('language') }}  )

String.prototype.format = function() {
        var newStr = this, i = 0;
        while (/%s/.test(newStr))
            newStr = newStr.replace("%s", arguments[i++])
    
        return newStr;
    }


function get_info(name) {
    json_file= name+"_ar.json"
    console.log("start json fetch")
    $.getJSON( "{{ asset('about_bestuur/%s') }}".format(json_file), function( data ) {
    
    $("#about").html(data.about)
    $("#name").html(data.name)
     $("#email_about").attr("href","mailto:%s".format(data.email))
    $("#email_about").html(data.email)
     $("#phone_about").html(data.phone)
       $("#phone_about").attr("href","tel:%s".format(data.phone))
    
    
    $("#about_img").attr("src", "{{ asset('img/bestuur/%s') }}".format(data.image))
    
    $('#myModal').modal('show');
});
}

$("label").click(function(){
 // $('#myModal').modal('show');
 
    name= $($(this)).attr("id")
    get_info(name)
})

// get_info("voorzitter")
   
</script>




@endsection