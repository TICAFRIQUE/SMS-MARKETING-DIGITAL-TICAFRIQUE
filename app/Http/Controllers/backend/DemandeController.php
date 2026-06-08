<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index(Request $request)
    {
        $demandes = Demande::orderBy('created_at', 'desc')->paginate(15);

        return view('backend.pages.demande.index', compact('demandes'));
    }

    public function show(Demande $demande)
    {
        return view('backend.pages.demande.show', compact('demande'));
    }

    public function destroy(Demande $demande)
    {
        $demande->delete();

        return redirect()->route('demandes.index')
            ->with('success', 'Demande supprimée avec succès.');
    }
}
