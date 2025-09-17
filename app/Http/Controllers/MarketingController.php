<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeContact;
use App\Models\Contact;

class MarketingController extends Controller
{
    //index
    public function index()
    {
        return view('index');
    }

    // sms
    public function sms()
    {
        return view('fronts.sections.sms');
    }

    // sms 2way
    public function way()
    {
        return view('fronts.sections.sms2way');
    }

    // sms_voice
    public function sms_voice()
    {
        return view('fronts.sections.smsVoice');
    }
    // contact
    public function contact()
    {
        return view('fronts.sections.contact');
    }

    public function store_contact(StoreContact $request)
    {
        // Les données validées
        $data = $request->validated();
        // création des données
        Contact::create($data);
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
