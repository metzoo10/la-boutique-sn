@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - ' .$produit->nom)
@section('content')
	<!-- Page de détail de produit -->

	{{-- Condition si un produit est ajouté dans le panier ou sur la liste de souhaits, une alerte verte avec message sera affiché --}}
	@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif
	<div class="container mt-5 mb-3">
		<div class="row">
			{{-- Colonne image produit --}}
			<div class="col-md-4">
				<img src="/{{ $produit->image }}" alt="{{ $produit->nom }}" class="img-fluid">
			</div>
			{{-- Colonne nom, prix, stock, quantité, boutons ajout panier et ajout wishlist --}}
			<div class="col-md-4">
				<h5 class="border-bottom">{{ $produit->nom }}</h5>
				<p>{{ $produit->prix }} FCFA</p>
				<p class="fs-6">Disponibilité : <span class="text-info fw-bold">{{ $produit->stock }}</span></p>
				<div class="d-flex flex-column mb-3">
					<div class="quantity-input mt-2">
						<label class="mb-3" for="quantity">Quantité :</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<button class="btn btn-outline-secondary btn-minus" type="button">-</button>
							</div>
							<input type="text" class="form-control" id="quantity" value="1" readonly>
							<div class="input-group-append">
								<button class="btn btn-outline-secondary btn-plus">+</button>
							</div>
						</div>
					</div>
				</div>
				<div class="d-grid gap-2 mt-4">
					<a href="{{ route('cart.add', $produit->id) }}" class="btn btn-outline-info">
						Ajouter au panier
					</a>
				</div>
				<div class="mt-2 d-flex">
					<a href="{{ route('cart.add', $produit->id) }}" class="text-decoration-none text-info"><i class="fa fa-heart fs-6"></i> Ajouter à la liste de souhaits</a>
				</div>
			</div>
			{{-- Colonne informations --}}
			<div class="col-md-4">
				<div class="section-info">
					<div class="fs-3 mb-1 float-start">
						<i class="fas fa-shipping-fast text-info"></i>
					</div>
					<div class="text-end">
						<p class="text-uppercase fw-bold">Livraison gratuite</p>
						<p class="fst-italic fs-6">Commande de plus de 5000 FCFA</p>
					</div>
				</div>
				<div class="section-info">
					<div class="fs-3 mb-1 float-start text-info">
						<i class="fas fa-undo"></i>
					</div>
					<div class="text-end">
						<p class="text-uppercase fw-bold">Garantie</p>
						<p class="fst-italic fs-6">Remboursement sous 30 jours</p>
					</div>
				</div>
				<div class="section-info">
					<div class="fs-3 mb-1 float-start text-info">
						<i class="fas fa-shield-alt"></i>
					</div>
					<div class="text-end">
						<p class="text-uppercase fw-bold">Paiement sécurisé</p>
						<p class="fst-italic fs-6">Sécurisez votre paiement en ligne</p>
					</div>
				</div>
				<div class="section-info">
					<div class="fs-3 mb-1 float-start text-info">
						<i class="fas fa-headset"></i>
					</div>
					<div class="text-end">
						<p class="text-uppercase fw-bold">Assistance en ligne</p>
						<p class="fst-italic fs-6">24h/24 et 7j/7</p>
					</div>
				</div>
			</div>
		</div>
		{{-- Row avec deux colonnes description et informations détaillées --}}
		<div class="row mb-5">
			<div class="col-sm-6 mb-3 mb-sm-0">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Description</h5>
						<p class="card-text">{{ $produit->description }}</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informations additionnelles</h5>
						<p class="card-text">{{ $produit->info }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection