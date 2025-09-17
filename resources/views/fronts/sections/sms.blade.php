@extends('fronts.layouts.base')

@section('title', 'SMS')

@section('content')
    <div class="container my-5">
        <!-- Titre principal -->
        <div class="text-center mb-4">
            <h1 class="fw-bold text-accent">SMS</h1>
            <p class="lead text-muted">
                SMS professionnel de <span class="fw-bold text-dark">TICAFRIQUE</span>, un outil conçu avec des
                fonctionnalités pratiques et évolutives,
                le tout dans une plateforme sécurisée.
            </p>
        </div>

        <!-- Description -->
        <div class="row g-4 align-items-center">

            <!-- Image illustrative -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('site/img/SMS-marketing-1.jpg') }}" alt="SMS TICAFRIQUE" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p>
                    <strong>SMS groupé</strong>, <strong>SMS marketing</strong>, <strong>SMS en masse</strong> ou
                    <strong>SMS professionnel</strong>,
                    une stratégie de communication efficace pour atteindre votre cible.
                </p>
                <p>
                    Bénéficiez de nouveaux canaux de communication sur la plateforme de
                    <span class="fw-bold text-dark">TICAFRIQUE</span> et améliorez votre productivité.
                </p>

                <!-- Avantages -->
                <ul class="list-unstyled mt-3">
                    <li><i class="fas fa-check-circle text-accent me-2"></i> Simple à utiliser</li>
                    <li><i class="fas fa-code text-accent me-2"></i> Intégration avec notre API</li>
                    <li><i class="fas fa-chart-bar text-accent me-2"></i> Suivi et statistiques</li>
                    <li><i class="fas fa-users text-accent me-2"></i> Sensibiliser vos prospects, fidéliser vos clients et
                        rester en contact avec votre cible</li>
                </ul>

                <!-- Bouton commander -->
                <div class="mt-4">
                    <a href="{{ route('ticafrique.demande') }}" class="btn btn-accent px-4 py-2">Commander</a>
                </div>
            </div>
        </div>
    </div>
@endsection
