<div class="content">
            <form method="POST" action= "{{ route('save_register') }}" class= "animate__animated animate__fadeInDown animate__delay-1s">
               @csrf
             
            
            <div class="persoonlijke_gegevens">
           <h3> <span class="badge bg-primary text-center">Persoonlijke gegevens</span></h3>
           
             <div class="form-outline mb-4">
                   <label class="form-label fw-bold " for="Naam_aanmelder">Voor- en achternaam aanmelder</label>
               <input type="text"  id="Naam_aanmelder" name="Naam_aanmelder" class="form-control date" required/>
             
             </div>
           
             <!-- Text input -->
             <div class="form-outline mb-4">
                 <label class="form-label fw-bold " for="Geboortedatum_aanmelder">Geboortedatum</label>
               <input type="text"  id="Geboortedatum_aanmelder" name="Geboortedatum_van_aanmelder" class="form-control datepicker" required/>
           
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
                 <label class="form-label fw-bold" for="Naam_van_echthgenote">Naam Echtgenote</label>
               <input type="text" id="Naam_van_echthgenote" name="Naam_van_echthgenote" class="form-control " required/>
           
             </div>
           
           
             <div class="form-outline mb-4">
                  <label class="form-label fw-bold" for="Geboortedatum_van_echthgenote">Geboortedatum-Echtgenote</label>
               <input type="text" id="Geboortedatum_van_echtgenote" name="Geboortedatum_van_echtgenote" class="form-control datepicker" required/>
            
             </div>
             <div class="add_kids">
                 
             </div>
             <button id="add_kids" type="button" class="btn btn-danger w-100 mt-3 mb-3">Voeg een kind toe</button>
             
             
             <div class="form-outline mb-4">
                  <label class="form-label fw-bold " for="Nationaliteit">Afkomst/Nationaliteit</label>
               <select id="Nationaliteit" name="Nationaliteit"  class="form-select fw-bold" aria-label="Default select example">
               </select>
              
             </div>
           
           {{-- test --}}
           
           
           
           </div> 
           <!--persoonlijke_gegevens-->
           
           <!--<div class="d-flex border border-3  py-3">-->
           <!--<div class="col-6"><span class="fw-bold">Keuze begraafplaats</span></div>-->
           
           <!--<div class="col-6">-->
           <!--     <input class="form-check-input" name="Keuze_begraafplaats" type="radio" id="inlineCheckbox2" value="Nederland">-->
           <!--  <label class="form-check-label" for="inlineCheckbox1"><span class="fw-bold">Nederland</span></label>-->
           <!--   <input class="form-check-input" name="Keuze_begraafplaats" type="radio" id="inlineCheckbox2" value="Egypte">-->
           <!--  <label class="form-check-label" for="inlineCheckbox2"><span class="fw-bold">Egypte</span></label>-->
           <!--</div>-->
           
               
           </div>
           
           {{-- test --}}
           
           
           <!--Uitvaartverzekering-->
           
           <!--<div class="d-flex border border-3  py-3">-->
           <!--<div class="col-6"><span class="fw-bold">Heeft u uitvaartverzekering?</span></div>-->
           
           <!--<div class="col-6">-->
           <!--     <input class="form-check-input" name="Heeft_uitvaartverzekering" type="radio" id="inlineCheckbox2" value="JA">-->
           <!--  <label class="form-check-label" for="inlineCheckbox1"><span class="fw-bold">JA</span></label>-->
           <!--   <input class="form-check-input" name="Heeft_uitvaartverzekering" type="radio" id="inlineCheckbox2" value="NEE">-->
           <!--  <label class="form-check-label" for="inlineCheckbox2"><span class="fw-bold">NEE</span></label>-->
           <!--</div>-->
           
               
           <!--</div>-->
           
           
           
           <!--keuze-->
           <!--<div id="gegevens_doorgeven"  class=" d-flex border border-3  py-3 d-none">-->
           <!--<div class="col-6"><span class="fw-bold">Wilt u de gegevens van de verzekeringsmaatschappij doorgeven aan TAKAFUL</span></div>-->
           
           <!--<div class="col-6">-->
           <!--     <input class="form-check-input" name="Doorgeven_van_de_gegevens" type="radio" id="inlineCheckbox2" value="JA">-->
           <!--  <label class="form-check-label" for="inlineCheckbox1"><span class="fw-bold">JA</span></label>-->
           <!--   <input class="form-check-input" name="Doorgeven_van_de_gegevens" type="radio" id="inlineCheckbox2" value="NEE">-->
           <!--  <label class="form-check-label" for="inlineCheckbox2"><span class="fw-bold">NEE</span></label>-->
           <!--</div>-->
           
               
           <!--</div>-->
           
           
           
           <!-- <div id="gegevens_doorgeven_verzekeringsmaatschappij" class="form-outline mt-3 mb-4 d-none">-->
           <!--      <label class="form-label fw-bold " for="Adress">Naam van verzekeringsmaatschappij</label>-->
           <!--    <input type="text"  id="Adress" name="Naam_van_verzekeringsmaatschappij" class="form-control " />-->
           
           <!--  </div>-->
           
           
           <!--Uitvaartverzekering-->
           
           
           
            <h3> <span class="badge bg-info mt-5">Contactgegevens</span></h3>
           <div class="contact_gegevens">
              
             <div class="form-outline mb-4">
                 <label class="form-label fw-bold " for="Adress">Adres</label>
               <input type="text"  id="Adress" name="Adress" class="form-control " required/>
           
             </div>
           
             <div class="form-outline mb-4">
                  <label class="form-label fw-bold" for="Telefoonnummer">Telefoonnummer</label>
               <input type="number" id="Telefoonnummer" name="Telefoonnummer" class="form-control" required/>
           
             </div>
           
             <div class="form-outline mb-4">
               <label class="form-label fw-bold" for="Email">E-Mail</label>
               <input type="email" id="Email" name="Email" class="form-control" required/>
              
             </div>
           
           
           </div>
           <!--contact_gegevens-->
           
           
           <!--keuze begraafplaats-->
            <h3> <span class="badge bg-danger mt-2">Keuze begraafplaats</span></h3>
           <div class="d-flex border border-3  py-3">
           <div class="col-6"><span class="fw-bold">Keuze begraafplaats</span></div>
           
           <div class="col-6">
                <input class="form-check-input" name="Keuze_begraafplaats" type="radio" id="inlineCheckbox2" value="Nederland">
             <label class="form-check-label" for="inlineCheckbox1"><span class="fw-bold">Nederland</span></label>
              <input class="form-check-input" name="Keuze_begraafplaats" type="radio" id="inlineCheckbox2" value="Egypte">
             <label class="form-check-label" for="inlineCheckbox2"><span class="fw-bold">Egypte</span></label>
           </div>
           
               
           </div>
           
           
           
           <!--keuze begraafplaats-->
           
           
           
           
           <!--Uitvaartverzekering-->
           
           <h3> <span class="badge bg-success mt-2">Uitvaartverzekering gegevens</span></h3>
           
           <div class="d-flex   py-3">
           <div class="col-6"><span class="fw-bold">Heeft u uitvaartverzekering?</span></div>
           
           <div class="col-6">
                <input class="form-check-input" name="Heeft_uitvaartverzekering" type="radio" id="inlineCheckbox2" value="JA">
             <label class="form-check-label" for="inlineCheckbox1"><span class="fw-bold">JA</span></label>
              <input class="form-check-input" name="Heeft_uitvaartverzekering" type="radio" id="inlineCheckbox2" value="NEE">
             <label class="form-check-label" for="inlineCheckbox2"><span class="fw-bold">NEE</span></label>
           </div>
           
               
           </div>
           
           
           
           <!--keuze-->
           <div id="gegevens_doorgeven"  class=" d-flex  py-3 d-none">
           <div class="col-6"><span class="fw-bold">Wilt u de gegevens van de verzekeringsmaatschappij doorgeven aan TAKAFUL</span></div>
           
           <div class="col-6">
                <input class="form-check-input" name="Doorgeven_van_de_gegevens" type="radio" id="inlineCheckbox2" value="JA">
             <label class="form-check-label" for="inlineCheckbox1"><span class="fw-bold">JA</span></label>
              <input class="form-check-input" name="Doorgeven_van_de_gegevens" type="radio" id="inlineCheckbox2" value="NEE">
             <label class="form-check-label" for="inlineCheckbox2"><span class="fw-bold">NEE</span></label>
           </div>
           
               
           </div>
           
           
           
           <div class="gegevens_van_verzekeringsmaatschappij d-none">
           
            <div id="" class="form-outline mt-3 mb-4 ">
                 <label class="form-label fw-bold " for="Adress">Naam van verzekeringsmaatschappij</label>
               <input type="text"  id="Adress" name="Naam_van_verzekeringsmaatschappij" class="form-control " />
           
             </div>
           
           
            <div id="gegevens_doorgeven_verzekeringsmaatschappij" class="form-outline mt-3 mb-4">
                 <label class="form-label fw-bold " for="Adres_van_verzekeringsmaatschappij">Adres van verzekeringsmaatschappij</label>
               <input type="text"  id="Adres_van_verzekeringsmaatschappij" name="Adres_van_verzekeringsmaatschappij" class="form-control " />
           
             </div>
           
           
           
           
            <div id="" class="form-outline mt-3 mb-4 ">
                 <label class="form-label fw-bold " for="Telefoonnummer_van_verzekeringsmaatschappij">Telefoonnummer van verzekeringsmaatschappij</label>
               <input type="text"  id="Telefoonnummer_van_verzekeringsmaatschappij" name="Telefoonnummer_van_verzekeringsmaatschappij" class="form-control " />
           
             </div>
            
            </div>
           <!--Uitvaartverzekering-->
           
           
           
           
           
           
           
             <!-- Message input -->
             <!--<div class="form-outline mb-4">-->
             <!--     <label class="form-label fw-bold" for="Message">Message</label>-->
             <!--  <textarea class="form-control" id="Message" name='Message' rows="4"></textarea>-->
            <hr >
             <!--</div>-->
             <input style="width:30px; height:30px" class="form-check-input border border-5 border-danger" type="checkbox"  name="Accept_alle_voorwaarden" id="accept" >
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
                   
                   <h3 class="mt-5 fw-bold text-center">Algemene voorwaarden</h3>
           
                   <ul >
                       <li>Deze algemene voorwaarden zijn van toepassing op de overeenkomst die tussen de
                           uitvaartverzorger  en de opdrachtgever wordt gesloten betreffende de verzorging van een
                           uitvaart of repatriëring.</li>
                       <li>
                           De algemene voorwaarden zijn voor elke opdracht van toepassing, ook indien een
                   vervangende opdrachtgever voor dezelfde uitvaart optreedt.
                       </li>
                   </ul>
                   <h3 class="fw-bold text-center">Overeenkomst</h3>
                   
                   <ul>
                       <li>
                           De overeenkomst wordt bij voorkeur schriftelijk gesloten. Dagtekening en ondertekening
                   door beide partijen van het zogeheten opdrachtformulier is daarvoor voldoende. Indien de
                   debiteur een ander is dan de opdrachtgever dienen beiden het opdrachtformulier te
                   ondertekenen.
                       </li>
                   <li>
                       Het ontbreken van een schriftelijke overeenkomst laat onverlet de bevoegdheid van partijen
                   om aan te tonen dat op andere wijze een overeenkomst – met gelijktijdige opgave van de
                   inhoud van die overeenkomst – tot stand is gekomen.
                   </li>
                   <li>
                       Een vooraf afgegeven offerte is geldig voor het jaar waarin het is afgegeven.
                   </li>
                   </ul>
                   
                   
                   <h3 class="fw-bold text-center">Tijdstip van levering</h3>
                   
                   <ul>
                       <li>
                           De levering van zaken en/of diensten vindt plaats op dagen en tijdstippen als
                   overeenkomsten tussen opdrachtgever en de uitvaartverzorger . De dag en het uur van de
                   uitvaart wordt overeengekomen onder voorbehoud van goedkeuring door de beheerder van
                   de desbetreffende begraafplaats, crematorium c.q. luchtvaartmaatschappij.
                       </li>
                   <li>
                       Wijziging van de aanvankelijk overeengekomen dag en het uur van de uitvaart kan slechts
                   plaatsvinden binnen 24 uur na dagtekening van het opdrachtformulier mits met instemming
                   van de opdrachtgever, de uitvaartverzorger  en beheerder voorgenoemd.
                   </li>
                   </ul>
                   
                   <h3 class="fw-bold text-center">Opdrachtformulier</h3>
                   
                   <ul>
                       <li>
                           De overeenkomst kan in onderling overleg en met wederzijds goedvinden worden gewijzigd,
                   doch niet later dan 48 uur voor het overeengekomen tijdstip van de uitvaart. De financiële
                   gevolgen, zowel voordelig als nadelig, van aanvaarde wijzigingen worden gespecificeerd en
                   met de opdrachtgever verrekend.
                       </li>
                   
                       <li>
                           In het geval dat het lijk naar Egypte wordt getransporteerd, is en geldige identiteitskaart
                   vereist, rekening houdend met het feit dat elk land haar eigen voorwaarden heeft.
                       </li>
                   </ul>
                   
                   <h3 class="fw-bold text-center">Tarieven</h3>
                   
                   <ul>
                       <li>
                           Elk jaar wordt de abonnementswaarde herzien op basis van de inflatie. Rekening houdend
                   met de stijging van de prijzen van het vervoeren van het lichaam naar het moederland.
                       </li>
                   </ul>
                   
                   <h3 class="fw-bold text-center">Personalia</h3>
                   
                   <ul>
                       <li>
                           De vermelde personalia van de overledene worden in overeenstemming met de
                   opdrachtgever gebruikt voor de aangifte van het overlijden bij de ambtenaar van de
                   burgerlijke stand. De aangifte van het overlijden bij de ambtenaar van de burgerlijke stand
                   wordt gedaan door de uitvaartverzorger, tenzij anders is overeengekomen.
                       </li>
                       <li>
                           De opdrachtgever draagt er zorg voor dat alle gegevens, waarvan de uitvaartverzorger
                   aangeeft dat deze noodzakelijk zijn of waarvan de opdrachtgever redelijkerwijs behoort te
                   begrijpen dat deze noodzakelijk zijn voor het uitvoeren van de overeenkomst, tijdig aan de
                   uitvaartverzorger worden verstrekt.
                       </li>
                   
                       <li>
                           Bij kennisneming door de opdrachtgever van een onjuiste vermelding in de akte van
                   overlijden, dient deze de uitvaartverzorger daaromtrent onverwijld te verwittigen.
                       </li>
                       <li>
                           Indien sprake is van een onjuiste vermelding in de akte van overlijden, zal de
                   uitvaartverzorger  bevorderen, dat wijziging plaatsvindt. Kan de onjuiste vermelding aan de
                   uitvaartverzorger  worden toegerekend, dan is hij voor betaling van de kosten van wijziging
                   van de akte aansprakelijk. In alle gevallen komen de kosten van wijziging voor rekening van
                   de opdrachtgever, tenzij een derde aansprakelijk is.
                       </li>
                   </ul>
                   
                   
                   <h3 class="fw-bold text-center">Aansprakelijkheid</h3>
                   
                   <ul>
                       <li>
                           De uitvaartverzorger zal de overeenkomst naar beste inzicht en vermogen in
                   overeenstemming met de eisen van goed vakmanschap uitvoeren en in overeenstemming
                   met de opdracht.
                       </li>
                   </ul>
                   
                   <h3 class="fw-bold text-center">Oponthoud</h3>
                   
                   <ul>
                       <li>
                           Oponthoud en vertraging bij de uitvoering van de opdracht zijn uitsluitend voor rekening van
                   de uitvaartverzorger indien deze hem of zijn toeleveranciers redelijkerwijs kunnen worden
                   toegerekend. Zij kunnen hem niet worden toegerekend indien zij niet te wijten zijn aan
                   schuld, noch krachtens wet, rechtshandeling of in het rechtsverkeer geldende opvatting voor
                   haar rekening dienen te komen.
                       </li>
                   </ul>
                   
                   <h3 class="fw-bold text-center">Klachten</h3>
                   
                   <ul>
                       <li>
                           Klachten over de uitvaartverzorging, waaraan de opdrachtgever gevolgen wil verbinden,
                   moeten volledig en duidelijk omschreven door de opdrachtgever (of diens gemachtigde)
                   binnen 21 dagen na de datum van de uitvaart bij de uitvaartverzorger ingediend zijn. Niet
                   tijdig indienen van een klacht kan tot gevolg hebben, dat de opdrachtgever zijn rechten ter
                   zake verliest.
                       </li>
                   
                       <li>
                           Klachten over de uitvaartnota moeten binnen 14 dagen na ontvangst van de nota schriftelijk
                   bij de uitvaartverzorger ingediend worden.
                       </li>
                   
                       <li>
                           De uitvaartverzorger zal binnen 14 dagen na ontvangst van de klacht trachten met de
                   opdrachtgever tot overeenstemming te komen over de afwikkeling van de klacht.
                       </li>
                   </ul>
                   
                   <h3 class="fw-bold text-center">Partiele Nietigheid</h3>
                   
                   <ul>
                       <li>
                           Indien één of meer bepalingen uit deze overeenkomst met opdrachtgever niet of niet geheel
                   rechtsgeldig zijn, blijven de overige bepalingen volledig in stand. in -plaats van de ongeldige
                   bepalingen geldt een passende regeling, die de bedoeling van partijen en het door hen
                   nagestreefde economisch resultaat op juridische effectieve wijze zo dicht mogelijk benadert.
                       </li>
                   </ul>
                   
                   <h3 class="fw-bold text-center">Plaats van nakoming, toepasselijk recht, bevoegde rechter</h3>
                   
                   <ul>
                       <li>
                           De vestigingsplaats van de uitvaartverzorger is de plaats waar opdrachtgever aan zijn
                   verplichtingen jegens de uitvaartverzorger moet voldoen, tenzij dwingende bepalingen zich
                   daartegen verzetten.
                       </li>
                   
                       <li>
                           Op alle aanbiedingen en overeenkomsten van de uitvaartverzorger is uitsluitend het
                   Nederlandse recht van toepassing.
                       </li>
                       <li>
                           Alle geschillen, die ontstaan naar aanleiding van de tussen opdrachtgever en de
                   uitvaartverzorger gesloten overeenkomst dan wel van nadere overeenkomsten, die daarvan
                   het gevolg mochten zijn, zullen worden beslecht door de daartoe bevoegde rechter.
                       </li>
                   </ul>
           
           
           
           
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
              $("#Nationaliteit").append(html)
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
                     html= '<div class="form-outline mb-4"><label clas="form-label" for="form6Example4"><b>Naam Kind %s</b></label><input type="text" name="Naam_kind_%s"id="form6Example4" class="form-control" /></div><div class="form-outline mb-4"><label class="form-label fw-bold" for="geboortedatum_kind_%s">Geboortedatum Kind %s</label><input type="text" id="birthday_of_partner" name="Geboortedatum kind %s" class="form-control datepicker" required/></div>'.format(count_kids, count_kids, count_kids, count_kids, count_kids)
                   
                   setTimeout(() => {
                     $( ".datepicker" ).datepicker({
                 changeMonth: true,
                 changeYear: true,
                 yearRange: '1900 : ' + new Date().getFullYear(),
                  maxDate: "+0",
                  dateFormat: "dd/mm/yy"
               }); 
                   }, 1000);
           
                  
           
           
           
           
                   $(".add_kids").append(html);
                   
               })
           
               $('form').submit(function(event){
                   console.log("submit");
                 event.preventDefault()
             
               if($("#accept").prop("checked")==true) {
                   console.log("accept: true");
                
           
                 $.post("{{ route('save_register_family') }}", $( this ).serializeArray(), function(data){
                    console.log(data);
           //betaling
           Swal.fire({
             title: "Totaal bedrag: "+data.amount+" Euro",
             html:  data.desc,
             showCancelButton: true,
             allowOutsideClick: false,
             confirmButtonText: 'KLIK HIER OM HET BEDRAG TE BETALEN'
            
           }).then((result) => {
             if (result.isConfirmed) {
               location.href= "/mollie-payment/"+data.amount+".00/"+data.name
             } else if (result.isDenied) {
               location.href="/"
             }
           })
                    
                    
                    
                    
                    
                    
                    
                    
                    
                   
           //          if (data.message=="success") {
                        
                      
                
                        
           //     Swal.fire({
           //   title: '<h3>عزيزي <span class="text-danger">%s,</span> </h3><h5>شكرا لطلبك. سوف تتلقى رسالة تأكيد بالبريد الإلكتروني منا قريبًا. سوف نتصل بك في أقرب وقت ممكن لمزيد من الخطوات</h5>'.format(data.name),
           //   confirmButtonText: 'OK'
            
           // }).then((result) => {
           //   if (result.isConfirmed) {
           //      location.href= "/";
               
           //   } 
           // })
           
           
           //   }
                   
                   
                   
                   
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
                   $(".gegevens_van_verzekeringsmaatschappij").removeClass( "d-none" )
               }
               if (this.value == 'NEE') {
                    $(".gegevens_van_verzekeringsmaatschappij").addClass( "d-none" );
               }
           });
           
           </script>
           