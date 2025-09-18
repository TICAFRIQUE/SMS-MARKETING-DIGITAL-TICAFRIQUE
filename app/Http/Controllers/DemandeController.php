<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Str;


class DemandeController extends Controller
{
    // demande de création de compte
    public function demande()
    {
        return view('fronts.sections.demande');
    }

    // store demande
    // store demande
    public function store_demande(Request $request)
    {
        $user = [
            'nom'   => $request['nom'],
            'email' => $request['email'],
        ];

        $validated = $request->validate([
            'societe'        => 'required|string|max:255',
            'adresse'        => 'nullable|string|max:255',
            'raisonsocial'   => 'nullable|string|max:255',
            'rccm'           => 'nullable|string|max:255',
            'ville'          => 'nullable|string|max:255',
            'activite'       => 'nullable|string|max:255',
            'username'       => 'required|string|max:50|unique:demandes,username',
            'expediteur'     => 'required|string|max:11',
            'nbcompte'       => 'required|integer|min:1',
            'montant'        => 'required|numeric|min:0',
            'nom'            => 'required|string|max:255',
            'fonction'       => 'required|string|max:255',
            'tel'            => 'required|string|max:50',
            'fax'            => 'nullable|string|max:50',
            'email'          => 'required|email|max:255',
            'complementaire' => 'nullable|string',
            'validation'     => 'accepted',
        ]);

        $validated['validation'] = $request->has('validation');
        $validated['id'] = Str::random(10);

        Demande::create($validated);

        try {
            // ========================
            // 1. Email client
            // ========================
            $token = $request->input('token');
            $htmlClient = View::make('emails.create_account', [
                'token' => $token,
                'user'  => $user
            ])->render();

            $mail = $this->initMailer();
            $mail->addAddress($request->email);
            $mail->Subject = 'E-mail de création de compte';
            $mail->Body    = $htmlClient;
            $mail->send();

            // ========================
            // 2. Email admin
            // ========================
            $htmlAdmin = View::make('emails.new_account', [
                'user' => $user,
                'data' => $validated,
            ])->render();

            $mailAdmin = $this->initMailer();
            $mailAdmin->addAddress('sangare.kassoum@ticafrique.com'); // 🔔 admin
            $mailAdmin->Subject = 'Nouvelle demande de création de compte';
            $mailAdmin->Body    = $htmlAdmin;
            $mailAdmin->send();
        } catch (Exception $e) {
            return back()->with('error', "Erreur lors de l'envoi : {$e->getMessage()}");
        }

        return redirect()->back()->with('success', 'Votre demande a été envoyée avec succès !');
    }

    /**
     * Initialisation rapide de PHPMailer pour éviter la repetition
     */
    private function initMailer()
    {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'mail.ticafrique.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '_mainaccount@ticafrique.com';
        $mail->Password   = env('SMTP_PASSWORD', 'Q!wg+wq@*#K6');
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';
        $mail->isHTML(true);
        $mail->setFrom('_mainaccount@ticafrique.com', config('app.name', 'Ticafrique'));
        return $mail;
    }
}
