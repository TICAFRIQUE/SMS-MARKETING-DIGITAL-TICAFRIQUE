@extends('fronts.layouts.base')

@section('title', 'SMS Vocal')

@section('content')
    <div class="container my-5">
        <!-- Titre principal -->
        <div class="text-center mb-4">
            <h1 class="fw-bold text-accent">SMS VOCAL</h1>
            <p class="lead text-muted">
                SMS vocal de <span class="fw-bold text-dark">TICAFRIQUE</span>, une autre façon plus smart de communiquer.
            </p>
        </div>

        <!-- Contenu principal -->
        <div class="row g-4 align-items-center">
            <!-- Image illustrative -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('site/img/voice-call.jpg') }}" alt="SMS Vocal TICAFRIQUE" class="img-fluid rounded shadow">
            </div>
            <!-- Texte et points forts -->
            <div class="col-md-6">
                <p>
                    Rédigez votre message et <span class="fw-bold text-dark">TICAFRIQUE</span> le convertit en message vocal
                    ou enregistrez votre propre voix. TICAFRIQUE s’occupe de la transmission à votre interlocuteur via un
                    simple appel.
                </p>

                <h5 class="fw-bold mt-4 text-accent">Les points forts de la solution :</h5>
                <ul class="list-unstyled mt-3">
                    <li><i class="fas fa-phone-volume text-accent me-2"></i> Délivrabilité sur fixe et mobile</li>
                    <li><i class="fas fa-redo text-accent me-2"></i> Possibilité de plusieurs re-envois en cas de
                        non-décrochage</li>
                    <li><i class="fas fa-language text-accent me-2"></i> Disponible en langues locales et plusieurs autres
                        langues</li>
                </ul>

                <!-- Bouton commander -->
                <div class="mt-4">
                    <a href="{{ route('ticafrique.demande') }}" class="btn btn-accent px-4 py-2">Commander</a>
                </div>
            </div>


        </div>
    </div>
@endsection
