<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UtilisateurController;
use App\Http\Controllers\Admin\CommandeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ClientCommandeController;

// Routage de la page d'accueil
Route::get('/accueil', [ProduitController::class, 'featured'])->name('accueil');

// Routage de redirection de la page d'accueil
Route::redirect('/', '/accueil');

// Routage de la page de Résultats de la recherche "search"
Route::get('/search', [ProduitController::class, 'search'])->name('produits.search');

// Routage de la page "Boutique" avec la fonction "index" qui récupère tous les produits
Route::get('/boutique', [ProduitController::class, 'index'])->name('boutique.index');

// Routage de la page de détail d'un produit avec comme paramètre, son id
Route::get('/detail/{id}', [ProduitController::class, 'show'])->name('detail');

// Routage de la page à propos
Route::get('/about', function () {
    return view('about');
});

// Routage de la page de commande
Route::get('/checkout', [ClientCommandeController::class, 'index'])->name('checkout')->middleware('auth','client');
Route::get('/checkout-validation', [ClientCommandeController::class, 'store'])->name('checkoutValid')->middleware('auth','client');

// Routage de la page de contact
Route::get('/contact', function () {
    return view('contact');
});

// Route pour traiter le formulaire de contact
Route::post('/contact', [ContactController::class, 'update'])->name('contact.update');

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
Route::get('/login', [AuthController::class,'Formlogin'])->name('auth.Formlogin')->middleware('guest');
Route::post('/login', [AuthController::class,'traitementLogin'])->name('auth.traitementLogin')->middleware('guest');

// ROUTAGE DE DECONNECTION
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

// Routage de la page d'inscription
Route::get('/register',  [AuthController::class, 'formRegister'])->name('auth.formRegister')->middleware('guest');
Route::post('/register',  [AuthController::class, 'inscription'])->name('auth.inscription')->middleware('guest');


// Routage de la page de confidentialité
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

// Routage de la page de retours
Route::get('/return-policy', function () {
    return view('return-policy');
});

// Routage de la page des termes et conditions
Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

// Routage de la page de compte
Route::get('/compte', [AuthController::class, 'Moncompte'])->name('compte')->middleware('client','auth');

// ROUTE POUR VISUALISER SES COMMANDES FAITES
Route::get('/mes-commande', [ClientCommandeController::class, 'myCommande'])->name('mesCommandes')->middleware('client','auth');


// Routage de la page de catégories avec la fonction "show" qui gràce à l'id recupère le nom de la catégorie
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');



// ADMIN
    Route::middleware(['admin','auth'])->prefix('admin/')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        // ROUTE CATEGORY
    Route::get('categories', [CategorieController::class, 'index'])->name('admin.categories.index');
    Route::get('createCateg', [CategorieController::class, 'create'])->name('admin.categories.create');
    Route::get('editCateg/{category}', [CategorieController::class, 'edit'])->name('admin.categories.edit');
    Route::post('storeCateg', [CategorieController::class, 'store'])->name('admin.categories.store');
    Route::put('updateCateg/{category}', [CategorieController::class, 'update'])->name('admin.categories.update');
    Route::delete('/destroyCateg/{category}', [CategorieController::class, 'destroy'])->name('admin.categories.destroy');

    // ROUTE PRODUIT
    Route::get('/produits', [ProductController::class,'index'])->name('admin.produits.index');
    Route::get('/createProd', [ProductController::class,'create'])->name('admin.produits.create');
    Route::get('/storeProd', [ProductController::class,'store'])->name('admin.produits.store');
    Route::get('/editProd/{produit}', [ProductController::class,'edit'])->name('admin.produits.edit');
    Route::delete('/destroyProd/{produit}', [ProductController::class,'destroy'])->name('admin.produits.destroy');
    Route::put('/updateProd/{produit}', [ProductController::class,'update'])->name('admin.produits.update');

    // ROUTE POUR COMMANDES
    Route::get('/commandes', [CommandeController::class, 'index'])->name('admin.commandes.index');
    Route::get('/commandes/{commande}', [CommandeController::class, 'edit'])->name('admin.commandes.edit');
    Route::put('/commandes/{commande}/update', [CommandeController::class, 'update'])->name('admin.commandes.update');
   

   

    // ROUTE POUR UTILISATEURS
    Route::get('/utilisateurs', [UtilisateurController::class, 'index'])->name('admin.utilisateurs.index');
    Route::get('/utilisateurs/{id}', [UtilisateurController::class, 'destroyUser'])->name('admin.utilisateurs.destroyUser');

    });




