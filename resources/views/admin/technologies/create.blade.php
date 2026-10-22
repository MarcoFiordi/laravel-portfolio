@extends('layouts.admin')

@section('title', 'Nuova tecnologia - Portfolio')

@section('content')

<div class="container-fluid">

    <h1 class="mb-4">Nuova tecnologia</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.technologies.store') }}" method="POST">

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
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary">
                    Salva
                </button>

                <a
                    href="{{ route('admin.technologies.index') }}"
                    class="btn btn-secondary"
                >
                    Annulla
                </a>

            </form>

        </div>
    </div>

</div>

@endsection