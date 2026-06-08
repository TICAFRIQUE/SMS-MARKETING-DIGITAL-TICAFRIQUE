@extends('backend.layouts.master')

@section('title') Détail de la demande @endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="card-title mb-1">
                            Détail de la demande
                            <span class="text-muted fw-normal">#{{ $demande->id }}</span>
                        </h4>
                        <p class="text-muted mb-0">Informations envoyées par le visiteur.</p>
                    </div>
                    <a href="{{ route('demandes.index') }}" class="btn btn-outline-secondary btn-sm">
                        <i class="ti ti-arrow-left me-1"></i> Retour à la liste
                    </a>
                </div>

                <div class="card-body">

                    {{-- Section société --}}
                    <p class="text-uppercase text-muted fw-semibold" style="font-size:11px;letter-spacing:.06em">
                        Informations société
                    </p>

                    <div class="row g-0">
                        <div class="col-lg-6">
                            <dl class="row mb-0 small">
                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Type de profil</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->societe ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Raison sociale</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->raisonsocial ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">RCCM</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->rccm ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Adresse</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->adresse ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Ville</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->ville ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2">Activité</dt>
                                <dd class="col-sm-7 py-2">{{ $demande->activite ?? '—' }}</dd>
                            </dl>
                        </div>
                        <div class="col-lg-6">
                            <dl class="row mb-0 small">
                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Nom contact</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->nom ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Fonction</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->fonction ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Téléphone</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->tel ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Email</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->email ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Nom d'utilisateur</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->username ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Nom expéditeur</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->expediteur ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2 border-bottom">Sous-comptes</dt>
                                <dd class="col-sm-7 py-2 border-bottom">{{ $demande->nbcompte ?? '—' }}</dd>

                                <dt class="col-sm-5 text-muted fw-normal py-2">Montant</dt>
                                <dd class="col-sm-7 py-2 fw-semibold">
                                    {{ $demande->montant !== null
        ? number_format($demande->montant, 0, ',', ' ') . ' FCFA'
        : '—' }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <hr class="my-4">

                    {{-- Infos complémentaires --}}
                    <p class="text-uppercase text-muted fw-semibold mb-2" style="font-size:11px;letter-spacing:.06em">
                        Informations complémentaires
                    </p>
                    <div class="bg-light rounded p-3 small">
                        {{ $demande->complementaire ?? 'Aucune information supplémentaire.' }}
                    </div>

                    <hr class="my-4">

                    {{-- Pied de fiche --}}
                    <div class="d-flex align-items-center justify-content-between small text-muted">
                        <span>
                            Validation acceptée :
                            @if($demande->validation)
                                <span class="badge bg-success-subtle text-success ms-1">Oui</span>
                            @else
                                <span class="badge bg-danger-subtle text-danger ms-1">Non</span>
                            @endif
                        </span>
                        <span>
                            <i class="ti ti-calendar me-1"></i>
                            Reçue le {{ $demande->created_at->format('d/m/Y à H:i') }}
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection