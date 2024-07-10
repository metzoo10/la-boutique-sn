@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Catégorie : Jouets pour enfant')
@section('content')
	<!-- Page de la catégorie Jouets pour enfant -->

	{{-- Condition si un produit est ajouté dans le panier ou sur la liste de souhaits, une alerte verte avec message sera affiché --}}
	@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif
	<div class="container mt-5">
		<div class="d-flex justify-content-between align-items-center mb-4">
			<h3>Les produits de la catégorie : Jouets pour enfant</h3>
			<div>
				{{-- Formulaire avec option de tri par prix et nom, croissante ou décroissante --}}
				<form method="GET" action="{{ route('boutique.index') }}" class="mb-3">
					<select name="sort" class="form-select mr-2">
						<option value="">Trier par...</option>
						<optgroup label="Prix">
							<option value="prix_asc" {{ request('sort') == 'prix_asc' ? 'selected' : '' }}>Prix croissante</option>
							<option value="prix_desc" {{ request('sort') == 'prix_desc' ? 'selected' : '' }}>Prix décroissante</option>
						</optgroup>
						<optgroup label="Nom">
							<option value="nom_asc" {{ request('sort') == 'nom_asc' ? 'selected' : '' }}>Nom croissante</option>
							<option value="nom_desc" {{ request('sort') == 'nom_desc' ? 'selected' : '' }}>Nom décroissante</option>
						</optgroup>
					</select>
					<div class="mt-2">
						<button type="submit" class="btn btn-info">Filtrer</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			{{-- Boucle foreach pour afficher chaque produit de catégorie "Jouets pour enfant" --}}
			@foreach ($produitsKidtoys as $produit)
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<img src="{{ $produit->image }}" class="card-img-top" alt="{{ $produit->nom }}">
						<div class="card-body">
							<a class="text-muted text-decoration-none" href="/detail/{{ $produit->id }}">
								<h5 class="card-title">{{ $produit->nom }}</h5>
							</a>
							<p class="card-text fw-medium text-info">{{ $produit->prix }} FCFA</p>
							<p class="card-text fs-6 text-muted">{{ $produit->categorie }}</p>
						</div>
						<div class="card-footer">
							<div class="d-grid gap-2">
								<a href="{{ route('cart.add', $produit->id) }}" class="btn btn-outline-info">
  									Ajouter au panier
  								</a>
  								<a href="{{ route('wishlist.add', $produit->id) }}" class="btn btn-outline-primary">
  									Ajouter à la liste d'envies
  								</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection