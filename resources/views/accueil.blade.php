@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Accueil')
@section('content')
	<!-- Page d'accueil -->
	{{-- Condition si un produit est ajouté dans le wishlist ou sur la liste d'envies, une alerte verte avec message sera affiché --}}
	@if(session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif
	@if(session('alert_deconn'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('alert_deconn') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="container-fluid mt-5 mb-5">

		<div class="p-3 my-3 bg-info">
			<h5 class="m-0">Bienvenue chez <span class="text-uppercase">la boutique.sn</span> !</h5>
			<p class="m-0 mt-2">votre boutique en ligne numéro 1</p>
		</div>

		<!-- Caroussel slide pour faire défiler des bannières -->

		<div id="carouselExampleAutoplaying" class="carousel carousel-dark slide mb-5 mt-5" data-bs-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active text-center">
		    	<a href="{{ route('categories.show', 3) }}">
		      		<img src="/images/banner/10.png" class="img-fluid img-thumbnail" alt="...">
		      	</a>
		    </div>
		    <div class="carousel-item text-center">
		    	<a href="{{ route('categories.show', 2) }}">
		      		<img src="/images/banner/2.png" class="img-fluid img-thumbnail" alt="...">
		      	</a>
		    </div>
		    <div class="carousel-item text-center">
		    	<a href="{{ route('categories.show', 1) }}">
		      		<img src="/images/banner/3.png" class="img-fluid img-thumbnail" alt="...">
		      	</a>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>

		<!-- Section des produits populaires -->

		<div class="p-3 my-3 bg-info">
			<h5 class="m-0">Produits populaires</h5>
		</div>
		<div class="row">
			@foreach ($produits as $produit)
				<div class="col-md-3 mb-3">
					<div class="card" style="width: 18 rem;">
						<a href="{{route('detail',$produit->id)}}"><img src="{{asset($produit->image) }}" class="card-img-top" alt="{{ $produit->nomProd }}"></a>
						<div class="card-body">
							{{-- Lien qui amène vers la page de détail du produit avec son id comme paramètre --}}
							<a class="text-muted text-decoration-none" href="/detail/{{ $produit->id }}">
								<h5 class="card-title">{{ $produit->nomProd }}</h5>
							</a>
							<p class="card-text fw-medium text-info">{{ $produit->prix }} FCFA</p>
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

		<!-- Section offres -->

		<div class="p-3 my-3 bg-info">
			<h5 class="m-0">Découvrez nos offres du moment !</h5>
		</div>
		<div class="row p-3 gx-4 mt-4 mb-5">
			<div class="col">
				<a href="{{ route('categories.show', 1) }}">
					<img src="/images/banner/4.png" class="img-fluid border border-info" alt="">
				</a>
			</div>
			<div class="col">
				<a href="{{ route('categories.show', 4) }}">
					<img src="/images/banner/5.png" class="img-fluid border border-success" alt="">
				</a>
			</div>
		</div>
		<div class="row p-3 gx-4 mt-4 mb-5">
			<div class="col">
				<a href="{{ route('categories.show', 6) }}">
					<img src="/images/banner/6.png" class="img-fluid border border-danger" alt="">
				</a>
			</div>
			<div class="col">
				<a href="{{ route('categories.show', 2) }}">
					<img src="/images/banner/9.png" class="img-fluid border border-warning" alt="">
				</a>
			</div>
		</div>

		<!-- Section de toutes les catégories -->

		<div class="p-3 my-3 bg-info">
			<h5 class="m-0">Toutes les catégories</h5>
		</div>
		<div class="row p-4">
			<div class="col-md-4 mb-4">
				<div class="card" style="width: 22rem;">
					<a class="text-muted text-decoration-none link-info link-offset-2 link-opacity-25 link-opacity-100-hover" href="{{ route('categories.show', 1) }}">
						<img class="mx-auto" src="/images/categorie/6.png" alt="Image de produits électroniques." width="350px">
						<div class="card-body">
							<h6 class="card-title text-center">Électroniques</h6>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="card" style="width: 22rem">
					<a class="text-muted text-decoration-none link-info link-offset-2 link-opacity-25 link-opacity-100-hover" href="{{ route('categories.show', 2) }}">
						<img class="mx-auto" src="/images/categorie/2.png" alt="Image de quatre modèles hommes portant des vêtements colorés." width="350px">
						<div class="card-body">
							<h6 class="card-title text-center">Mode</h6>
						</div>
					</a>	
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="card" style="width: 22rem">
					<a class="text-muted text-decoration-none link-info link-offset-2 link-opacity-25 link-opacity-100-hover" href="{{ route('categories.show', 3) }}">
						<img class="mx-auto" src="/images/categorie/1.png" alt="Image d'un canapé gris avec coussins." width="350px">
						<div class="card-body">
							<h6 class="card-title text-center">Meubles</h6>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="row p-4">
			<div class="col-md-4 mb-4">
				<div class="card" style="width: 22rem">
					<a class="text-muted text-decoration-none link-info link-offset-2 link-opacity-25 link-opacity-100-hover" href="{{ route('categories.show', 4) }}">
						<img class="mx-auto" src="/images/categorie/4.png" alt="Image d'un bébé qui joue." width="350px">
						<div class="card-body">
							<h6 class="card-title text-center">Jouets pour enfant</h6>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="card" style="width: 22rem">
					<a class="text-muted text-decoration-none link-info link-offset-2 link-opacity-25 link-opacity-100-hover" href="{{ route('categories.show', 5) }}">
						<img class="mx-auto" src="/images/categorie/3.png" alt="Image de produits de beauté sur fond rose." width="350px">
						<div class="card-body">
							<h6 class="card-title text-center">Beauté</h6>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="card" style="width: 22rem">
					<a class="text-muted text-decoration-none link-info link-offset-2 link-opacity-25 link-opacity-100-hover" href="{{ route('categories.show', 6) }}">
						<img class="mx-auto" src="/images/categorie/5.png" alt="Image d'une boîte d'outils." width="350px">
						<div class="card-body">
							<h6 class="card-title text-center">Bricolage</h6>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection