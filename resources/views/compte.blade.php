@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Mon compte')
@section('content')
	<!-- Page de compte utilisateur -->

	<div class="container mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Compte</li>
				@auth <li class="breadcrumb-item active text-uppercase" aria-current="page">{{Auth::user()->name}}</li>@endauth
	  		</ol>
		</nav>
		
		
		
		
	</div>
	<div class="container mt-5 mb-5 border border-secondary py-4">
	@auth

	
		<div class="h5 pb-2 mt-2 mb-4 text-uppercase text-muted border-bottom border-secondary">Information personnel</div>
		<form class="row g-3">
		  <div class="col-md-6">
		    <label for="inputNom4" class="form-label fw-light">Nom & Prenom<span class="text-info"></span></label>
		    <input type="text" class="form-control" id="inputNom4" readonly value="{{Auth::user()->name}}">
		  </div>
		  <div class="col-md-6">
		    <label for="inputPrenom4" class="form-label fw-light">Email<span class="text-info"></span></label>
		    <input type="text" class="form-control" id="inputPrenom4"readonly value="{{Auth::user()->email}}">
		  </div>
		  <div class="col-6">
		    <label for="inputAddress" class="form-label fw-light">Adresse<span class="text-info"></span></label>
		    <input type="text" class="form-control" id="inputAddress"readonly value="{{Auth::user()->adresse}}">
		  </div>
		  <div class="col-6">
		    <label for="inputPhone2" class="form-label fw-light">Téléphone<span class="text-info"></span></label>
		    <input type="number" class="form-control" id="inputPhone2" value="{{Auth::user()->telephone}}" >
		  </div>
		  
		

		
		</form>
		</div>
	
		
	@endauth
	@guest
	<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
		<h1>Aucune information, svp connectez-vous</h1>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@endguest
</div>
	
	


	
	
@endsection
