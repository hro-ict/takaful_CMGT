@extends('master')
@section('content')


<style>
    @media only screen and (max-width: 576px) {
        
        .text-white{
            font-size:1rem !important;
        }
        
    }
</style>


<div class="container mt-3 pt-4 py-0 p-md-5 ">
    
     <div style="background-color:#47cc8e; margin-top:6rem;" class=" p-2 p-sm-5  text-white rounded animate__animated animate__fadeInUp animate__delay-1s">
    <h3 class="fw-bold">Wie Zijn we?</h3> 
    <p>Een non-profitorganisatie die wordt beheerd en
        gecontroleerd door een groep Egyptische
        vrijwilligers met geloofwaardigheid, ervaring en een
        goede reputatie.
  </div>
    
    
       <div style="background-color:#cc9b47" class="mt-3 p-2 p-sm-5 text-white rounded animate__animated animate__fadeInUp animate__delay-2s ">
    <h3 class="fw-bold">Het Doel</h3> 
    <p> Het doel is om zoveel mogelijk Egyptenaren de
            kans te geven om op een waardige manier in
            overeenstemming met de sharia en tegen zo laag
            mogelijke kosten hun laatste rustplaats in
            Nederland of Egypte veilig te stellen. (De stichting
            verwelkomt ook deelnemers met islamitische
            achtergrond die in Nederland   begraven willen worden).</p>
            <p>
            <strong>Begrafenis in Nederland:</strong> Alle benodigde
            overlijdensdocumenten ophalen, dan transporteren om te
            wassen en te bidden en dan begraven op de
            begraafplaats. </p>
            <p><strong>Begrafenis in Egypte:</strong> Voltooiing van alle
            noodzakelijke consulaire procedures voor het verzenden
            van het lichaam, wassen, bidden en transporteren van het
            lichaam naar Caïro.</p> 
  </div>


         <div style="background-color:#47a4cc;" class="mt-3 p-2 p-sm-5  text-white rounded animate__animated animate__fadeInUp animate__delay-3s ">
    <h3 class="fw-bold">Voordelen van het fonds</h3> 
    <span class="fw-bold">1:</span> De enige instelling die haar budget aan haar
leden voorlegt aangezien zij de eigenaren zijn van
het fondsproject en het financiële saldo van de
instelling (Lid): Hij/zij is degene die de jaarlijkse
Takaful eigen bijdrage heeft betaald tot de datum
van overlijden)</p>
<p class= "animate__animated animate__fadeInUp animate__delay-3s">
            <span class="fw-bold">2:</span> In het geval dat er een jaarlijks overschot wordt
behaald, zal dit ten goede komen aan de
deelnemende leden, door graven te kopen die zijn
toegewezen aan degenen die ze willen kopen tegen
kostprijs.

</p>
  </div>


</div>

<script>
    width= $( window ).width();
    if (width>576) {
        
    }
</script>


@endsection