@extends('layouts.admin')

@section('title', $technology->name . ' - Portfolio')

@section('content')

<div class="container-fluid">

    <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary mb-4">
        Torna alle tecnologie
    </a>

    <div class="card">
        <div class="card-body">

            <h1 class="card-title mb-3">
                {{ $technology->name }}
            </h1>

            <p>
                <strong>Numero di progetti associati:</strong>
                {{ $technology->projects->count() }}
            </p>

        </div>
    </div>

</div>

@endsection