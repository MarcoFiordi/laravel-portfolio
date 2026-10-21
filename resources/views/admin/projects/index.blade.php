@extends('layouts.admin')

@section('title', 'Progetti - Portfolio')

@section('content')

<div class="container-fluid">

    <h1 class="mb-4">Progetti</h1>

    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-success mb-3">
                Nuovo progetto
            </a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>Titolo</th>
                        <th>Descrizione</th>
                        <th>Tipologia</th>
                        <th>Link</th>
                        <th>Azioni</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($projects as $project)
                    <tr>

                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            {{ $project->type?->name ?? 'Nessuna tipologia' }}
                        </td>

                        <td>
                            @if ($project->project_url)
                            <a href="{{ $project->project_url }}" target="_blank">
                                Visita progetto
                            </a>
                            @else
                            -
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}"
                                class="btn btn-primary btn-sm">
                                Dettagli
                            </a>

                            <a href="{{ route('admin.projects.edit', $project) }}"
                                class="btn btn-warning btn-sm">
                                Modifica
                            </a>

                            <form action="{{ route('admin.projects.destroy', $project) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto')">


                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    Elimina
                                </button>
                            </form>

                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection