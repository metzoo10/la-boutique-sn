<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Termwind\Components\Dd;

class ProductController extends Controller
{
    public function index()
{
    // Récupère tous les produits avec leurs catégories associées
    $produits = Produit::with('categories')->paginate();

    // Retourne la vue pour afficher la liste des produits avec les données des produits
    return view('admin.produits.index', compact('produits'));
}



public function create()
{
    // Récupère toutes les catégories
    $categories = Category::all();

    // Retourne la vue pour créer un nouveau produit avec les données des catégories
    return view('admin.produits.create', compact('categories'));
}



    public function store(Request $request)
{
    // Valide les données de la requête
    $request->validate([
        'nom' => 'required|string|max:255', // Le nom du produit est requis, doit être une chaîne de caractères et avoir une longueur maximale de 255 caractères
        'prix' => 'required|numeric', // Le prix du produit est requis et doit être un nombre
        'stock' => 'required|string|max:255', // Le stock du produit est requis, doit être une chaîne de caractères et avoir une longueur maximale de 255 caractères
        'descript' => 'required|string|max:1000', // La description du produit est requise, doit être une chaîne de caractères et avoir une longueur maximale de 255 caractères
        'info' => 'required|string|max:1000', // Les informations du produit sont requises, doivent être une chaîne de caractères et avoir une longueur maximale de 255 caractères
        'categorie_id' => 'required|exists:categories,id', // La catégorie est requise et doit exister dans la table des catégories
        'image' => 'require|image|mimes:jpeg,png,jpg,gif|max:2048', // L'image est optionnelle mais si présente, doit être un fichier image de type jpeg, png, jpg ou gif, et ne doit pas dépasser 2 Mo
    ]);

    // Récupère toutes les données validées de la requête
    $data = $request->all();

    // Génère un nouveau nom de fichier pour l'image en utilisant le timestamp actuel
    $fileName = time() . $request->file('image')->getClientOriginalName();
    
    // Stocke la nouvelle image dans le dossier 'images' du disque public
    $path = $request->file('image')->storeAs('images', $fileName, 'public');
    
    // Met à jour le chemin de l'image dans les données
    $data['image'] = '/storage/' . $path;

    // Crée un nouveau produit avec les données fournies
    Produit::create([
        'nomProd' => $request->nom,
        'prix' => $request->prix,
        'stock' => $request->stock,
        'description' => $request->descript,
        'info' => $request->info,
        'image' => $data['image'],
        'category_id' => $request->categorie_id,
    ]);

    // Redirige l'utilisateur vers la liste des produits avec un message de succès
    return redirect()->route('admin.produits.index')->with('success', 'Produit créé avec succès');
}

  


    public function edit($id)
    {
        // Récupère le produit par son ID ou échoue si non trouvé
        $produit = Produit::findOrFail($id);
    
        // Récupère toutes les catégories
        $categories = Category::all();
    
        // Retourne la vue pour l'édition du produit avec les données du produit et les catégories
        return view('admin.produits.edit', compact('produit', 'categories'));
    }
    

    public function update(Request $request, $id)
{
    // Valide les données de la requête
    $data = $request->validate([
        'nom' => 'required|string|max:255', // Le nom du produit est requis, doit être une chaîne de caractères et avoir une longueur maximale de 255 caractères
        'prix' => 'required|numeric', // Le prix du produit est requis et doit être un nombre
        'categorie_id' => 'required|exists:categories,id', // La catégorie est requise et doit exister dans la table des catégories
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // L'image est optionnelle mais si présente, doit être un fichier image de type jpeg, png, jpg ou gif, et ne doit pas dépasser 2 Mo
    ]);

    // Récupère le produit par son ID ou échoue si non trouvé
    $produit = Produit::findOrFail($id);

    // Vérifie si une nouvelle image a été téléchargée
    if ($request->hasFile('image')) {
        // Si le produit a déjà une image, la supprime du stockage
        if ($produit->image) {
            Storage::disk('public')->delete($produit->image);
        }

        // Génère un nouveau nom de fichier pour l'image en utilisant le timestamp actuel
        $fileName = time() . $request->file('image')->getClientOriginalName();
        
        // Stocke la nouvelle image dans le dossier 'images' du disque public
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        
        // Met à jour le chemin de l'image dans les données
        $data['image'] = '/storage/' . $path;
        
        // Met à jour le produit avec les nouvelles données
        $produit->update([
            'nomProd' => $request->nom,
            'prix' => $request->prix,
            'image' => $data['image'],
            'category_id' => $request->categorie_id,
        ]);
    }

    // Redirige l'utilisateur vers la liste des produits avec un message de succès
    return redirect()->route('admin.produits.index')->with('success', 'Produit mis à jour avec succès');
}


public function destroy($id)
{
    // Récupère le produit par son ID ou échoue si non trouvé
    $produit = Produit::findOrFail($id);

    // Charge les catégories associées au produit (même si cette ligne ne semble pas nécessaire ici)
    $produit->categories;

    // Supprime le produit de la base de données
    $produit->delete();

    // Redirige l'utilisateur vers la liste des produits avec un message de succès
    return redirect()->route('admin.produits.index')->with('success', 'Produit supprimé avec succès');
}

}
