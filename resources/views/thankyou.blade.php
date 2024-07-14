@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Merci !')
@section('content')
	<!-- Page de remerciement après commande -->

	<div class="container mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/checkout">Commande</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Merci!</li>
	  		</ol>
		</nav>
	</div>

	<h1>Nos produits arrivent bientôt !</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, fuga.</p>
@endsection