@extends('fronts.layouts.base')

@section('title', 'Demande de création de compte')

@section('content')
    <div class="container my-5">
        <!-- Titre -->
        <div class="text-center mb-5">
            <h3 class="fw-bold text-accent">Demande de création de compte</h3>
            <p class="text-muted">Veuillez remplir les informations ci-dessous pour créer votre compte.</p>
        </div>

        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <!-- ✅ Messages Flash -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                @endif

                @if (session('echec'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('echec') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                @endif
                <!-- ✅ Fin messages -->

                <form method="POST" action="{{ route('ticafrique.store_demande') }}" id="form">
                    @csrf

                    <!-- Step 1 : Raison sociale -->
                    <h5 class="fw-semibold text-accent mb-3">Raison sociale</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6 form-floating">
                            <select name="societe" class="form-select" id="societe" required>
                                <option value="Personne Physique"
                                    {{ old('societe') == 'Personne Physique' ? 'selected' : '' }}>Personne Physique</option>
                                <option value="Société" {{ old('societe') == 'Société' ? 'selected' : '' }}>Société</option>
                            </select>
                            <label for="societe">Société ou Personne Physique ?</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" name="adresse" class="form-control" id="adresse"
                                value="{{ old('adresse') }}">
                            <label for="adresse">Adresse</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" name="raisonsocial" class="form-control" id="raisonsocial"
                                value="{{ old('raisonsocial') }}" onkeyup="this.value=this.value.toUpperCase()">
                            <label for="raisonsocial">Nom de l'entreprise</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" name="rccm" class="form-control" id="rccm"
                                value="{{ old('rccm') }}">
                            <label for="rccm">RCCM</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" name="ville" class="form-control" id="ville"
                                value="{{ old('ville') }}" onkeyup="this.value=this.value.toUpperCase()">
                            <label for="ville">Ville</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" name="activite" class="form-control" id="activite"
                                value="{{ old('activite') }}" onkeyup="this.value=this.value.toUpperCase()">
                            <label for="activite">Activités</label>
                        </div>
                    </div>

                    <!-- Step 2 : Infos du compte -->
                    <h5 class="fw-semibold text-accent mb-3">Infos du compte</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6 form-floating">
                            <input type="text" name="username" class="form-control" id="username"
                                value="{{ old('username') }}" required onkeyup="this.value=this.value.toUpperCase()">
                            <label for="username">Nom d’utilisateur *</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" name="expediteur" class="form-control" id="expediteur"
                                value="{{ old('expediteur') }}" required onkeyup="this.value=this.value.toUpperCase()">
                            <label for="expediteur">Nom d’expéditeur *</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="number" name="nbcompte" class="form-control" id="nbcompte"
                                value="{{ old('nbcompte') }}" required>
                            <label for="nbcompte">Nombre de sous comptes *</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="number" name="montant" class="form-control" id="montant"
                                value="{{ old('montant') }}" required>
                            <label for="montant">Montant *</label>
                        </div>
                    </div>
                    <p class="text-muted small">
                        (1) Nom à utiliser pour se connecter au compte SMS (un seul mot)<br>
                        (2) 11 caractères maximum (espaces inclus)
                    </p>

                    <!-- Step 3 : Personne à contacter -->
                    <h5 class="fw-semibold text-accent mb-3">Personne à contacter</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6 form-floating">
                            <input type="text" name="nom" class="form-control" id="nom"
                                value="{{ old('nom') }}" required onkeyup="this.value=this.value.toUpperCase()">
                            <label for="nom">Nom *</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" name="fonction" class="form-control" id="fonction"
                                value="{{ old('fonction') }}" required onkeyup="this.value=this.value.toUpperCase()">
                            <label for="fonction">Fonction *</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" name="tel" class="form-control" id="tel"
                                value="{{ old('tel') }}" required>
                            <label for="tel">Téléphone *</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" name="fax" class="form-control" id="fax"
                                value="{{ old('fax') }}">
                            <label for="fax">Fax</label>
                        </div>
                        <div class="col-md-12 form-floating">
                            <input type="email" name="email" class="form-control" id="email"
                                value="{{ old('email') }}" required>
                            <label for="email">Email *</label>
                        </div>
                    </div>

                    <!-- Step 4 : Terminé -->
                    <h5 class="fw-semibold text-accent mb-3">Terminé</h5>
                    <div class="mb-3 form-floating">
                        <textarea name="complementaire" class="form-control" id="complementaire" style="height: 100px">{{ old('complementaire') }}</textarea>
                        <label for="complementaire">Informations complémentaires</label>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <p id="MsgErreur" class="text-danger" data-aos="zoom-out-right"></p>
                        <div class="col-auto">
                            <label for="captcha" class="col-form-label">Résolver: <span id="calcule"></span></label>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Réponse ici" name="captcha" id="captcha"
                                class="form-control" required>
                            <input type="text" placeholder="Réponse ici" name="captchaSolution" id="captchaSolution"
                                class="form-control d-none">
                        </div>
                    </div>
                    <div class="form-check mb-4">
                        <input type="checkbox" name="validation" class="form-check-input" id="validation" required>
                        <label class="form-check-label" for="validation">Lu et Approuvé</label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-accent px-5 py-2 rounded-pill" id="submit">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        let calcule = $('#calcule');
        let random1 = Math.floor(Math.random() * 5);
        let random2 = Math.floor(Math.random() * 5);
        let solution = random1 + random2;
        calcule.text(`${random1} + ${random2}`);
        $('#captchaSolution').val(solution)

        $('#submit').click(function(e) {
            let userValeur = $('#captcha').val();
            if (parseInt(userValeur) != parseInt(solution)) {
                e.preventDefault()
                $('#MsgErreur').text('erreur');
            }
        })
    });
</script>
