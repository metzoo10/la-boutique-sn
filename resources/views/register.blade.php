@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - S\'inscrire')
@section('content')
	<!-- Page de connexion -->

	<div class="container mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">S'inscrire</li>
	  		</ol>
		</nav>
	</div>

	<div class="container mt-5 mb-5 border border-secondary py-4">
		<div class="h5 pb-2 mt-2 mb-4 text-uppercase text-muted border-bottom border-secondary">Créer un compte</div>
		<div class="h6 mt-2 mb-4 text-secondary">Informations personnelles</div>
		<form method="POST" action="{{route('auth.inscription')}}">
			@csrf
			<div class="mb-3">
				<label for="exampleInputName1" class="form-label fw-light mb-3">Prénom & Nom<span class="text-info">*</span></label>
				<input type="text" name="name" class="form-control border-info" id="exampleInputName1" value="{{old('name')}}"placeholder="Tapez votre prénom et nom">
				@error('name')
				{{$message}}
					
				@enderror
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label fw-light mb-3">Adresse e-mail<span class="text-info">*</span></label>
				<input type="email" name="email" class="form-control border-info" id="exampleInputEmail1" value="{{old('email')}}" placeholder="Tapez votre adresse e-mail" aria-describedby="emailHelp">
				@error('email')
				{{$message}}
					
				@enderror
				<div id="emailHelp"  class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label fw-light mb-3">Mot de passe<span class="text-info">*</span></label>
				<input type="password"name="password" class="form-control border-info" id="exampleInputPassword1"  placeholder="********" aria-describedby="passwordHelp">
				@error('password')
				{{$message}}
					
				@enderror
				<div id="passwordHelp" class="form-text">
					Votre mot de passe doit comporter entre 8 et 20 caractères, contenir des lettres et des chiffres, et ne doit pas contenir d'espaces, de caractères spéciaux ou d'emoji.
				</div>
			</div>
			
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label for="exampleCheck1" class="form-check-label">Se souvenir de moi</label>
			</div>
			{{-- <div class="h6 mt-4 mb-4 text-uppercase fs-bold">Informations de connexion</div>
			<div class="row g-4">
				<div class="col-auto">
					<label for="exampleInputPassword2" class="form-label fw-light mb-3">Mot de passe<span class="text-info">*</span></label>
					<input type="password" class="form-control border-info" id="exampleInputPassword2" placeholder="Mot de passe">
				</div>
				<div class="col-auto">
					<label for="exampleInputPassword2" class="form-label fw-light mb-3">Confirmez le mot de passe<span class="text-info">*</span></label>
					<input type="password" class="form-control border-info" id="exampleInputPassword1" placeholder="Confirmez le mot de passe">
				</div>
			</div> --}}
			<button type="submit" class="btn btn-info mt-4 mb-3">Se connecter</button>
		</form>
	</div>
@endsection