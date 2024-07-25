<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function index () {
        $users = User::all();
        $totalUsers = User::count();
        return view("admin.utilisateurs.index", ['users' => $users, 'totalUsers' => $totalUsers]);
       

    }

    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.utilisateurs.index')->with('success', 'Utilisateur supprimé avec succès');
    }
}
