@extends('layouts.app')

@section('content')
    <div class="container welcome_top">
        <div>
            <div class="col-12">
                <h1 class="text-center fs-1">Benvenuto su BDoctors</h1>
                <h3 class="text-center fs-2 my-2">Registrati e scopri tutti i vantaggi di BDoctors.</h3>
                <p class="text-center fs-5">La nostra piattaforma ti offre la possibilità di gestire facilmente i tuoi dati
                    professionali in modo sicuro e conveniente. Potrai aggiornare il tuo profilo professionale con
                    informazioni pertinenti, come il titolo di studio, le specializzazioni, gli orari di lavoro e il
                    contatto diretto.</p>
                <p class="text-center fs-5">Unisciti a noi e semplifica la gestione della tua professione, inserendo i tuoi
                    dati, gestendo le prenotazioni e ricevendo pagamenti in modo facile e sicuro!</p>
            </div>
        </div>
    </div>
    <div class="container welcom_center">
        <div class="banner-ctn">
            <div class="welcome_banner"></div>
            <div class="banner_right">
                <h1 class="py-2">Come funziona BDoctors?</h1>
                <h3 class="my-2">Iscriviti e crea il tuo profilo medico:</h3>
                <ul class="py-2">
                    <li>- Ricevi prenotazioni da nuovi pazienti</li>
                    <li>- Migliori la tua visibilità e la tua reputazione online</li>
                    <li>- Organizzi al meglio il tuo lavoro con una suite completa di strumenti dedicati</li>
                    <li>- Hai il nostro staff sempre disponibile ad aiutarti</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container welcome_bottom">
        <div class="row justify-content-center mb-3">
            <div class="col-md-9 text-center">
                <h1>Sponsorizzazioni</h1>
                <h3 class="mt-3 mb-1 fs-4">Scegli il piano di sponsorizzazione più addatto per le tue esigenze e metti in mostra
                    il tuo
                    profilo.</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 m-2 container_sponsor ms-option">
                <h4>Basic</h4>
                <p>Prezzo: 2,99 € </p>
                <p>Tempo: 24 ore di sponsorizzazione</p>
            </div>
            <div class="col-md-3 m-2 container_sponsor ms-option">
                <h4>Silver</h4>
                <p>Prezzo: 5.99 € </p>
                <p>Tempo: 72 ore di sponsorizzazione</p>
            </div>
            <div class="col-md-3 m-2 container_sponsor ms-option">
                <h4>Gold</h4>
                <p>Prezzo: 9.99 € </p>
                <p>Tempo: 144 ore di sponsorizzazione</p>
            </div>
        </div>
    </div>
@endsection
