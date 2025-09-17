@extends('fronts.layouts.base')

@section('title', '2WAY')

@section('content')
    <div class="container my-5">
        <!-- Titre principal -->
        <div class="text-center mb-2">
            <h1 class="fw-bold text-accent">2WAY</h1>
            <p class="lead text-muted">
                Le SMS bidirectionnel ou <span class="fw-bold text-dark">SMS 2 WAYS</span> de TICAFRIQUE permet l'envoi et la
                réception des SMS via un numéro local, un numéro virtuel ou un numéro court.
            </p>
        </div>

        <!-- Contenu principal -->
        <div class="row g-4 align-items-center">
            <!-- Image illustrative -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('site/img/marketing-2way.jpg') }}" alt="SMS 2WAY TICAFRIQUE"
                    class="img-fluid rounded shadow">
            </div>
            <!-- Texte et points forts -->
            <div class="col-md-6">
                <p>
                    Cette solution permet à vos destinataires de vous envoyer des SMS ou de répondre à vos messages,
                    et vous pouvez traiter les réponses de façon automatique.
                    Établissez ainsi un dialogue avec vos correspondants et obtenez leurs retours.
                    Aucun surcoût n’est appliqué au tarif local d’envoi du SMS initial.
                </p>

                <h5 class="fw-bold mt-4 text-accent">Les points forts de la solution :</h5>
                <ul class="list-unstyled mt-3">
                    <li><i class="fas fa-check-circle text-accent me-2"></i> Facile à installer</li>
                    <li><i class="fas fa-check-circle text-accent me-2"></i> Facilement combiné avec SMS (MT)</li>
                    <li><i class="fas fa-check-circle text-accent me-2"></i> Canal de communication interactif</li>
                    <li><i class="fas fa-check-circle text-accent me-2"></i> Accessible depuis tous les téléphones mobiles
                        dans le réseau GSM</li>
                </ul>

                <!-- Bouton commander -->
                <div class="mt-4">
                    <a href="{{ route('ticafrique.demande') }}" class="btn btn-accent px-4 py-2">Commander</a>
                </div>
            </div>


        </div>
    </div>
@endsection
