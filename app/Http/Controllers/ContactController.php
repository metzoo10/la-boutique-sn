<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function update(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Création d'une nouvelle entrée dans la table contacts
        Contact::create($validatedData);

        // Redirection avec un message de succès
        return redirect()->back()->with('contact_success', 'Votre message a été envoyé avec succès!');
    }
}
