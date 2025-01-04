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





<!--footer-->

<div class="containe-fluid  mt-5">
    <footer class="bg-light text-center text-white">

   

        {{-- <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><img width="30px" src="{{ asset('img/map.png') }}"></i>
                    <p>Oostenburgergracht 1A – 1918 NA Amsterdam</p>
                </li>

                <li><img width="30px" src="{{ asset('img/telephone.png') }}"></i>
                    <p>06 538 36 023/ 06 515 10 261</p>
                </li>

                <li><img width="30px" src="{{ asset('img/email.png') }}"></i>
                    <p>info@takaful.nl</p>
                </li>
            </ul>
        </div> --}}

        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          {{-- <section class="mb-1">
            
            <a
            class="btn text-white btn-floating m-1"
          
            href="#!"
            role="button"
            ><img width="30px" src="{{ asset('img/map.png') }}"></a>

            <p class="btn  btn-floating m-1">Oostenburgergracht 1A – 1018 NA Amsterdam</p>

          </section>


          <section class="mb-1">
            
            <a
            class="btn text-white btn-floating m-1"
         
            href="#!"
            role="button"><img width="30px" src="{{ asset('img/email.png') }}"></a>

            <p class="btn  btn-floating m-1">06-123456789</p>

          </section> --}}

          {{-- <div class="d-flex justify-content-center">
            <div>
                <img  width="30px" src="{{ asset('img/email.png') }}">
            </div>
          
            <div class="ms-3 text-black" >
                <span>info@takaful.nl</span>
            </div>
          </div>

          <div class="d-flex justify-content-center">
            <div>
                <img  width="30px" src="{{ asset('img/email.png') }}">
            </div>
          
            <div class="ms-3 text-black" >
                <span>06-12345678</span>
            </div>
          </div> --}}

          <h6 class="text-center text-black fw-bold">Stichting Collectief Begrafenisfonds voor Egyptenaren</h6>
          <h6 class="text-center text-black fw-bold">صندوق التكافل الاجتماعي للمصریین-بھولندا</h6>
          <hr>
         <section class="mb-4 d-flex justify-content-center">
            
          <table class="table">
            <tr>
                <td>
                    <img  width="30px" src="{{ asset('img/email.png') }}">  
                </td>
                <td  >
                <span class="text-black">info@takaful.nl</span>
                </td>
            </tr>
            <tr>
                <td>
                    <img  width="30px" src="{{ asset('img/phone.png') }}"> 
                </td>
                <td>
                    <span class="text-black">06 538 36 023/ 06 515 10 261</span>
                </td>
            </tr>

            <tr>
                <td>
                    <img  width="30px" src="{{ asset('img/map.png') }}"> 
                </td>
                <td class="ps-3">
                    <span class="text-black">Oostenburgergracht 1A – 1018 NA Amsterdam</span>
                </td>
            </tr>

            <tr>
                <td>
                    <span class="text-black">IBAN-Nummer</span>
                </td>
                <td class="ps-3">
                    <span class="text-black">NL.59 INGB 0008 8823 15</span>
                </td>
            </tr>
             <tr>
                <td>
                    <span class="text-black">K.V.K-Nummer</span>
                </td>
                <td class="ps-3">
                    <span class="text-black">83302492</span>
                </td>
            </tr>
          </table>
         </section>

          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #3b5998;"
              href="#!"
              role="button"
              ><i class="bi bi-facebook"></i></a>
      
            <!-- Twitter -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #55acee;"
              href="#!"
              role="button"
              ><i class="bi bi-twitter"></i></a>
      
            <!-- Google -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #dd4b39;"
              href="#!"
              role="button"
              ><i class="bi bi-youtube"></i></a>
      
            <!-- Instagram -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #ac2bac;"
              href="#!"
              role="button"
              ><i class="bi bi-instagram"></i></a>
      
            <!-- Linkedin -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #0082ca;"
              href="#!"
              role="button"
              ><i class="bi bi-linkedin"></i></a>
            <!-- Github -->
            {{-- <a
              class="btn text-white btn-floating m-1"
              style="background-color: #333333;"
              href="#!"
              role="button"
              ><i class="fab fa-github"></i
            ></a> --}}
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 made by
          <a class="text-white" target="_blank" href="https://www.linkedin.com/in/yasar-unlu/">Yasar Unlu</a>
        </div>
        <!-- Copyright -->
      </footer>
</div>

<!--footer end-->




<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-sm modal-dialog-scrollable">
    <div class="modal-content">

     

      <!-- Modal body -->
      <div class="modal-body">
        <div class="card  ">
          <img width="200px" height="200px" id="about_img" src="{{ asset('img/bestuur/raad_van_bestuurslid_1.png') }}" class="card-img-top"
            alt="meer info over bestuurslid" />
          <div class="card-body d-flex flex-column">
            <h6 id="name"  class="card-title"></h6>
            <p id="about" class="card-text">
                
            </p>
            <hr class="fw-bold">
            <p class="text-center fw-bold">Contactgegevens</p>
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
 

 

<!--modal end-->





<script>


//console.log("Hello"+ {{ Cookie::get('language') }}  )

String.prototype.format = function() {
        var newStr = this, i = 0;
        while (/%s/.test(newStr))
            newStr = newStr.replace("%s", arguments[i++])
    
        return newStr;
    }


function get_info(name) {
    json_file= name+".json"
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