<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Produit;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function addToWishlist($id)
    {
        $produit = Produit::findOrFail($id);
        $wishlist = Session::get('wishlist', []);
      

        if (isset($wishlist[$id])) {
            $wishlist[$id];
        } else {
            $wishlist[$id] = [
                "nom" => $produit->nomProd,
                "stock" => $produit->stock,
                "prix" => $produit->prix,
                "description" => $produit->description,
                "info" => $produit->info,
                "image" => $produit->image,
               
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
