 <div class="content">
 <form method="POST" action= "{{ route('save_register') }}">
    @csrf
  
  <input type="hidden" name="type" value="family_with_kids">
  <div class="form-outline mb-4">
        <label class="form-label fw-bold " for="name">Voor- en achternaam aanmelder</label>
    <input type="text"  id="name" name="name" class="form-control date" required/>
  
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
      <label class="form-label fw-bold " for="birthday">Geboortedatum</label>
    <input type="text"  id="birthday" name="birthday" class="form-control datepicker" required/>
    <label class="form-label " for="birthday">Geboortedatum</label>
  </div>
  
  
  
  <!--datepicker jquery ui test-->
  
  <!--<div class="form-outline mb-4">-->
  <!--    <label class="form-label fw-bold " for="birthday">Geboortedatum</label>-->
  <!--  <input type="text"  id="test" name="birthday" class="form-control datepicker" required/>-->
  <!--  <label class="form-label " for="birthday">Geboortedatum</label>-->
  <!--</div>-->
  
   <!--datepicker jquery ui test-->

  <!-- Text input -->
  <div class="form-outline mb-4">
      <label class="form-label fw-bold" for="name_of_partner">Naam Echtgenote</label>
    <input type="text" id="name_of_partner" name="name_of_partner" class="form-control " required/>

  </div>


  <div class="form-outline mb-4">
       <label class="form-label fw-bold" for="birthday_of_partner">Geboortedatum-Echtgenote</label>
    <input type="text" id="birthday_of_partner" name="birthday_of_partner" class="form-control datepicker" required/>
 
  </div>
  <div class="add_kids">
      
  </div>
  <button id="add_kids" type="button" class="btn btn-info w-100 mt-3 mb-3">Voeg een kind toe</button>
  
  
  <div class="form-outline mb-4">
       <label class="form-label fw-bold " for="nationality">Afkomst/Nationaliteit</label>
    <select id="nationality" name="nationality"  class="form-select fw-bold" aria-label="Default select example">
    </select>
   
  </div>

{{-- test --}}



{{-- test --}}

  <div class="form-outline mb-4">
      <label class="form-label fw-bold " for="adress">Adres</label>
    <input type="text"  id="adress" name="adress" class="form-control " required/>

  </div>a

  <div class="form-outline mb-4">
       <label class="form-label fw-bold" for="phone">Telefoonnummer</label>
    <input type="number" id="phone" name="phone" class="form-control" required/>

  </div>

  <div class="form-outline mb-4">
    <label class="form-label fw-bold" for="email">E-Mail</label>
    <input type="email" id="email" name="email" class="form-control" required/>
   
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
       <label class="form-label fw-bold" for="email">Message</label>
    <textarea class="form-control" id="message" name='message' rows="4"></textarea>
 
  </div>
  <input style="width:30px; height:30px" class="form-check-input border border-5 border-danger" type="checkbox"  name="accept" id="accept" >
  <!--<label class="accept" for="accept">-->
    <span class="h6 gy-3" style="cursor:grab" id="accept_text">Ik accepteer <u> <strong>alle voorwaarden</strong></u></span>
  <!--</label>-->

  <!-- Submit button -->
  <button id="send" type="submit" class="btn btn-primary btn-block mb-4 mt-3 w-100">Verzenden</button>
</form>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Algemene Voorwaarden</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dignissim nunc quis tellus gravida lacinia. Phasellus non dolor aliquam, luctus metus nec, consequat erat. Ut lacinia quam vel feugiat viverra. Cras fermentum condimentum eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce a commodo dolor, in placerat urna. Sed pulvinar, lacus sed iaculis convallis, ipsum neque consectetur tellus, vitae efficitur ligula ligula sed mi. Ut urna ipsum, pellentesque at enim vel, dignissim rhoncus diam. Ut congue lacus id sem pulvinar hendrerit.

Aliquam eleifend a arcu in hendrerit. Vestibulum lacinia ex metus, tincidunt hendrerit massa tempor sit amet. Suspendisse vehicula magna vel semper consequat. Morbi ornare, augue ac tincidunt pretium, sem nibh pharetra ipsum, a sollicitudin ipsum sem vitae magna. Aenean dignissim massa ac diam consequat condimentum. Pellentesque luctus turpis a orci molestie, eget porttitor tortor tempor. Nunc dictum, libero in bibendum vulputate, urna diam porta tortor, eu egestas sem sem a justo. Vivamus tincidunt aliquet imperdiet. Duis mauris eros, placerat ut nulla quis, dapibus vulputate ipsum. In ac urna iaculis, auctor massa id, sodales nunc. Praesent ut enim sed leo sagittis porta vel pulvinar lacus. Pellentesque vel dictum purus. Sed venenatis, ipsum ut fermentum porta, magna justo fermentum augue, sit amet eleifend justo ante at velit. Ut tristique facilisis purus vel dictum.

Maecenas varius convallis turpis ac sollicitudin. Integer rhoncus metus erat, gravida rutrum magna tincidunt ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius nisi sed sapien semper facilisis. Donec nec orci nec felis tincidunt feugiat. Morbi ac faucibus velit. Duis tincidunt urna aliquet urna euismod vestibulum. Sed ultricies ante lectus, id semper nisl malesuada sed. Nunc auctor libero sit amet lorem facilisis dapibus. Sed in viverra libero. Fusce a efficitur velit, vitae viverra erat.

Donec laoreet, lectus sit amet suscipit dapibus, ex leo dapibus nisl, eget convallis magna tellus non elit. Donec a ipsum lacus. Phasellus id eros vel lorem venenatis viverra. Sed porta quis nisi nec luctus. Etiam dictum mattis ullamcorper. Sed erat justo, vulputate ut odio lobortis, sollicitudin posuere nisi. Praesent at quam ullamcorper nibh auctor consectetur non sed nibh. Sed non semper leo.

Nam lectus mi, volutpat nec ante scelerisque, rutrum pharetra nisl. Suspendisse vel risus vitae mauris mattis convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse et facilisis risus. Suspendisse luctus pellentesque eros, sit amet pharetra orci dignissim id. Integer convallis sapien fringilla augue convallis consequat at sit amet mi. Duis ac consequat velit. Suspendisse at arcu nisl. Morbi sed rhoncus quam. Vestibulum consectetur vel nisi vel ornare. Nulla ut justo quis augue cursus eleifend in ut urna. Vivamus finibus at justo eget pretium. Donec non elit vel sapien ullamcorper viverra nec nec orci. Vivamus lectus dui, malesuada volutpat enim id, laoreet aliquet justo.
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!--content end-->
</div>



<script>


$.get("https://restcountries.com/v2/all", function(data){
  // data= JSON.parse(data)
  data.forEach(function(index){
   if (index.name=="Egypt")
   html= '<option class="fw-bold" value="%s" selected> %s</option>'.format(index.name,index.name)
   else 
   html= '<option value="%s"> %s</option>'.format(index.name,index.name)
   $("#nationality").append(html)
  })
})






$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


   String.prototype.format = function() {
        var newStr = this, i = 0;
        while (/%s/.test(newStr))
            newStr = newStr.replace("%s", arguments[i++])
    
        return newStr;
    }
   count_kids=0
 
    $("#add_kids").click(function(){
        count_kids+=1
        html= '<div class="form-outline mb-4"><div class="input-group-addon"><i class="bi bi-trash"></i></div><input type="text" name="kind_%s"id="form6Example4" class="form-control" /><label clas="form-label" for="form6Example4">Naam Kind %s</label></div><div class="form-outline mb-4"><label class="form-label fw-bold" for="birthday_of_partner">Geboortedatum Kind %s</label><input type="text" id="birthday_of_partner" name="Geboortedatum kind %s" class="form-control datepicker" required/></div>'.format(count_kids, count_kids, count_kids, count_kids)
        $(".add_kids").append(html);
        
    })

    $('form').submit(function(event){
      event.preventDefault()
      console.log("test")
  
    if($("#accept").prop("checked")==true) {
     

      $.post("{{ route('save_register_family') }}", $( this ).serializeArray(), function(data){
        
         if (data.message=="success") {
             
           
     
             
    Swal.fire({
  title: '<h3>Geachte <span class="text-danger">%s,</span> </h3><h5>Bedankt voor uw aanmelding. U krijgt van ons binnenkort bevestigingsmail. Voor verdere stappen nemen we zo spoed mogelijk contact met u op.</h5>'.format(data.name),
  confirmButtonText: 'OK'
 
}).then((result) => {
  if (result.isConfirmed) {
     location.href= "/";
    
  } 
})


  }
        
        
        
        
      })

    }
    else {
      $("#accept_text").css("color","red")
      Swal.fire("",  "U moet alle voorwaarden accepteren", "error");

    
    }
    
});

$("#accept_text").click(function(){
    $('#myModal').modal('show');
})

$("#myModal").modal({
            backdrop: 'static',
            keyboard: false
        });



    $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1900 : ' + new Date().getFullYear(),
       maxDate: "-18Y",
       dateFormat: "dd/mm/yy"
    });


</script>
