@extends('layouts.app')

@section('title', 'Accedi - Portfolio')

@section('content')

<div class="container">

    <div class="row justify-content-center py-5">
        <div class="col-md-7 col-lg-5">

            <div class="card shadow-sm border-0">

                <div class="card-body p-4 p-md-5">

                    <div class="text-center mb-4">
                        <h1 class="h3 fw-bold">
                            Accedi al Portfolio
                        </h1>

                        <p class="text-secondary mb-0">
                            Inserisci le tue credenziali per accedere
                            all'area amministrativa.
                        </p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email
                            </label>

                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                            >

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                Password
                            </label>

                            <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required
                                autocomplete="current-password"
                            >

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-check mb-4">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember"
                            >

                            <label class="form-check-label" for="remember">
                                Ricordami
                            </label>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">
                                Accedi
                            </button>
                        </div>

                        <div class="text-center">

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    Hai dimenticato la password?
                                </a>
                            @endif

                        </div>

                    </form>

                </div>

            </div>

            @if (Route::has('register'))
                <p class="text-center text-secondary mt-4">
                    Non hai ancora un account?

                    <a href="{{ route('register') }}">
                        Registrati
                    </a>
                </p>
            @endif

        </div>
    </div>

</div>

@endsection