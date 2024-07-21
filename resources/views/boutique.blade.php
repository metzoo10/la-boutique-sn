@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Boutique')
@section('content')
	<!-- Page de la boutique -->

	{{-- Condition si un produit est ajouté dans le wishlist ou sur la liste de souhaits, une alerte verte avec message sera affiché --}}
	@if(session('success'))
		<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif
	@if(session('connexion_success'))
		<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
		<h4>Bienvenu {{Auth::user()->name}} {{session('connexion_success') }} </h4>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="container mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Boutique</li>
	  		</ol>
		</nav>
	</div>
	

	<div class="container-fluid mt-5">
		<div class="d-flex justify-content-between align-items-center mb-4">
			<h3>Tous les produits</h3>
			<div>
				{{-- Formulaire de tri par catégorie, prix et nom (croissante ou décroissante) --}}
				<form method="GET" action="{{ route('boutique.index') }}" class="mb-3">
					<select name="sort" class="form-select mr-2">
						<option value="">Trier par...</option>
						<optgroup label="Catégorie">
							<option value="categorie_asc" {{ request('sort') == 'categorie_asc' ? 'selected' : '' }}>Catégorie croissante</option>
							<option value="categorie_desc" {{ request('sort') == 'categorie_desc' ? 'selected' : '' }}>Catégorie décroissante</option>
						</optgroup>
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
			{{-- Boucle foreach pour afficher tous les produits avec leur nom, image, prix et catégorie --}}
			@foreach ($produits as $produit)
			<div class="col-md-3 mb-3">
				<div class="card card_heit">
					<a href="{{route('detail',$produit->id)}}"><img src="{{asset($produit->image) }}" class="card-img-top" alt="{{ $produit->nomProd }}"></a>	
						<div class="card-body">
							{{-- Lien qui amène vers la page de détail du produit avec son id comme paramètre --}}
							<a class="text-muted text-decoration-none" href="/detail/{{ $produit->id }}">
								<h5 class="card-title">{{ $produit->nomProd }}</h5>
							</a>
							<p class="card-text fw-medium text-info">{{ $produit->prix }} FCFA</p>

							<p class="card-text fs-6 text-muted">@if ($produit->categories)
								{{ $produit->categories->nomCateg }} - 
							@else
								<em>Sans catégorie</em> - 
							@endif
						</p>
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
		{{-- Pagination avec links() --}}
		<div class="d-flex justify-content-center mb-3">
			{{ $produits->appends(['sort' => $sort])->links()}}
		</div>
	</div>
@endsection