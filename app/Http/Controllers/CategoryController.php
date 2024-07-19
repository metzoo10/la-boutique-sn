<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produit;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $categorie = Category::findOrFail($id);
   
        $produits = $categorie->produit;
        
        return view('categories.show', compact('categorie', 'produits'));
    }
}
