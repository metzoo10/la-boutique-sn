@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Résultats de la recherche')
@section('content')
	<!-- Page de résultat(s) de recherche -->
	
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
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Résultats de la recherche</li>
	  		</ol>
		</nav>
	</div>

	<div class="container mt-5 mb-4">
		<h3 class="mt-2 mb-5">Résultats de la recherche :</h3>

		@if($produits->isEmpty())
			<p class="mb-4">Aucun produit trouvé.</p>
		@else
			<div class="row">
				@foreach($produits as $produit)
					<div class="col-md-4 mb-4">
						<div class="card h-100">
							<img src="{{ $produit->image }}" alt="{{ $produit->nom }}" class="card-img-top">
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
		@endif
	</div>
@endsection