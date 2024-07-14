@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Panier')
@section('content')
	<!-- Page de panier -->

	{{-- Condition si un produit est ajouté dans le wishlist ou sur la liste de souhaits, une alerte verte avec message sera affiché --}}
	@if(session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="container mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Panier</li>
	  		</ol>
		</nav>
	</div>

	<div class="container cart-container mb-4 mt-5">
		<h3>Votre Panier</h3>
		{{-- Condition si le panier n'est pas vide, afficher le contenu --}}
		@if(count($cart) > 0)
		<table class="mt-2">
			<thead>
				<tr>
					<th>Produit</th>
					<th>Nom</th>
					<th>Quantité</th>
					<th>Prix</th>
					<th>Total</th>
					<th>Voir détail</th>
				</tr>
			</thead>
			<tbody>
				{{-- Boucle foreach pour afficher tout produit contenu sur le panier --}}
				@foreach($cart as $id => $details)
				<tr>
					<td><img src="{{ $details['image'] }}" alt="{{ $details['nom'] }}" width="50" height="50"></td>
					<td>{{ $details['nom'] }}</td>
					<td>{{ $details['quantity'] }}</td>
					<td>{{ $details['prix'] }} FCFA</td>
					<td>{{ $details['prix'] * $details['quantity'] }} FCFA</td>
					<td>
						<a href="/detail/{{ $id }}" class="text-info fs-4"><i class="fa-solid fa-eye"></i></a>
					</td>
					<td>
						<a href="/checkout" class="btn btn-outline-success">
  							Acheter
  						</a>
					</td>
					<td>
						{{-- Bouton Supprimer avec formulaire contenant l'action de supprimer le produit par son id --}}
						<form action="{{ route('cart.remove', $id) }}" method="POST">
							@csrf
							<button type="submit" class="btn btn-outline-danger">Supprimer</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{-- Condition else si le panier ne contient pas de produit --}}
		@else
			<p class="text-center">Votre panier est vide.</p>
		@endif
	</div>
@endsection