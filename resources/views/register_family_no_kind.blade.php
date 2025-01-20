<form method="POST" action= "{{ route('save_register') }}">
            @csrf
            <input type="hidden" name="type" value="family_no_kids">
            <div class="form-outline mb-4">
              <input type="text"  id="name" name="name" class="form-control date" required/>
              <label class="form-label " for="name">Naam aanmelder</label>
            </div>
        
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="date"  id="birthday" name="birthday" class="form-control date" required/>
            <label class="form-label " for="birthday">Geboortedatum</label>
          </div>
        
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="name_of_partner" name="name_of_partner" class="form-control" required/>
            <label class="form-label" for="name_of_partner">Naam Echtgenote</label>
          </div>
        
        
          <div class="form-outline mb-4">
            <input type="date" id="birthday_of_partner" name="birthday_of_partner" class="form-control" required/>
            <label class="form-label" for="birthday_of_partner">Geboortedatum-Echtgenote</label>
          </div>
        
          
          <div class="form-outline mb-4">
            <select id="nationality" name="nationality" class="form-select" aria-label="Default select example">
            </select>
            <label class="form-label " for="nationality">Afkomst/Nationaliteit</label>
          </div>
        
          <div class="form-outline mb-4">
            <input type="text"  id="adress" name="adress" class="form-control " required/>
            <label class="form-label " for="adress">Adres</label>
          </div>
        
          <div class="form-outline mb-4">
            <input type="number" id="phone" name="phone" class="form-control" required/>
            <label class="form-label" for="phone">Telefoonnummer</label>
          </div>
        
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" required/>
            <label class="form-label" for="email">E-Mail</label>
          </div>
        
          <!-- Message input -->
          <div class="form-outline mb-4">
            <textarea class="form-control" id="message" name='message' rows="4"></textarea>
            <label class="form-label" for="message">Extra Informatie (Indien nodig)</label>
          </div>
          <input class="form-check-input" type="checkbox"  name="accept" id="accept">
          <label class="accept" for="accept">
            <span id="accept_text">Ik accepteer alle voorwaarden</span>
          </label>
        
          <!-- Submit button -->
          <button id="send" type="submit" class="btn btn-primary btn-block mb-4 mt-3 w-100">Verzenden</button>
        </form>
        
        <script>
      String.prototype.format = function() {
        var newStr = this, i = 0;
        while (/%s/.test(newStr))
            newStr = newStr.replace("%s", arguments[i++])
    
        return newStr;
    }     
         $('form').submit(function(event){
      event.preventDefault()
  
    if($("#accept").prop("checked")==true) {
     

      $.post("{{ route('save_register') }}", $( this ).serializeArray(), function(data){
        // console.log(data);

      })

    }
    else {
      $("#accept_text").css("color","red")
      Swal.fire("",  "U moet alle voorwaarden accepteren", "error");

    
    }
    
});

$.get("https://restcountries.com/v2/all", function(data){
  // data= JSON.parse(data)
  data.forEach(function(index){
   console.log(index.name)

   html= '<option value="%s"> %s</option>'.format(index.name,index.name)
   $("#nationality").append(html)
  })
})
            
        </script>
        