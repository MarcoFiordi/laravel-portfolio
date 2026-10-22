<section>

    <header class="mb-4">
        <h2 class="h4 mb-2">
            Elimina account
        </h2>

        <p class="text-secondary mb-0">
            Una volta eliminato l'account, tutti i dati associati verranno rimossi definitivamente.
            Prima di procedere, assicurati di non avere informazioni che desideri conservare.
        </p>
    </header>

    <button
        type="button"
        class="btn btn-danger"
        data-bs-toggle="modal"
        data-bs-target="#deleteAccountModal">
        Elimina account
    </button>

    <div
        class="modal fade"
        id="deleteAccountModal"
        tabindex="-1"
        aria-labelledby="deleteAccountModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <form method="POST" action="{{ route('profile.destroy') }}">

                    @csrf
                    @method('DELETE')

                    <div class="modal-header">

                        <h2
                            class="modal-title fs-5"
                            id="deleteAccountModalLabel">
                            Conferma eliminazione account
                        </h2>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Chiudi"></button>

                    </div>

                    <div class="modal-body">

                        <p>
                            Sei sicuro di voler eliminare definitivamente il tuo account?
                        </p>

                        <p class="text-secondary">
                            Inserisci la tua password per confermare l'operazione.
                        </p>

                        <div class="mb-3">

                            <label
                                for="delete_account_password"
                                class="form-label">
                                Password
                            </label>

                            <input
                                id="delete_account_password"
                                name="password"
                                type="password"
                                class="form-control"
                                autocomplete="current-password">

                            @if ($errors->userDeletion->has('password'))
                            <div class="text-danger mt-1">
                                {{ $errors->userDeletion->first('password') }}
                            </div>
                            @endif

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
                            Annulla
                        </button>

                        <button
                            type="submit"
                            class="btn btn-danger">
                            Elimina definitivamente
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>

</section>