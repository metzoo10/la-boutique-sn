<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function addToWishlist($id)
    {
        $produit = Product::findOrFail($id);
        $wishlist = Session::get('wishlist', []);

        if (isset($wishlist[$id])) {
            $wishlist[$id];
        } else {
            $wishlist[$id] = [
                "nom" => $produit->nom,
                "stock" => $produit->stock,
                "prix" => $produit->prix,
                "description" => $produit->description,
                "info" => $produit->info,
                "image" => $produit->image,
                "categorie" => $produit->categorie
            ];
        }

        Session::put('wishlist', $wishlist);
        return redirect()->back()->with('success', 'Produit ajouté à la liste des souhaits');
    }
    public function showWishlist()
    {
        $wishlist = Session::get('wishlist', []);
        return view('wishlist', compact('wishlist'));
    }
    public function removeFromWishlist($id)
    {
        $wishlist = Session::get('wishlist', []);

        if (isset($wishlist[$id])) {
            unset($wishlist[$id]);
            Session::put('wishlist', $wishlist);
        }

        return redirect()->back()->with('success', 'Produit retiré de la liste des souhaits avec succès!');
    }
}
