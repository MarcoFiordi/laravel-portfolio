@extends('layouts.admin')

@section('title', 'Tecnologie - Portfolio')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Tecnologie</h1>


    </div>

    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.technologies.create') }}" class="btn btn-success">
                Nuova tecnologia
            </a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Azioni</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($technologies as $technology)
                    <tr>
                        <td>{{ $technology->name }}</td>

                        <td>
                            <a
                                href="{{ route('admin.technologies.show', $technology) }}"
                                class="btn btn-primary btn-sm">
                                Dettagli
                            </a>

                            <a
                                href="{{ route('admin.technologies.edit', $technology) }}"
                                class="btn btn-warning btn-sm">
                                Modifica
                            </a>

                            <form
                                action="{{ route('admin.technologies.destroy', $technology) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Sei sicuro di voler eliminare questa tecnologia?')">
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