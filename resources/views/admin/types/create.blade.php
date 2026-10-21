@extends('layouts.admin')

@section('title', 'Nuova tipologia - Portfolio')

@section('content')

<div class="container-fluid">

    <h1 class="mb-4">Nuova tipologia</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.types.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">
                        Nome
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Salva tipologia
                </button>

                <a href="{{ route('admin.types.index') }}"
                    class="btn btn-secondary">
                    Annulla
                </a>

            </form>

        </div>
    </div>

</div>

@endsection