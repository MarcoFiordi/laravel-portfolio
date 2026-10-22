@extends('layouts.admin')

@section('title', 'Profilo - Portfolio')

@section('content')

<div class="container-fluid">

    <h1 class="mb-4">
        Profilo
    </h1>

    <div class="card p-4 mb-4 shadow-sm">
        @include('profile.partials.update-profile-information-form')
    </div>

    <div class="card p-4 mb-4 shadow-sm">
        @include('profile.partials.update-password-form')
    </div>

    <div class="card p-4 mb-4 shadow-sm">
        @include('profile.partials.delete-user-form')
    </div>

</div>

@endsection