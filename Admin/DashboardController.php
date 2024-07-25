<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Produit;

class DashboardController extends Controller
{
    

    public function index()
    {
         $totalCategory = Category::count();
         $totalProduit = Produit::count();
         $totalUser = User::count();
        return view("admin.dashboard", [
            'totalCategory' => $totalCategory, 'totalCategory',
            'totalProduit' => $totalProduit, 'totalProduit',
            'totalUser' => $totalUser, 'totalUser']);
        return view('admin.dashboard');

    }
}

