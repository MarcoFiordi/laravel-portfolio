@extends('layouts.admin')

@section('title', 'Modifica progetto - Portfolio')

@section('content')

<div class="container-fluid">

    <h1 class="mb-4">Modifica progetto</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.projects.update', $project) }}" method="POST">

                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="type_id" class="form-label">Tipologia</label>

                    <select
                        class="form-select"
                        id="type_id"
                        name="type_id">

                        <option value="">Nessuna tipologia</option>

                        @foreach ($types as $type)
                        <option
                            value="{{ $type->id }}"
                            {{ $project->type_id == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>

                    <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        value="{{ $project->title }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">
                        Descrizione
                    </label>

                    <textarea
                        class="form-control"
                        id="description"
                        name="description"
                        rows="5"
                        required>{{ $project->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>

                    <input
                        type="text"
                        class="form-control"
                        id="image"
                        name="image"
                        value="{{ $project->image }}">
                </div>

                <div class="mb-3">
                    <label for="project_url" class="form-label">
                        Link progetto
                    </label>

                    <input
                        type="url"
                        class="form-control"
                        id="project_url"
                        name="project_url"
                        value="{{ $project->project_url }}">
                </div>

                <button type="submit" class="btn btn-primary">
                    Salva modifiche
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