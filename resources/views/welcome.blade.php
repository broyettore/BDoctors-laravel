@extends('layouts.app')

@section('content')
<div class="container-fluid container_welcome" >
    <div class="row justify-content-center container_welcome_top">
        <div class="col-md-6">
            <h1 class="text-center">Benvenuto su BDoctors</h1>
            <h3 class="text-center">Registrati e scopri tutti i vantaggi di BDoctors.</h3>
            <p class="text-center px-2">La nostra piattaforma ti offre la possibilità di gestire facilmente i tuoi dati professionali in modo sicuro e conveniente. Potrai aggiornare il tuo profilo professionale con informazioni pertinenti, come il titolo di studio, le specializzazioni, gli orari di lavoro e il contatto diretto.</p>
            <p class="text-center px-2">Unisciti a noi e semplifica la gestione della tua professione, inserendo i tuoi dati, gestendo le prenotazioni e ricevendo pagamenti in modo facile e sicuro!</p>
        </div>
        <div class="col-md-6 welcome_banner">
        </div>
    </div>
    <div class="row justify-content-center container_welcome_main">
        <div class="col-md-6 main_background" ></div>
        <div class="col-md-6">
            <h1>Come funziona BDoctors?</h1>
                <h3>Iscriviti e crea il tuo profilo medico.</h3>
                <ul>
                    <li>- Ricevi prenotazioni da nuovi pazienti</li>
                    <li>- Migliori la tua visibilità e la tua reputazione online</li>
                    <li>- Organizzi al meglio il tuo lavoro con una suite completa di strumenti dedicati</li>
                    <li>- Hai il nostro staff sempre disponibile ad aiutarti</li>
                </ul>
        </div>
    </div>
    <div class="container-fluid mt-4 container_welcome_down">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h1>Sponsorizzaioni</h1>
                <h3>Scegli il piano di sponsorizzazione più addatto per le tue esigenze e metti in mostra il tuo profilo.</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 container_sponsor">
                <h4>Basic</h4>
                <p>Prezzo: 2,99 € </p>
                <p>Tempo: 24 ore di sponsorizzazione</p>
            </div>
            <div class="col-md-3 container_sponsor">
                <h4>Silver</h4>
                <p>Prezzo: 5.99 € </p>
                <p>Tempo: 72 ore di sponsorizzazione</p>
            </div>
            <div class="col-md-3 container_sponsor">
                <h4>Gold</h4>
                <p>Prezzo: 9.99 € </p>
                <p>Tempo: 144 ore di sponsorizzazione</p>
            </div>
        </div>
    </div>
</div>

@endsection