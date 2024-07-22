@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - ' .$produit->nomProd)
@section('content')
	<!-- Page de détail de produit -->

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
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/boutique">Boutique</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">{{ $produit->nomProd }}</li>
	  		</ol>
		</nav>
	</div>
	<div class="container mt-5 mb-3">
		<div class="row g-5">
			{{-- Colonne image produit --}}
			<div class="col-md-4">
				<img src="{{asset($produit->image) }}" alt="{{ $produit->nomProd }}" class="img-fluid">
			</div>
			{{-- Colonne nom, prix, stock, quantité, boutons ajout panier et ajout wishlist --}}
			<div class="col-md-4">
				<h5 class="border-bottom">{{ $produit->nomProd }}</h5>
				<p>{{ $produit->prix }} FCFA</p>
				<p class="fs-6">Disponibilité : <span class="text-info fw-bold">{{ $produit->stock }}</span></p>
				<div class="d-flex flex-column mb-3">
					<div class="quantity-input mt-2">
						<label class="mb-3" for="quantity">Quantité :</label>
						<div class="input-group">
							<span class="input-group-btn">
								<button class="quantity-left-minus btn btn-outline-info btn-number" type="button" data-type="minus" data-field="quantity">
									<i class="fa-solid fa-minus"></i>
								</button>
							</span>
							<input type="text" class="form-control input-number" id="quantity" name="quantity" value="1" min="1" max="100">
							<span class="input-group-btn">
								<button class="quantity-right-plus btn btn-outline-info btn-number" type="button" data-type="plus" data-field="quantity">
									<i class="fa-solid fa-plus"></i>
								</button>
							</span>
						</div>
					</div>
				</div>
				<div class="d-grid gap-2 mt-4">
					<a href="{{ route('cart.add', $produit->id) }}" class="btn btn-outline-info">
						Ajouter au panier
					</a>
				</div>
				<div class="mt-3 d-flex">
					<a href="{{ route('wishlist.add', $produit->id) }}" class="text-info"><i class="fa fa-heart fs-6"></i> Ajouter à la liste de souhaits</a>
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