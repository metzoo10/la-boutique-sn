<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // FONCTION POUR AFFICHER FORMULAIRE DE CONNEXION

    public function Formlogin()
    {
        
        return view('login'); 
    }

// FONCTION POUR LE TRAITEMENT DE LA CONNEXION DU CLIENT
    public function traitementLogin(LoginRequest $request)
    {
        // VALIDATION DES DONNEES ENTRER AU NIVEAU DU FORMULAIRE GRACE AU "LoginRequest"
        $user_a_verifier = $request->validated();
      
// VERIFIER SI EXISTE CE USER OU CLIENT DANS NOTRE DB
     if ( Auth::attempt($user_a_verifier)) {
    //    SI OUI ON CREE UNE SESSION
        $request->session()->regenerate();
// REDIRECTION VERS LA PAGE DEMANDER OUBIEN LA DIREGER VERS BOUTIQUE
        return redirect()->intended(route('boutique.index'))->with('connexion_success',' ,Vous etes connecter avec success');

     } 
    //  SINON REDIRECTION SUR LA PAGE  
     return to_route('auth.Formlogin')->withErrors([
        'email'=>"email invalide"
     ])->onlyInput('email');
        
    }


    // FONCTION POUR AFFICHER FORMULAIRE INSCRIPTION  DU CLIENT
    public function formRegister()
    {
        return view('register');
    }


// FONCTION POUR LE TRAITEMENT DE L'INSCRIPTION  DU CLIENT
    public function inscription( RegisterRequest $request)
    {
        
        // VALIDATION DES DONNEES ENTRER AU NIVEAU DU FORMULAIRE GRACE AU "RegisterRequest"
       $validator = $request->validated();
       

        // creation ou insertion du client ou user 
        
            User::create([
            'name' => $request->name,
            'email' => $request->email,
            'adresse' =>$request->adresse,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            
        ]);
// REDIRECTION VERS LA PAGE de connexion
         return redirect()->intended(route('auth.Formlogin'))->with('register_success','Votre inscription est réussie');;

        
    }

    // FONCTION POUR DECONNEXION
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('alert_deconn','Vous vous etes deconnecter');
    }

    public function Moncompte()
    {
        
        return view('compte');
    }

}
