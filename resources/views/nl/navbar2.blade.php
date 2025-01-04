{{-- 
<div class="fixed-top lead">
<div class="text-center text-white  bg-info d-flex align-items-center justify-content-center pt-1" style="height:4rem">
<table class="badge badge bg-primary rounded-pill ">

<tr>
<td>Bel bij overlijden  </i> </td>
</tr>
<tr >
<td >06-2315648795</td>
</tr>
</table>
</div> --}}
<nav class="navbar fixed-top navbar-expand-lg  bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-white" href="javascript:void(0)"><img width="120px" src="{{asset('img\test.png')}}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto ">
        <li class="nav-item ">
          <a class="nav-link fw-bold text-white " href="/home">Hoofdpagina</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link fw-bold text-white" href="/kosten">Kosten</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link fw-bold text-white" href="/register">Inschrijven</a>
        </li>
                <li class="nav-item dropdown fw-bold text-white ">
          <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown">Over Ons</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/wie_zijn_we">Wie zijn we?</a></li>
            <li><a class="dropdown-item" href="/algemene_voorwaarden">Algemene Voorwaarden</a></li>
            <li><a class="dropdown-item" href="/privacy_beleid">Privacybeleid</a></li>
            <li><a class="dropdown-item" href="/bestuursleden">Bestuursleden</a>
            </li>
            
          </ul>
        </li>
         <li class="nav-item dropdown fw-bold text-white ">
            <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown">Info</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/veelgesteldevragen">Veelgestelde vragen</a></li>
              <li><a class="dropdown-item" href="/begraafplaatsen_in_nederland">Begraafplaatsen in Nederland</a></li>
           
            </ul>
              <li class="nav-item ">
            <a class="nav-link fw-bold text-white" href="/contact">Contact</a>
          </li>
          </li>
          
          
          
              <li class="nav-item dropdown fw-bold text-white lead">
          <a class="nav-link  fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown"><img height="30" src="{{asset('img/change_language.png')}}"></a>
          <ul class="dropdown-menu">
            <li>
                
             <a id="nl" class="nav-link fw-bold text-white change_language" href="/change_language/nl/{{Route::current()->getName()}}"><img height="40" src="{{asset('img/nl.png')}}"><span class="text-black ms-3">Nederlands</span></a>
            
            </li>
            <li>
               <a id="ar" class="nav-link fw-bold text-white  change_language " href="/change_language/ar/{{Route::current()->getName()}}"><img height="40" src="{{asset('img/arabic.png')}}"><span class="text-black ms-3">العربية</span></a>
                
            </li>
            </li>
            
          </ul>
        </li>
        
          
          
          
          
          
      </ul>
      <!--<form class="d-flex me-5">-->
      <!--  <a id="nl" class="nav-link fw-bold text-white change_language" href="/change_language/nl/{{Route::current()->getName()}}"><img height="40" src="{{asset('img/nl.png')}}"></a>-->
      <!--       <a id="ar" class="nav-link fw-bold text-white ms-3 change_language " href="/change_language/ar/{{Route::current()->getName()}}"><img height="40" src="{{asset('img/arabic.png')}}"></a>-->
      <!--</form>-->
    </div>
  </div>
</nav>

</div>

