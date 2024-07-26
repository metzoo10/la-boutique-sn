<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Commande;
use App\Models\Produit;

class DashboardController extends Controller
{
    

    public function index()
    {
         $totalCategory = Category::count();
         $totalProduit = Produit::count();
         $totalUser = User::count();
         $totals_command = Commande::count();
        return view("admin.dashboard", [
            'totalCategory' => $totalCategory, 'totalCategory',
            'totalProduit' => $totalProduit, 'totalProduit',
            'totalUser' => $totalUser, 'totalUser',
            'totals_command'=> $totals_command
        ]);
        

    }
}

