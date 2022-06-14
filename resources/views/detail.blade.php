    @extends('layouts.default')
    @section('pageTitle', 'Dettaglio casa')
    @section('mainContent')
    <h1 class="text-center">
        Ciao, questi sono i dettagli della casa {{$home->title}}
         <i class="fa-solid fa-home"></i>
    </h1>
    @endsection
