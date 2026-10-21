@extends('layouts.admin')

@section('title', 'Tipologie - Portfolio')

@section('content')

<div class="container-fluid">

    <h1 class="mb-4">Tipologie</h1>

    <div class="card">
        <div class="card-body">

            <a href="{{ route('admin.types.create') }}" class="btn btn-success mb-3">
                Nuova tipologia
            </a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Azioni</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->name }}</td>

                        <td>
                            <a href="{{ route('admin.types.show', $type) }}"
                                class="btn btn-primary btn-sm">
                                Dettagli
                            </a>

                            <a href="{{ route('admin.types.edit', $type) }}"
                                class="btn btn-warning btn-sm">
                                Modifica
                            </a>

                            <form
                                action="{{ route('admin.types.destroy', $type) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Sei sicuro di voler eliminare questa tipologia?')">

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