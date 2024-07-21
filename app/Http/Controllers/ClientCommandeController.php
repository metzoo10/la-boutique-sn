<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientCommandeController extends Controller
{
    //
    public function index()
    {
         return view('checkout');
    }


    public function store(Request $request)
    {
        $cart = Session::get('cart', []);
        // je vais continuer mais si tu es dispo alors fait le !!! mdr....
    }

   
}
