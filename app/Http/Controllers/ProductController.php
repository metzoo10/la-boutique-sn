<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    // Fonction "show" avec paramètre $id qui récupère dans un tableau compact, les produits par leurs id.

    public function show($id)
    {
        $produit = Product::find($id);

        return view('detail', compact('produit'));
    }

    // Fonction "index" avec la méthode Request qui récupère tous les produits 

    public function index(Request $request)
    {
        // utilise les conditions switch pour faire des tris par catégorie, nom et prix.
        $query = Product::query();

        if ($request->has('sort')) {
            $sortOption = $request->input('sort');
            switch ($sortOption) {
                case 'categorie_asc':
                    $query->orderBy('categorie', 'asc');
                    break;
                case 'categorie_desc':
                    $query->orderBy('categorie', 'desc');
                    break;
                case 'prix_asc':
                    $query->orderBy('prix', 'asc');
                    break;
                case 'prix_desc':
                    $query->orderBy('prix', 'desc');
                    break;
                case 'nom_asc':
                    $query->orderBy('nom', 'asc');
                    break;
                case 'nom_desc':
                    $query->orderBy('nom', 'desc');
                    break;
            }
        }

        // enregistrer la requête dans $produits puis crée une pagination de 12 produits par page avec "paginate".
        $produits = $query->paginate(12);

        // récupère les catégories de manière distincte.
        $categories = Product::select('categorie')->distinct()->get();

        // envoie un tableau des résultats de requête à la vue "Boutique".
        return view('boutique', compact('produits' ,'categories'));
    }
}
