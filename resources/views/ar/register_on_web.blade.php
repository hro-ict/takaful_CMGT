@extends('master')
@section('content')

<div dir="" lang="" class="container-fluid  mt-2 pt-1">
<div id="register_choose ">
  <h3 class="mb-4   text-center"><span class="badge bg-secondary ">اختر الحزمة</span></h3>



<div class="btn-group d-flex flex-wrap flex-md-nowrap " role="group" aria-label="Basic radio toggle button group">
  <div class="card  w-50">
    <img src="{{ asset('img/family.png') }}" class="card-img-top rounded-circle"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body d-flex flex-column ">
      <h6 class="card-title">السنوية لاقل من اربعين عاما عائلي</h6>
      <p class="card-text">
                 120 يورو (سنوي)
                </p>
                <table class="table">
                    <tr>
                        <td><small>الأطفال حتى سن 18 عامًا مجانًا</small></td>
                    </tr>
                </table>
      <input type="radio" class="btn-check " name="btnradio" id="family-40" autocomplete="off" >
      <label class="btn  btn-outline-primary w-100 mt-auto align-self-start" for="family-40"><span class="fw-bold text-black ">اختر</span> </label>
    </div>
  </div>
 

  <div class="card  w-50">
    <img src="{{ asset('img/family_2.png') }}" class="card-img-top"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body d-flex flex-column">
      <h6 class="card-title"> السنویة لاكبر من اربعین عاما عائلي</h6>
      <p class="card-text">
                250 يورو (سنوي)
                </p>
                <table class="table">
                    <tr>
                        <td>
                            <small>العمر 60-69 <br>
                            
                           950 يورو مرة واحدة
                            
                            
                            
                            </small>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <small><stron></stron>
                            العمر من 70
                            
                            <br> 
                            
                         1500 يورو مرة واحدة
                            
                            </strong</small>
                        </td>
                    </tr>
                    <tr>
                        <td><small>
                         الأطفال حتى سن 18 عامًا مجانًا
                            
                            </small></td>
                    </tr>
                </table>
      <input type="radio" class="btn-check" name="btnradio" id="family+40" autocomplete="off" >
      <label class="btn btn-outline-primary w-100 mt-auto align-self-start" for="family+40"><span class="fw-bold text-black ">اختر</span> </label>
    </div>
  </div>

  <div class="card   w-50">
    <img src="{{ asset('img/single_1.png') }}" class="card-img-top rounded-circle"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body d-flex flex-column">
      <h6 class="card-title">
         السنویة لاقل من اربعین عاما فردي
          </h6>
      <p class="card-text">
    75 يورو (سنوي)
      </p>
      <input type="radio" class="btn-check" name="btnradio" id="single-40" autocomplete="off" >
      <label class="btn btn-outline-primary w-100 mt-auto align-self-start" for="single-40"><span class="fw-bold text-black ">اختر</span> </label>
    </div>
  </div>

  <div id="register_for" class="card  w-50">
    <img src="{{ asset('img/single_2.png') }}" class="card-img-top"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body d-flex flex-column">
      <h6 class="card-title">
         السنویة لاكبر من اربعین عاما فردي 
          
          </h6>
      <p class="card-text">
              150 يورو (سنوي)
                </p>
                <table class="table">
                    <tr>
                        <td>
                            <small>العمر 60-69 <br>
                            
                           950 يورو مرة واحدة
                            
                            
                            
                            </small>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <small><stron></stron>
                            العمر من 70
                            
                            <br> 
                            
                         1500 يورو مرة واحدة
                            
                            </strong</small>
                        </td>
                    </tr>
                  
                </table>
      <input type="radio" class="btn-check" name="btnradio" id="single+40" autocomplete="off" >
      <label class="btn btn-outline-primary w-100 mt-auto align-self-start" for="single+40"><span class="fw-bold text-black ">اختر</span> </label>
    </div>
  </div>
</div>




 <div id="register_form"></div><br><br><br>
<div  class="register_form mt-5">

</div>


<!--register_choose-->
</div>


</div>


<!--<div id="print_div" class="container mt-5 d-none"><button id="btn_print" class="btn btn-info w-100 fw-bold">PRINT FORMULIER</button>-->
<!--</div>-->



<script>
print= '<div id="print_div" class="container mt-5"><button id="btn_print" class="btn btn-info w-100 fw-bold">PRINT FORMULIER</button></div>'
fill_in= '<h3 class="mb-4 text-center"><span class="badge bg-info">Vul de formulier in</span></h3>'
$(".btn-check").click(function(){
    // $(".btn-check").each(function(){
    //     $(this).next().html("<strong>KIEZEN</strong>")
    // })
    //$(this).next().text("KIEZEN")
    
    $( ".btn-check" ).each(function( index ) {
  if($( this ).prop("checked")== true ) {
        $(this).next().html("<strong>اختيار</strong>")
        $(this).parent().parent().addClass("border border-primary border-5 bg-info")
  }
  
  else {
      $(this).next().html("<strong>اختر</strong>")
      $(this).parent().parent().removeClass("border border-primary border-5 bg-info")
  }

});
    
    
    
    choosen= $(this).attr("id")
  if (choosen.includes("family")) {
    Swal.fire({
  title: 'هل لديك أطفال؟',
  showDenyButton: true,
  confirmButtonText: 'JA',
  denyButtonText: 'NEE',
 
}).then((result) => {
  if (result.isConfirmed) {
    $.get("/register_family2", function(data){
      $(".register_form").empty()
      $(".register_form").append(fill_in)
    //   $(".register_form").append(btn)
     $(".register_form").append(data)
        $("#print_div").removeClass("d-none")
     location.href= "#register_form";
     $("register_form").append(print)
    })
  } else if (result.isDenied) {
    $.get("/register_family_no_kind", function(data){
      $(".register_form").empty()
      $(".register_form").append(fill_in)
     $(".register_form").append(data)
      $("#print_div").removeClass("d-none")
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
          $("#print_div").removeClass("d-none")
     location.href= "#register_form";
    })
  }




})


  $("body").on("click", "#btn_print", function(){

                $.print(".register_form")

            });

 </script>

 

@endsection


