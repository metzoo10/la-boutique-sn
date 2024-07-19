<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    // Fonction "featured" qui récupère 6 produits de manière aléatoire
    public function featured()
    {
        $produits = Product::inRandomOrder()->take(6)->get();

        return view('accueil', compact('produits'));
    }
    
    // Fonction "show" avec paramètre $id qui récupère dans un tableau compact, les produits par leurs id.

    public function show($id)
    {
        $produit = Produit::find($id);

        return view('detail', compact('produit'));
    }

    // Fonction "index" avec la méthode Request qui récupère tous les produits 

    public function index(Request $request)
    {


// recuperation des produits plus pagination
// $produits = Produit::paginate(9);


        // utilise les conditions switch pour faire des tris par catégorie, nom et prix.
        $query = Produit::with('categories');
  
        $sort = $request->input('sort', '');
        

        switch ($sort) {
            case 'categorie_asc':
                $query->orderBy('category_id', 'asc');
                break;
            case 'categorie_desc':
                $query->orderBy('category_id', 'desc');
                break;
            case 'prix_asc':
                $query->orderBy('prix', 'asc');
                break;
            case 'prix_desc':
                $query->orderBy('prix', 'desc');
                break;
            case 'nom_asc':
                $query->orderBy('nomProd', 'asc');
                break;
            case 'nom_desc':
                $query->orderBy('nomProd', 'desc');
                break;
            default:
                // Optionnel : définir un ordre par défaut
                $query->orderBy('nomProd', 'asc');
                break;
        }
        
        // if ($request->has('sort')) {
        //     $sortOption = $request->input('sort');
        //     switch ($sortOption) {
        //         case 'categorie_asc':
        //             $query->orderBy('category_id', 'asc');
        //             break;
        //         case 'categorie_desc':
        //             $query->orderBy('category_id', 'desc');
        //             break;
        //         case 'prix_asc':
        //             $query->orderBy('prix', 'asc');
        //             break;
        //         case 'prix_desc':
        //             $query->orderBy('prix', 'desc');
        //             break;
        //         case 'nom_asc':
        //             $query->orderBy('nom', 'asc');
        //             break;
        //         case 'nom_desc':
        //             $query->orderBy('nom', 'desc');
        //             break;
        //     }
        // }

        // enregistrer la requête dans $produits puis crée une pagination de 12 produits par page avec "paginate".
        $produits = $query->paginate(9);
        

        // récupère les catégories de manière distincte.
        // $categories = Produit::select('categorie')->distinct()->get();

        // envoie un tableau des résultats de requête à la vue "Boutique".
        return view('boutique', compact('produits','sort'));
    }

    // FONCTION DE RECHERCE 
    public function search(Request $request)
    {
        $query = $request->input('query');
        $produits = Produit::where('nomProd', 'LIKE', "%$query%")->get();

        return view('search', compact('produits'));
    }
    
}



