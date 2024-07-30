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

	<div class="container-fluid mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Résultats de la recherche</li>
	  		</ol>
		</nav>
	</div>

	<div class="container-fluid mt-5 mb-4">
		<h3 class="mt-2 mb-5">Résultats de la recherche :</h3>

		@if($produits->isEmpty())
			<p class="mb-4">Aucun produit trouvé.</p>
		@else
			<div class="row">
				<div class="layer"></div>
				@foreach($produits as $produit)
				<div class="col-md-3 mb-3 cards onover">
					<span class="fas fa-eye bg-info d-flex items-center justify-content-center align-items-center fs-5 rounded" title="Voir tout prés"></span>
					<div class="card bg-lighter" style="width: 18rem; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
							<a href="{{route('detail',$produit->id)}}"><img src="{{ $produit->image }}" class="card-img-top" alt="{{ $produit->nomProd }}"></a>	

							<div class="card-body bg-white">
								<a class="text-muted text-decoration-none" href="/detail/{{ $produit->id }}">
									<h5 class="card-title">{{ $produit->nomProd}}</h5>
								</a>
								<p class="card-text fw-medium text-info">{{ $produit->prix }} FCFA</p>
								<p class="card-text fs-6 text-muted">{{ $produit->categorie }}</p>
							</div>
							<div class="card-footer bg-white">
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