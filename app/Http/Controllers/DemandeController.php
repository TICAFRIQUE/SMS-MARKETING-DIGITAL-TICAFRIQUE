<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use App\Services\EmailService;
use Illuminate\Routing\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class DemandeController extends Controller
{


    // les constructeurs
    protected $emailService;
    public function __construct(EmailService  $emailService)
    {
        $this->emailService = $emailService;
    }

    // demande de devis
    public function demande()
    {
        $captcha = rand(100000, 999999);
        Session::put('demande_captcha', (string) $captcha);

        return view('fronts.sections.demande', compact('captcha'));
    }

    // store demande

    public function store_demande(Request $request)
    {
        try {
            $validated = $request->validate([
                'societe'        => 'required|string|max:255',
                'adresse'        => 'nullable|string|max:255',
                'raisonsocial'   => 'nullable|string|max:255',
                'rccm'           => 'nullable|string|max:255',
                'ville'          => 'nullable|string|max:255',
                'activite'       => 'required|string|max:255',

                'username'       => 'nullable|string|max:255',
                'expediteur'     => 'nullable|string|max:11',
                'nbcompte'       => 'nullable|integer|min:0',
                'montant'        => 'nullable|numeric|min:0',

                'nom'            => 'nullable|string|max:255',
                'fonction'       => 'nullable|string|max:255',
                'tel'            => 'nullable|string|max:50',
                'email'          => 'nullable|email|max:255',

                'complementaire' => 'nullable|string',
                'captcha'        => 'required|string',
                'validation'     => 'accepted',
            ]);

            $submittedCaptcha = trim((string) $request->input('captcha'));
            $expectedCaptcha = trim((string) Session::get('demande_captcha'));

            if ($expectedCaptcha === '' || $submittedCaptcha !== $expectedCaptcha) {
                return back()
                    ->withInput()
                    ->withErrors(['captcha' => 'Le code de sécurité est incorrect.']);
            }

            // Checkbox
            $validated['validation'] = true;

            try {
                // Sauvegarde
                $demande = Demande::create($validated);

                $this->emailService->SendEmailToAdmin($demande);
                Session::forget('demande_captcha');
            } catch (\Exception $e) {
                Log::error('Erreur enregistrement ou envoi mail demande : ' . $e->getMessage());

                return back()
                    ->withInput()
                    ->with('error', 'Une erreur est survenue lors de la sauvegarde de la demande.');
            }

            return redirect()
                ->back()
                ->with('success', 'Votre demande a été envoyée avec succès !');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withInput()->withErrors($e->errors());
        } catch (\Exception $e) {
            Log::error('Erreur générale store_demande : ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Une erreur inattendue est survenue, veuillez réessayer.');
        }
    }
}
