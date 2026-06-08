@extends('backend.layouts.master')

@section('title') Liste des demandes @endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="card-title mb-1">Demandes de devis</h4>
                        <p class="text-muted mb-0">Consultez et gérez les demandes reçues depuis le site.</p>
                    </div>
                </div>

                <div class="card-body p-0">
                    @if(session('success'))
                        <div class="alert alert-success m-3">{{ session('success') }}</div>
                    @endif

                    @if($demandes->isEmpty())
                        <div class="alert alert-info m-3">Aucune demande n'a encore été reçue.</div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width:60px">ID</th>
                                        <th>Client</th>
                                        <th>Société / Profil</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Activité</th>
                                        <th>Date</th>
                                        <th style="width:140px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($demandes as $demande)
                                        <tr>
                                            <td>
                                                <span class="badge bg-light text-secondary border">
                                                    #{{ $demande->id }}
                                                </span>
                                            </td>
                                            <td>{{ $demande->nom ?? '—' }}</td>
                                            <td>{{ $demande->societe ?? '—' }}</td>
                                            <td class="text-truncate" style="max-width:160px" title="{{ $demande->email }}">
                                                {{ $demande->email ?? '—' }}
                                            </td>
                                            <td>{{ $demande->tel ?? '—' }}</td>
                                            <td>{{ $demande->activite ?? '—' }}</td>
                                            <td class="text-nowrap">
                                                {{ $demande->created_at->format('d/m/Y H:i') }}
                                            </td>
                                            <td class="text-end text-nowrap">
                                                <a href="{{ route('demandes.show', $demande) }}"
                                                    class="btn btn-sm btn-outline-primary me-1">
                                                    <i class="ti ti-eye"></i> Voir
                                                </a>
                                                <form action="{{ route('demandes.destroy', $demande) }}" method="POST"
                                                    class="d-inline-block" onsubmit="return confirm('Supprimer cette demande ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="ti ti-trash">supprimer</i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-end px-3 py-2 border-top">
                            {{ $demandes->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection