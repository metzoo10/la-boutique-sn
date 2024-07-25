@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Liste d\'envies')
@section('content')
	<!-- Page de la liste des souhaits -->

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
	    		<li class="breadcrumb-item"><a class="text-info text-uppercase text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Liste d'envies</li>
	  		</ol>
		</nav>
	</div>

	<div class="container cart-container mb-4 mt-5">
		<h3>Votre liste d'envies</h3>

		@auth
		{{-- Condition si le wishlist n'est pas vide, afficher le contenu --}}
		@if(count($wishlist) > 0)
		<table class="mt-2">
			<thead>
				<tr>
					<th>Produit</th>
					<th>Nom</th>
					<th>Prix</th>
					<th>Voir détail</th>
				</tr>
			</thead>
			<tbody>
				{{-- Boucle foreach pour afficher tout produit contenu sur le wishlist --}}
				@foreach($wishlist as $id => $details)
				<tr>
					
					<td><img src="{{ $details['image'] }}" alt="{{ $details['nom'] }}" width="50" height="50"></td>
					<td>{{ $details['nom'] }}</td>
					<td>{{ $details['prix'] }} FCFA</td>
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
						<form action="{{ route('wishlist.remove', $id) }}" method="POST">
							@csrf
							<button type="submit" class="btn btn-outline-danger">Supprimer</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{-- Condition else si le wishlist ne contient pas de produit --}}
		@else
			<div class="d-flex justify-content-center align-items-center mb-3" style="height: 80px;">
				<div class="bg-white text-white d-flex justify-content-center align-items-center rounded-circle" style="width: 80px; height: 80px;">
					<i class="fa-solid fa-heart fs-2 text-info"></i>
				</div>
			</div>
			<p class="text-center fw-bold mt-2">Votre liste d'envies est vide !</p>
			<p class="text-center">Vous avez trouvé quelque chose que vous aimez ?<br> Tapez sur le bouton "Ajouter à la liste d'envies" en-dessous de l'article pour l'ajouter à votre liste d'envies!<br> Tous vos articles sauvegardés apparaîtront ici.</p>
			<div class="d-grid gap-2 col-6 mx-auto mt-5 mb-4">
				<a href="/boutique" class="btn btn-info">Continuer vos achats</a>
			</div>
		@endif

		@endauth

		@guest
			<div class="d-flex justify-content-center align-items-center mb-3" style="height: 80px;">
				<div class="bg-white text-white d-flex justify-content-center align-items-center rounded-circle" style="width: 80px; height: 80px;">
					<i class="fa-solid fa-circle-exclamation fs-2 text-info"></i>
				</div>
			</div>
			<p class="text-center fw-bold mt-2">Vous n'êtes pas connecté(e) !</p>
			<p class="text-center">Connectez-vous et parcourez notre boutique et catégories pour découvrir nos meilleures offres et produits !</p>
			<div class="d-grid gap-2 col-6 mx-auto mt-5 mb-4">
				<a href="/login" class="btn btn-info">Connectez-vous</a>
			</div>
		@endguest
	</div>
@endsection