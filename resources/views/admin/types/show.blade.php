@extends('layouts.admin')

@section('title', $type->name . ' - Portfolio')

@section('content')

<div class="container-fluid">

    <a href="{{ route('admin.types.index') }}" class="btn btn-secondary mb-4">
        Torna alle tipologie
    </a>

    <div class="card">
        <div class="card-body">

            <h1 class="card-title mb-3">
                {{ $type->name }}
            </h1>

            <p>
                <strong>Numero di progetti associati:</strong>
                {{ $type->projects->count() }}
            </p>

        </div>
    </div>

</div>

@endsection