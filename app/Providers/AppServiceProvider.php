<?php

namespace App\Providers;
// Correction de l'erreur 
/**“Class ‘App\Providers\Schema’ not found” */
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Http\Composers\CartAndWishlistComposer;
use App\Http\Composers\CategoryComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        
        View::composer('component.navbar', CartAndWishlistComposer::class);
        
        View::composer('component.navbar', CategoryComposer::class);
        
        View::composer('accueil', CategoryComposer::class);
        // Correction de l'erreur
        /**
         * SQLSTATE[42000]: Syntax error or access violation: 1071 La clé est trop longue.
         * Longueur maximale: 1000 
         * * */
        Schema::defaultStringLength(191);
        /**
         * 
         */
    }
}
