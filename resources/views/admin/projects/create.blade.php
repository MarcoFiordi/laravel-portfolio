@extends('layouts.admin')

@section('title', 'Nuovo progetto - Portfolio')

@section('content')

<div class="container-fluid">

    <h1 class="mb-4">Nuovo progetto</h1>



    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.projects.store') }}" method="POST">

                @csrf
                <div class="mb-3">
                    <label for="type_id" class="form-label">Tipologia</label>

                    <select
                        class="form-select"
                        id="type_id"
                        name="type_id">
                        <option value="">Nessuna tipologia</option>

                        @foreach ($types as $type)
                        <option value="{{ $type->id }}">
                            {{ $type->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tecnologie</label>

                    @foreach ($technologies as $technology)
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="technologies[]"
                            value="{{ $technology->id }}"
                            id="technology-{{ $technology->id }}">

                        <label
                            class="form-check-label"
                            for="technology-{{ $technology->id }}">
                            {{ $technology->name }}
                        </label>
                    </div>
                    @endforeach
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea
                        class="form-control"
                        id="description"
                        name="description"
                        rows="5"
                        required></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input
                        type="text"
                        class="form-control"
                        id="image"
                        name="image">
                </div>

                <div class="mb-3">
                    <label for="project_url" class="form-label">Link progetto</label>
                    <input
                        type="url"
                        class="form-control"
                        id="project_url"
                        name="project_url">
                </div>

                <button type="submit" class="btn btn-primary">
                    Salva progetto
                </button>

                <a href="{{ route('admin.projects.index') }}"
                    class="btn btn-secondary">
                    Annulla
                </a>

            </form>

        </div>
    </div>

</div>

@endsection