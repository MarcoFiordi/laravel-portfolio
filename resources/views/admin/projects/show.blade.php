@extends('layouts.admin')

@section('title', $project->title . ' - Portfolio')

@section('content')

<div class="container-fluid">

    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mb-4">
        Torna ai progetti
    </a>

    <div class="card">
        <div class="card-body">

            <h1 class="card-title mb-3">
                {{ $project->title }}
            </h1>

            <p class="card-text">
                {{ $project->description }}
            </p>

            <p>
                <strong>Tipologia:</strong>

                @if ($project->type)
                {{ $project->type->name }}
                @else
                Nessuna tipologia
                @endif
            </p>

            <div class="mb-3">
                <strong>Tecnologie:</strong>

                @if ($project->technologies->isNotEmpty())
                @foreach ($project->technologies as $technology)
                <span class="badge text-bg-primary">
                    {{ $technology->name }}
                </span>
                @endforeach
                @else
                Nessuna tecnologia
                @endif
            </div>

            @if ($project->project_url)
            <a href="{{ $project->project_url }}"
                target="_blank"
                class="btn btn-primary">
                Visita progetto
            </a>
            @endif

        </div>
    </div>

</div>

@endsection