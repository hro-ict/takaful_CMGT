@extends('master')
@section('content')

<div class="container mt-5 p-5">

</div>
@isset($message)
@if ($message=="success")
<h2 class="alert alert-success">Aanmelding succesvol</h2>
<h3>Geachte {{ $name }},</h3>
<h4>Bedankt voor uw aanmelding. U krijgt van ons binnenkort bevestigingsmail.
We nemen zo spoed mogelijk contact met u op voor verdere stappen. 
@else 
<h2 class="alert alert-danger">Aanmelding niet succesvol</h2>
<h3 class="alert alert-secondary">Er is iets misgegaan. Probeert u nog een keer.
Sorry voor het ongemak. 
</h3>
@endif
@endisset
</div>
@endsection