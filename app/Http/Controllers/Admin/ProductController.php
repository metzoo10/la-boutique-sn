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
        $produits = Produit::with('categories')->get();
        return view('admin.produits.index', compact('produits'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.produits.create', compact('categories'));
    }

    public function store(Request $request)
    {
       $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'stock'=> 'required|string|max:255',
            'descript'=> 'required|string|max:255',
            'info'=> 'required|string|max:255',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $data['image'] = '/storage/'.$path;

   
        

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('produits'), $imageName);

        Produit::create([
            'nomProd' => $request->nom,
            'prix' => $request->prix,
            'stock' => $request->stock,
            'description' => $request->descript,
            'info' => $request->info,
            'image' => $data['image'],
            'category_id' => $request->categorie_id,
           
        ]);

        return redirect()->route('admin.produits.index')->with('success', 'Produit créé avec succès');
    
    }

    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        $categories = Category::all();
        return view('admin.produits.edit', compact('produit', 'categories'));
    }

    public function update(Request $request, $id)
    {
        
       
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
      
        
        $produit = Produit::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($produit->image) {
                Storage::disk('public')->delete($produit->image);
            }

            $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $data['image'] = '/storage/'.$path;
           

            $produit->update([
                'nomProd' => $request->nom,
                'prix' => $request->prix,
                'image' => $data['image'],
                'category_id' => $request->categorie_id,
            ]);
        }
        

       
      

        return redirect()->route('admin.produits.index')->with('success', 'Produit mis à jour avec succès');
    }

    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->categories;
        $produit->delete();
        

        return redirect()->route('admin.produits.index')->with('success', 'Produit supprimé avec succès');
    }
}
