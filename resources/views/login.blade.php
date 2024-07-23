@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Se connecter')
@section('content')
	<!-- Page de connexion -->

	@if(session('register_success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('register_success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="container mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="{{route('accueil')}}">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Se connecter</li>
	  		</ol>
		</nav>
	</div>

	<div class="container mt-5 mb-5 border border-secondary py-4">
		<div class="h5 pb-2 mt-2 mb-4 text-uppercase text-muted border-bottom border-secondary">Connectez-vous à votre compte</div>
		<form method="POST" action="{{route('auth.Formlogin')}}">
			@csrf
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label fw-light mb-3">Adresse e-mail </label>
				<input type="email" name="email" class="form-control border-info" id="exampleInputEmail1" value="{{old('email')}}" placeholder="Tapez votre adresse e-mail">
				@error('email')
				{{$message}}
					
				@enderror
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label fw-light mb-3">Mot de passe </label>
				<input type="password" name="password" class="form-control border-info" id="exampleInputPassword1" placeholder="********">
				@error('password')
				{{$message}}
					
				@enderror
			</div>
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label for="exampleCheck1" class="form-check-label">Se souvenir de moi</label>
			</div>
			<button type="submit" class="btn btn-info mt-4 mb-3">Se connecter</button>
		</form>
	</div>
@endsection