@extends('layouts.admin')

@section('title', 'Dashboard - Portfolio')

@section('content')

<div class="container-fluid">

    <h1 class="mb-3">Dashboard</h1>

    <p class="mb-4">
        Benvenuto nell'area amministrativa del portfolio.
        Da questa dashboard puoi gestire i progetti, le tipologie
        e le tecnologie utilizzate.
    </p>

    <div class="card">
        <div class="card-body">

            <h2 class="h5 mb-3">Guida rapida</h2>

            <p>
                <strong>Progetti:</strong>
                visualizza, crea, modifica ed elimina i progetti del portfolio.
            </p>

            <p>
                <strong>Tipologie:</strong>
                gestisci le categorie associate ai progetti.
            </p>

            <p>
                <strong>Tecnologie:</strong>
                gestisci i linguaggi e le tecnologie utilizzate nei progetti.
            </p>

            <p class="mb-0">
                <strong>Profilo:</strong>
                gestisci le informazioni e le impostazioni del tuo account.
            </p>

        </div>
    </div>

</div>

@endsection