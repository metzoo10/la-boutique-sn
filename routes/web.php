<?php

use Illuminate\Support\Facades\Route;

Route::get('/accueil', function () {
    return view('accueil');
});
Route::redirect('/', '/accueil');

Route::get('/boutique', function () {
    return view('boutique');
});
Route::get('/about', function () {
    return view('a-propos');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/panier', function () {
    return view('panier');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/return-policy', function () {
    return view('return-policy');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/compte', function () {
    return view('compte');
});