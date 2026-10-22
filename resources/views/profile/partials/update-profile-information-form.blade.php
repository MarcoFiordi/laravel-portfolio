<section>

    <header class="mb-4">
        <h2 class="h4 mb-2">
            Informazioni profilo
        </h2>

        <p class="text-secondary mb-0">
            Aggiorna le informazioni del tuo profilo e il tuo indirizzo email.
        </p>
    </header>

    <form
        id="send-verification"
        method="POST"
        action="{{ route('verification.send') }}"
    >
        @csrf
    </form>

    <form
        method="POST"
        action="{{ route('profile.update') }}"
    >
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">
                Nome
            </label>

            <input
                id="name"
                name="name"
                type="text"
                class="form-control"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name"
            >

            @error('name')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">
                Email
            </label>

            <input
                id="email"
                name="email"
                type="email"
                class="form-control"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username"
            >

            @error('email')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div class="mt-3">

                    <p class="mb-2">
                        Il tuo indirizzo email non è verificato.
                    </p>

                    <button
                        form="send-verification"
                        class="btn btn-link p-0"
                    >
                        Clicca qui per inviare nuovamente l'email di verifica.
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="text-success mt-2 mb-0">
                            È stato inviato un nuovo link di verifica al tuo indirizzo email.
                        </p>
                    @endif

                </div>

            @endif
        </div>

        <div class="d-flex align-items-center gap-3">

            <button type="submit" class="btn btn-primary">
                Salva
            </button>

            @if (session('status') === 'profile-updated')
                <span class="text-success">
                    Salvato.
                </span>
            @endif

        </div>

    </form>

</section>