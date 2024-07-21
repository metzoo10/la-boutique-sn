<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomCateg' => 'required|string|max:255|unique:categories',
        ]);

        Category::create([
            'nomCateg' => $request->nomCateg,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Catégorie créée avec succès');
    }

    public function edit($id)
    {
        $categorie = Category::findOrFail($id);
        return view('admin.categories.edit', compact('categorie'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomCateg' => 'required|string|max:255|unique:categories',
        ]);

        $categorie = Category::findOrFail($id);
        $categorie->update([
            'nomCateg' => $request->nomCateg,
        ]);
      

        return redirect()->route('admin.categories.index')->with('success', 'Catégorie mise à jour avec succès');
    }

    public function destroy($id)
    {
        $categorie = Category::findOrFail($id);
        $categorie->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Catégorie supprimée avec succès');
    }
}

