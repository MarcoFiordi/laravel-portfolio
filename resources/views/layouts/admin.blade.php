<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin - Portfolio')</title>

    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="d-flex min-vh-100">

        <aside class="bg-dark text-white p-3" style="width: 250px;">
            <h4 class="mb-4">Portfolio Admin</h4>

            <nav class="nav flex-column">
                <a class="nav-link text-white" href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                <a class="nav-link text-white" href="{{ route('admin.projects.index') }}">
                    Progetti
                </a>

                <a class="nav-link text-white" href="{{ route('profile.edit') }}">
                    Profilo
                </a>

                <a class="nav-link text-white" href="{{ route('admin.types.index') }}">
                    Tipologie
                </a>
            </nav>
        </aside>

        <div class="flex-grow-1">

            <header class="navbar bg-white shadow-sm px-4">
                <span>
                    Ciao, {{ Auth::user()->name }}
                </span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="btn btn-outline-danger">
                        Logout
                    </button>
                </form>
            </header>

            <main class="p-4">
                @yield('content')
            </main>

        </div>

    </div>

</body>

</html>