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

	
	
@endsection