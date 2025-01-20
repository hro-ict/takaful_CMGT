 <div class="content">
 <form method="POST" action= "{{ route('save_register') }}">
    @csrf
  

  <div class="form-outline mb-4">
        <label class="form-label fw-bold " for="name">الاسم الأول واللقب</label>
    <input type="text"  id="name" name="Naam_aanmelder" class="form-control date" required/>
  
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
      <label class="form-label fw-bold " for="birthday">تاريخ الولادة</label>
    <input type="text"  id="birthday" name="Geboortedatum_van_aanmelder" class="form-control datepicker" required/>
    
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
      <label class="form-label fw-bold" for="name_of_partner">اسم الزوجة</label>
    <input type="text" id="name_of_partner" name="Naam_van_echtgenote" class="form-control " required/>

  </div>


  <div class="form-outline mb-4">
       <label class="form-label fw-bold" for="birthday_of_partner">تاريخ الميلاد-الزوجة</label>
    <input type="text" id="birthday_of_partner" name="Geboortedatum_van_echtgenote" class="form-control datepicker" required/>
 
  </div>


  
  
  <div class="form-outline mb-4">
       <label class="form-label fw-bold " for="nationality">الأصل / الجنسية</label>
    <select id="nationality" name="Nationaliteit"  class="form-select fw-bold" aria-label="Default select example">
    </select>
   
  </div>




<div class="d-flex border border-3  py-3">
<div class="col-6"><span class="fw-bold">احب أن یكون الدفن في </span></div>

<div class="col-6">
     <input class="form-check-input" name="Keuze_begraafplaats" type="radio" id="inlineCheckbox2" value="Nederland">
  <label class="form-check-label" for="inlineCheckbox1"><span class="fw-bold">ھولندا</span></label>
   <input class="form-check-input" name="Keuze_begraafplaats" type="radio" id="inlineCheckbox2" value="Egypte">
  <label class="form-check-label" for="inlineCheckbox2"><span class="fw-bold">مصر</span></label>
</div>

    
</div>
{{-- test --}}







<!--Uitvaartverzekering-->

<div class="d-flex border border-3  py-3">
<div class="col-6"><span class="fw-bold">ھل لدیك تأمین للدفن</span></div>

<div class="col-6">
     <input class="form-check-input" name="Heeft_uitvaartverzekering" type="radio" id="inlineCheckbox2" value="JA">
  <label class="form-check-label" for="inlineCheckbox1"><span class="fw-bold">نعم</span></label>
   <input class="form-check-input" name="Heeft_uitvaartverzekering" type="radio" id="inlineCheckbox2" value="NEE">
  <label class="form-check-label" for="inlineCheckbox2"><span class="fw-bold">لا</span></label>
</div>

    
</div>



<!--keuze-->
<div id="gegevens_doorgeven"  class=" d-flex border border-3  py-3 d-none">
<div class="col-6"><span class="fw-bold">ھل ترغب في إعطاء معلومات شركة التأمین لصندوق التكافل الاجتماعي?</span></div>

<div class="col-6">
     <input class="form-check-input" name="Doorgeven_van_de_gegevens" type="radio" id="inlineCheckbox2" value="JA">
  <label class="form-check-label" for="inlineCheckbox1"><span class="fw-bold">نعم</span></label>
   <input class="form-check-input" name="Doorgeven_van_de_gegevens" type="radio" id="inlineCheckbox2" value="NEE">
  <label class="form-check-label" for="inlineCheckbox2"><span class="fw-bold">لا</span></label>
</div>

    
</div>



 <div id="gegevens_doorgeven_verzekeringsmaatschappij" class="form-outline mt-3 mb-4 d-none">
      <label class="form-label fw-bold " for="Adress">اسم شركة التأمين</label>
    <input type="text"  id="Adress" name="Naam_van_verzekeringsmaatschappij" class="form-control " />

  </div>


<!--Uitvaartverzekering-->





{{-- test --}}

  <div class="form-outline mb-4">
      <label class="form-label fw-bold " for="adress">عنوان</label>
    <input type="text"  id="adress" name="Adres" class="form-control " required/>

  </div>

  <div class="form-outline mb-4">
       <label class="form-label fw-bold" for="phone">رقم الهاتف</label>
    <input type="number" id="phone" name="Telefoonnummer" class="form-control" required/>

  </div>

  <div class="form-outline mb-4">
    <label class="form-label fw-bold" for="email">البريد الإلكتروني</label>
    <input type="email" id="email" name="Email" class="form-control" required/>
   
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
       <label class="form-label fw-bold" for="email">رسالة</label>
    <textarea class="form-control" id="message" name='Message' rows="4"></textarea>
 
  </div>
  <input style="width:30px; height:30px" class="form-check-input border border-5 border-danger" type="checkbox"  name="Accept_alle_voorwaarden" id="accept" >
  <!--<label class="accept" for="accept">-->
    <span class="h6 gy-3" style="cursor:grab" id="accept_text">أقبل <u> <strong>جميع الشروط</strong></u></span>
  <!--</label>-->

  <!-- Submit button -->
  <button id="send" type="submit" class="btn btn-primary btn-block mb-4 mt-3 w-100">إرسال</button>
</form>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">الأحكام والشروط</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور بالسعادة، ولكن بفضل هؤلاء الأشخاص الذين لا يدركون بأن السعادة لا بد أن نستشعرها بصورة أكثر عقلانية ومنطقية فيعرضهم هذا لمواجهة الظروف الأليمة، وأكرر بأنه لا يوجد من يرغب في الحب ونيل المنال ويتلذذ بالآلام، الألم هو الألم ولكن نتيجة لظروف ما قد تكمن السعاده فيما نتحمله من كد وأسي.

و سأعرض مثال حي لهذا، من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة التي لا تشوبها عواقب أليمة أو آخر أراد أن يتجنب الألم الذي ربما تنجم عنه بعض المتعة ؟ 
علي الجانب الآخر نشجب ونستنكر هؤلاء الرجال المفتونون بنشوة اللحظة الهائمون في رغباتهم فلا يدركون ما يعقبها من الألم والأسي المحتم، واللوم كذلك يشمل هؤلاء الذين أخفقوا في واجباتهم نتيجة لضعف إرادتهم فيتساوي مع هؤلاء الذين يتجنبون وينأون عن تحمل الكدح والألم .
	       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">أغلق</button>
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

 
    // $("#add_kids").click(function(){
    //     count_kids+=1
    //     html= '<div class="form-outline mb-4"><label clas="form-label fw-bold" for="form6Example4">اسم الطفل %s</label><input type="text" name="kids_%s"id="form6Example4" class="form-control" /></div> <div class="form-outline mb-4"><label class="form-label fw-bold" for="birthday_of_kids_%s">تاريخ الميلا للولد %s </label><input type="text" id="birthday_of_kids_%s" name="birthday_of_kids_%s" class="form-control  datepicker" required/></div>  '.format(count_kids, count_kids, count_kids, count_kids,count_kids, count_kids)
        
    //     setTimeout(() => {
    //       $( ".datepicker" ).datepicker({
    //   changeMonth: true,
    //   changeYear: true,
    //   yearRange: '1900 : ' + new Date().getFullYear(),
    //   maxDate: "+0",
    //   dateFormat: "dd/mm/yy"
    // }); 
    //     }, 1000);

       




    //     $(".add_kids").append(html);
        
    // })

    $('form').submit(function(event){
      event.preventDefault()
  
    if($("#accept").prop("checked")==true) {
     

      $.post("{{ route('save_register_family') }}", $( this ).serializeArray(), function(data){
         console.log(data);
//betaling
Swal.fire({
  title: "Totaal bedrag: "+data.amount+" Euro",
  html: data.desc,
  showCancelButton: true,
  confirmButtonText: 'KLIK HIER OM HET BEDRAG TE BETALEN'
 
}).then((result) => {
  if (result.isConfirmed) {
    location.href= "/mollie-payment/"+data.amount+".00/"+data.name
  } else if (result.isDenied) {
    location.href="/"
  }
})
         
         
         
         
         
         
         
         
         
        
         if (data.message=="success") {
             
           
     
             
    Swal.fire({
  title: '<h3>عزيزي <span class="text-danger">%s,</span> </h3><h5>شكرا لطلبك. سوف تتلقى رسالة تأكيد بالبريد الإلكتروني منا قريبًا. سوف نتصل بك في أقرب وقت ممكن لمزيد من الخطوات</h5>'.format(data.name),
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
      Swal.fire("",  "يجب عليك قبول جميع الشروط", "error");

    
    }
    
});

$("#accept_text").click(function(){
    $('#myModal').modal('show');
})

$("#myModal").modal({
            backdrop: 'static',
            keyboard: false
        });

$( document ).ready(function() {
  $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1900 : ' + new Date().getFullYear(),
       maxDate: "-18Y",
       dateFormat: "dd/mm/yy"
    });  
});


$('input[type=radio][name=Heeft_uitvaartverzekering]').change(function() {
    if (this.value == 'JA') {
        console.log("JA")
        $("#gegevens_doorgeven").removeClass( "d-none" )
    }
    if (this.value == 'NEE') {
         $("#gegevens_doorgeven").addClass( "d-none" );
    }
});

$('input[type=radio][name=Doorgeven_van_de_gegevens]').change(function() {
    console.log("hello");
    if (this.value == 'JA') {
        console.log("JA")
        $("#gegevens_doorgeven_verzekeringsmaatschappij").removeClass( "d-none" )
    }
    if (this.value == 'NEE') {
         $("#gegevens_doorgeven_verzekeringsmaatschappij").addClass( "d-none" );
    }
});

</script>
