
<div class="container">
          
<nav class="navbar navbar-expand-sm bg-danger  justify-content-center fixed-top  ">
  <div class="container-fluid ">
    <a class="navbar-brand fw-bold text-white" href="javascript:void(0)"><img width="120px" src="{{asset('img\test.png')}}"></a>
    <div class="d-flex flex-column d-sm-none">
    <p class="navbar-brand fw-bold text-white " href="javascript:void(0)"><small>Bel bij overlijden</small></p>
    <p class="align-self-center align-top "><small>06-123456789</small></p>
  </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold text-white " href="/home">Hoofdpagina</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-white" href="/kosten">Kosten</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-white" href="/register">Inschrijven</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown">Over Ons</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/wie_zijn_we">Wie zijn we?</a></li>
            <li><a class="dropdown-item" href="/algemene_voorwaarden">Algemene Voorwaarden</a></li>
            <li><a class="dropdown-item" href="/privacy_beleid">Privacybeleid</a></li>
            <li><a class="dropdown-item" href="/bestuursleden">Bestuursleden</a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown">Info</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/veelgesteldevragen">Veelgestelde vragen</a></li>
              <li><a class="dropdown-item" href="/begraafplaatsen_in_nederland">Begraafplaatsen in Nederland</a></li>
              
              
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link fw-bold text-white" href="/contact">Contact</a>
          </li> 
        
       
          <li class="nav-item ps-sm-5 ms-sm-5">
            <div class="d-flex px-sm-5 ms-sm-5 ">
            <a id="nl" class="nav-link fw-bold text-white change_language" href="/change_language/nl/{{Route::current()->getName()}}"><img height="40" src="{{asset('img/nl.png')}}"></a>
             <a id="ar" class="nav-link fw-bold text-white ms-3 change_language " href="/change_language/ar/{{Route::current()->getName()}}"><img height="40" src="{{asset('img/arabic.png')}}"></a>
             <a class="navbar-brand fw-bold text-white d-none d-sm-block ms-2 float-end" href="javascript:void(0)">Bel bij overlijden</a>
            </div>
          </li> 
        



      </ul>
    </div>
    

    
  </div>
</nav>

<div class="container mt-5 py-5">
 <div class="row justify-content-center">
            <div class="col-5">
<img src="image1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-5">
<img src="image2.jpg" alt="" class="img-fluid">                    
            </div>
 </div>
</div>



