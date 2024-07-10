<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CategoryController;

// Routage de la page d'accueil
Route::get('/accueil', function () {
    return view('accueil');
});

// Routage de redirection de la page d'accueil
Route::redirect('/', '/accueil');

// Routage de la page "Boutique" avec la fonction "index" qui récupère tous les produits
Route::get('/boutique', [ProductController::class, 'index'])->name('boutique.index');

// Routage de la page de détail d'un produit avec comme paramètre, son id
Route::get('/detail/{id}', [ProductController::class, 'show']);

// Routage de la page à propos
Route::get('/about', function () {
    return view('a-propos');
});

// Routage de la page de commande
Route::get('/checkout', function () {
    return view('checkout');
});

// Routage de la page de contact
Route::get('/contact', function () {
    return view('contact');
});

// Routage de la page du "Panier" avec la fonction "showCart" qui affiche le contenu du panier
Route::get('/panier', [CartController::class, 'showCart'])->name('cart.show');

// Routage de la page du "Panier" avec la fonction "addToCart" qui ajoute le produit au panier
Route::get('/panier/ajouter/{id}', [CartController::class, 'addToCart'])->name('cart.add');

// Routage de la page du "Panier" avec la fonction "removeFromCart" qui enlève le produit du panier
Route::post('/panier/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Routage de la page du "Wishlist" avec la fonction "showWishlist" qui affiche le contenu de la liste de souhaits
Route::get('/wishlist', [WishlistController::class, 'showWishlist'])->name('wishlist.show');

// Routage de la page du "Wishlist" avec la fonction "addToWishlist" qui ajoute le produit à la liste de souhaits
Route::get('/wishlist/ajouter/{id}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');

// Routage de la page du "Wishlist" avec la fonction "removeFromWishlist" qui enlève le produit de la liste de souhaits
Route::post('/wishlist/remove/{id}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');

// Routage de la page de remerciement
Route::get('/thankyou', function () {
    return view('thankyou');
});

// Routage de la page de connexion
Route::get('/login', function () {
    return view('login');
});

// Routage de la page d'inscription
Route::get('/register', function () {
    return view('register');
});

// Routage de la page de confidentialité
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

// Routage de la page de retours
Route::get('/return-policy', function () {
    return view('return-policy');
});

// Routage de la page de compte
Route::get('/compte', function () {
    return view('compte');
});

// Routage de la page de catégorie "Beauté" avec la fonction "produitsBeauty" qui récupère tous les produits de catégories "Beauté"
Route::get('/beauty', [CategoryController::class, 'produitsBeauty']);

// Routage de la page de catégorie "Bricolage" avec la fonction "produitsTools" qui récupère tous les produits de catégories "Bricolage"
Route::get('/tools', [CategoryController::class, 'produitsTools']);

// Routage de la page de catégorie "Electroniques" avec la fonction "produitsDigital" qui récupère tous les produits de catégories "Electroniques"
Route::get('/digital', [CategoryController::class, 'produitsDigital']);

// Routage de la page de catégorie "Jouets pour enfant" avec la fonction "produitsKidtoys" qui récupère tous les produits de catégories "Jouets pour enfant"
Route::get('/kidtoys', [CategoryController::class, 'produitsKidtoys']);

// Routage de la page de catégorie "Meubles" avec la fonction "produitsFurniture" qui récupère tous les produits de catégories "Meubles"
Route::get('/furniture', [CategoryController::class, 'produitsFurniture']);

// Routage de la page de catégorie "Mode" avec la fonction "produitsMode" qui récupère tous les produits de catégories "Mode"
Route::get('/fashion', [CategoryController::class, 'produitsMode']);