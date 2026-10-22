@extends('layouts.app')

@section('title', 'Home - Portfolio')

@section('content')

<div class="container">

    <div class="row justify-content-center py-5">
        <div class="col-lg-9">

            <div class="card shadow-sm border-0">
                <div class="card-body p-5">

                    <h1 class="display-5 fw-bold mb-3">
                        Portfolio Developer
                    </h1>

                    <p class="lead text-secondary mb-4">
                        Un'applicazione Laravel per la gestione dei progetti,
                        delle loro tipologie e delle tecnologie utilizzate.
                    </p>

                    <p class="mb-4">
                        Questo portfolio permette di organizzare e gestire i progetti
                        attraverso un'area amministrativa riservata.
                        Ogni progetto può essere associato a una tipologia e a più
                        tecnologie.
                    </p>

                    @guest
                        <div class="d-flex gap-2">

                            <a href="{{ route('login') }}" class="btn btn-primary">
                                Accedi
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-secondary">
                                    Registrati
                                </a>
                            @endif

                        </div>
                    @else
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">
                            Vai alla dashboard
                        </a>
                    @endguest

                </div>
            </div>

            <div class="row g-4 mt-2">

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">

                            <h2 class="h5">
                                Progetti
                            </h2>

                            <p class="text-secondary mb-0">
                                Gestisci i progetti del portfolio attraverso
                                operazioni di creazione, modifica, visualizzazione
                                ed eliminazione.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">

                            <h2 class="h5">
                                Tipologie
                            </h2>

                            <p class="text-secondary mb-0">
                                Organizza i progetti assegnando a ciascuno
                                una specifica tipologia.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">

                            <h2 class="h5">
                                Tecnologie
                            </h2>

                            <p class="text-secondary mb-0">
                                Associa a ogni progetto una o più tecnologie
                                attraverso una relazione molti-a-molti.
                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection