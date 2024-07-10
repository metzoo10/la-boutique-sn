<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function produitsDigital()
    {
        $produitsDigital = Product::where('categorie', 'Électroniques')->get();

        return view('categories.digital', compact('produitsDigital'));
    }
    public function produitsMode()
    {
        $produitsMode = Product::where('categorie', 'Mode')->get();

        return view('categories.fashion', compact('produitsMode'));
    }
    public function produitsBeauty()
    {
        $produitsBeauty = Product::where('categorie', 'Beauté')->get();

        return view('categories.beauty', compact('produitsBeauty'));
    }
    public function produitsTools()
    {
        $produitsTools = Product::where('categorie', 'Bricolage')->get();

        return view('categories.tools', compact('produitsTools'));
    }
    public function produitsFurniture()
    {
        $produitsFurniture = Product::where('categorie', 'Meubles')->get();

        return view('categories.furniture', compact('produitsFurniture'));
    }
    public function produitsKidtoys()
    {
        $produitsKidtoys = Product::where('categorie', 'Jouets pour enfant')->get();

        return view('categories.kidtoys', compact('produitsKidtoys'));
    }
}
