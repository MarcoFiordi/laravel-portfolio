@extends('layouts.admin')

@section('title', 'Modifica tipologia - Portfolio')

@section('content')

<div class="container-fluid">

    <h1 class="mb-4">Modifica tipologia</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.types.update', $type) }}" method="POST">

                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>

                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ $type->name }}"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Salva modifiche
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