<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\CommandeProduit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ClientCommandeController extends Controller
{
    //
    public function index(Request $request)
    {
        $cartItems = Session::get('cart', []);
        
        return view('checkout', compact('cartItems'));
    }

    public function store(Request $request)
    {
       
        

        // Récupérer le panier de la session
        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->back()->with('error', 'Votre panier est vide.');
        }
        
        

        // Calculer le total de la commande
        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['prix'] * $item['quantity']);
        }, 0);

        // Créer la commande
        $order = Commande::create([
            'user_id' => Auth::id(),
            'montant_total' => $total,
            'status' => 'En attente',
        ]);


        // Ajouter les articles à la commande
        foreach ($cart as $item) {
            CommandeProduit::create([
                'commande_id' => $order->id,
                'produit_id' =>$item['produit_id'],
                'quantity' => $item['quantity'],
                'prix' => $item['prix'],
            ]);
        }
     
        // Vider le panier
        session()->forget('cart');

        return redirect()->route('accueil')->with('success', 'Votre commande a été passée avec succès.');
    }

    public function myCommande()
    {
        $orders = Commande::all();
        return view('mesCommandes',compact('orders'));
    }

   
}
