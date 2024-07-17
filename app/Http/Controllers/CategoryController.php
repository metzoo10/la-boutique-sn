<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produit;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    
    public function produitsDigital()
    {
       
        $produitsDigital = Produit::where('category_id', 2)->get();

        return view('categories.digital', compact('produitsDigital'));
    }
    public function produitsMode()
    {
        $produitsMode = Produit::where('category_id', 1)->get();

        return view('categories.fashion', compact('produitsMode'));
    }
    public function produitsBeauty()
    {
        $produitsBeauty = Produit::where('category_id', 4)->get();

        return view('categories.beauty', compact('produitsBeauty'));
    }
    public function produitsTools()
    {
        $produitsTools = Produit::where('category_id', 5)->get();

        return view('categories.tools', compact('produitsTools'));
    }
    public function produitsFurniture()
    {
        $produitsFurniture = Produit::where('category_id', 3)->get();

        return view('categories.furniture', compact('produitsFurniture'));
    }
    public function produitsKidtoys()
    {
        $produitsKidtoys = Produit::where('category_id', 6)->get();

        return view('categories.kidtoys', compact('produitsKidtoys'));
    }
}
