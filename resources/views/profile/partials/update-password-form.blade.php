<section>

    <header class="mb-4">
        <h2 class="h4 mb-2">
            Modifica password
        </h2>

        <p class="text-secondary mb-0">
            Assicurati di utilizzare una password sicura per proteggere il tuo account.
        </p>
    </header>

    <form
        method="POST"
        action="{{ route('password.update') }}"
    >
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="update_password_current_password" class="form-label">
                Password attuale
            </label>

            <input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="form-control"
                autocomplete="current-password"
            >

            @if ($errors->updatePassword->has('current_password'))
                <div class="text-danger mt-1">
                    {{ $errors->updatePassword->first('current_password') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="update_password_password" class="form-label">
                Nuova password
            </label>

            <input
                id="update_password_password"
                name="password"
                type="password"
                class="form-control"
                autocomplete="new-password"
            >

            @if ($errors->updatePassword->has('password'))
                <div class="text-danger mt-1">
                    {{ $errors->updatePassword->first('password') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label">
                Conferma nuova password
            </label>

            <input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="form-control"
                autocomplete="new-password"
            >
        </div>

        <div class="d-flex align-items-center gap-3">

            <button type="submit" class="btn btn-primary">
                Salva
            </button>

            @if (session('status') === 'password-updated')
                <span class="text-success">
                    Password aggiornata.
                </span>
            @endif

        </div>

    </form>

</section>