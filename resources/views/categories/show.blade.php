@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Catégorie : ' .$categorie->nomCateg)
@section('content')
	<!-- Page de catégorie -->

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
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/boutique">Boutique</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">{{ $categorie->nomCateg }}</li>
	  		</ol>
		</nav>
	</div>

	<div class="container-fluid mt-5">
		<div class="d-flex justify-content-between align-items-center mb-4">
			<h3>Les produits de la catégorie : {{ $categorie->nomCateg }}</h3>
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
			<div class="layer"></div>
			{{-- Boucle foreach pour afficher chaque produit de catégorie "Beauté" --}}
			@foreach ($produits as $produit)
				<div class="col-md-3 mb-3 cards onover">
					<span class="fas fa-eye bg-info d-flex items-center justify-content-center align-items-center fs-5 rounded" title="Voir tout prés"></span>
					<div class="card bg-lighter" style="width: 18 rem; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
						<a href="{{route('detail',$produit->id)}}"><img src="{{asset($produit->image) }}" class="card-img-top" alt="{{ $produit->nomProd }}"></a>
						<div class="card-body bg-white">
							{{-- Lien qui amène vers la page de détail du produit avec son id comme paramètre --}}
							<a class="text-muted text-decoration-none" href="/detail/{{ $produit->id }}">
								<h5 class="card-title">{{ $produit->nomProd }}</h5>
							</a>
							<p class="card-text fw-medium text-info">{{ $produit->prix }} FCFA</p>
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
	</div>
@endsection