@extends('fronts.layouts.base')
@section('title', 'Contact')
@section('content')
    <div class="container my-5">
        <!-- Titre principal -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-accent">Contactez-nous</h1>
            <p class="lead text-muted">
                Vous avez des questions sur nos services SMS ? Remplissez le formulaire et nous vous répondrons rapidement.
            </p>
        </div>

        <!-- Message de succès -->
        @if (session('success'))
            <div class="alert alert-success"> {{ session('success') }} </div>
        @endif

        <form method="POST" action="{{ route('ticafrique.store_contact') }}">
            @csrf
            <div class="row g-4">

                <!-- Colonne droite : textarea (sur mobile affiché en premier) -->
                <div class="col-md-6 order-1 order-md-2">
                    <div class="form-floating h-100">
                        <textarea class="form-control @error('message') is-invalid @enderror h-100" id="message" name="message"
                            placeholder="Votre message..." required>{{ old('message') }}</textarea>
                        <label for="message">Message</label>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Colonne gauche : inputs + bouton (sur mobile affiché après) -->
                <div class="col-md-6 d-flex flex-column gap-3 order-2 order-md-1">
                    <!-- Nom -->
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Nom complet" value="{{ old('name') }}" required>
                        <label for="name">Nom</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="exemple@mail.com" value="{{ old('email') }}" required>
                        <label for="email">E-mail</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Téléphone -->
                    <div class="form-floating">
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone"
                            name="phone" placeholder="+225 2522002077" value="{{ old('phone') }}" required>
                        <label for="phone">Téléphone</label>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Bouton -->
                    <button type="submit" class="btn btn-accent w-100 py-2 mt-2">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
