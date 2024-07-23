<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $produit = Produit::findOrFail($id);
        
        
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nom" => $produit->nomProd,
                "quantity" => 1,
                "stock" => $produit->stock,
                "prix" => $produit->prix,
                "description" => $produit->description,
                "info" => $produit->info,
                "image" => $produit->image,
                "produit_id" =>$produit->id
                
            ];
        }

        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Produit ajouté au panier avec succès!');
    }
    public function showCart(Request $request)
    {
     
        $cart = Session::get('cart', []);
        return view('panier', compact('cart'));
    }
    public function removeFromCart($id)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Produit retiré du panier avec succès!');
    }
}
