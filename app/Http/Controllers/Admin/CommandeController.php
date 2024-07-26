<?php

namespace App\Http\Controllers\Admin;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommandeController extends Controller
{
    public function  index() {
        // Récupérer toutes les commandes avec les informations des utilisateurs et des produits
        $commandes = Commande::with('users', 'products')->paginate();
       
    
        return view('admin.commandes.index',compact('commandes'));

        
   }
//  FONCTION POUR UPDATE UNE COMMANDE
   public function update(Request $request,Commande $commande)
   {
    $request->validate([
        'status' => 'required|string|max:255',
    ]);
       $commande->status = $request->status; 
       $commande->save();

       return redirect()->route('admin.commandes.index')->with('success', 'Commande modifier avec succès');
   }

//    FONCTION POUR AFFICHER LE FORM EDITION
   public function edit(Commande $commande)
   {

   return view('admin.commandes.edit', compact('commande'));
   
   }
}
