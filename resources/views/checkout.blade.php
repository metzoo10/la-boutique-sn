@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Commande')
@section('content')
	<!-- Page de commande --> 
	
	<div class="container mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Commande</li>
	  		</ol>
		</nav>
	</div>

	@auth
<!--Force ma commit nakk -->
	<div class="container mt-5 mb-5">
		
		@if(count($cartItems) > 0)
		<div class="h5 pb-2 mt-2 mb-4 text-uppercase text-muted border-bottom border-secondary">Résumé de la commande</div>
		<table class="mt-2 mb-4">
			<thead>
				<tr>
					<th>Produit</th>
					<th>Nom</th>
					<th>Quantité</th>
					<th>Prix</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				{{-- Boucle foreach pour afficher tout produit contenu sur le panier --}}
				@foreach($cartItems as $id => $details)
				<tr>
					<td><img src="{{ $details['image'] }}" alt="{{ $details['nom'] }}" width="50" height="50"></td>
					<td>{{ $details['nom'] }}</td>
					<td>{{ $details['quantity'] }}</td>
					<td>{{ $details['prix'] }} FCFA</td>
					<td>{{ $details['prix'] * $details['quantity'] }} FCFA</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif

		<div class="h5 pb-2 mt-2 mb-4 text-uppercase text-muted border-bottom border-secondary">Adresse de facturation</div>
		<form class="row g-3" method="get" action="{{route('checkoutValid')}}">
			@method('POST')
			@csrf
		  <div class="col-md-6">
		    <label for="inputNom4" class="form-label fw-light">Nom<span class="text-info">*</span></label>
		    <input type="text" class="form-control" id="inputNom4"readonly value="{{Auth::user()->name}}">
		  </div>
		  
		  <div class="col-6">
		    <label for="inputAddress" class="form-label fw-light">Adresse<span class="text-info">*</span></label>
		    <input type="text" class="form-control" id="inputAddress" readonly value="{{Auth::user()->adresse}}">
		  </div>
		  <div class="col-6">
		    <label for="inputPhone2" class="form-label fw-light">Téléphone<span class="text-info">*</span></label>
		    <input type="text" class="form-control" id="inputPhone2" readonly value="{{Auth::user()->telephone}}">
		  </div>
		  
	
		<div class="row g-3 mt-5 mb-5 border border-secondary py-4">
			<div class="col-md-6 p-4">
				<div class="h6 mt-2 mb-4 text-muted border-bottom border-secondary">Méthode de paiement</div>
				<p class="border-bottom border-muted">Choisissez votre méthode de paiement :</p>
				<div class="form-check mt-4">
  					<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  					<label class="form-check-label" for="flexRadioDefault1">
    					Wave
  					</label>
  					<img class="rounded" src="/images/brands/wave.jpg" alt="Logo Wave" title="Wave" height="30px">
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
				  <label class="form-check-label" for="flexRadioDefault2">
				    Orange Money
				  </label>
				  <img class="rounded" src="/images/brands/orange_money.jpg" alt="Logo Orange_Money" title="Orange Money" height="30px">
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
				  <label class="form-check-label" for="flexRadioDefault3">
				    Visa
				  </label>
				  <img class="rounded" src="/images/brands/visa.png" alt="Logo Visa" title="Visa" height="30px">
				</div>
			</div>
			<div class="col-md-6 p-4">
				<div class="h6 mt-2 mb-4 text-muted border-bottom border-secondary">Méthode de livraison</div>
				<p class="border-bottom border-muted">Choisissez votre méthode de livraison :</p>
				<div class="form-check mt-4">
  					<input class="form-check-input" type="radio" name="flexShipping" id="flexShipping1">
  					<label class="form-check-label" for="flexShipping1">
    					Livraison à domicile
  					</label>
				</div>
				<div class="form-check">
  					<input class="form-check-input" type="radio" name="flexShipping" id="flexShipping2">
  					<label class="form-check-label" for="flexShipping2">
    					Point relais
  					</label>
				</div>
			</div>
			<div class="d-grid gap-2 col-6 mx-auto mt-4">
			  <button class="btn btn-info" type="submit">Passer votre commande</button>
			</div>
		</form>
		</div>
	</div>
		
	@endauth
	@guest
	<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
		<h1>Vous devez vous connecter pour effectuer votre commande !</h1>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@endguest

	
@endsection