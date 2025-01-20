@extends('master')
@section('content')




<style>
 

  .styled-div {
    background-color: #f8f9fa; /* Açık gri arka plan */
    padding: 2rem;
    border-radius: .3rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15); /* Hafif gölge */
  }
  .styled-div h1 {
    margin-bottom: 1rem;
  }
</style>

<div class="container mt-5 pt-5 ">




  <div class="container mt-5">
    <div class="styled-div">
      <h1>Welkom bij Stichting Collectief Begrafenisfonds voor Egyptenaren</h1>
      <p>
        Bij Stichting Collectief Begrafenisfonds voor Egyptenaren staan we de moslimgemeenschap bij in een moeilijke periode. We bieden ondersteuning en begeleiding bij het organiseren van islamitische uitvaarten, van de eerste melding van overlijden tot de uiteindelijke begrafenis. Onze diensten omvatten onder andere:

        <ul>
          <li><span class="fw-bold">het regelen van begrafenissen:</span>
           <ul>
            <li><span class="">wassing (ghusl)</span></li>
            <li><span class="">de lijkwade (kafan)</span></li>
            <li><span class="">het gebed (janazah)</span></li>
            <li><span class="">transport en de begrafenis op een islamitische begraafplaats</span></li>
           </ul>
          
          </li>
          <li><span class="fw-bold">administratieve ondersteuning voor nabestaanden</span></li>
          <li><span class="fw-bold">financiële planning voor uitvaartkosten</span></li>
         
        </ul>
   

       Wij verzorgen islamitische begrafenissen voor moslims van Egyptische afkomst, met de keuze voor een begrafenis in Nederland of Egypte. Moslims met een andere achtergrond kunnen bij ons terecht voor een begrafenis op een islamitische begraafplaats in Nederland.
      </p>
    </div>
  </div>



<div class="row row-cols-1 row-cols-lg-2">

<div class="col mt-5">
   <div class="embed-responsive embed-responsive-16by9 " style="width:100%;height:100%">

   <video id="video" width="100%"  height="%100" class="embed-responsive-item" autoplay muted playsinline loop controls >
    <source src="{{ asset('img/video.mp4') }}" type="video/mp4">
</video>


         
          


</div> 
</div>

<div class="col mt-5">
  <img style="width:100%; height:100%" alt="image ayah van Koran" src="{{ asset('img/ayet.PNG') }}" alt="" class="img-fluid">  
</div>
    
</div>





</div>



<script>
  const video = document.getElementById('video');

  video.addEventListener('loadeddata', function() { 
    video.play().then(() => { 
      setTimeout(function() {
        video.pause();
      }, 700); 
    }).catch(error => { 
      console.error("Video oynatılamadı:", error);
    });
  });

  video.addEventListener('ended', function() {
      
      console.log("Video bitti.");
  });
</script>



@endsection