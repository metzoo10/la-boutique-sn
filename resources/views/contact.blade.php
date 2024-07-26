@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Contactez-nous')
@section('content')
	<!-- Page de contact -->

  <div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Accueil</a></li>
          <li class="breadcrumb-item active text-uppercase" aria-current="page">Contact</li>
        </ol>
    </nav>
  </div>
  <div class="container mt-5 mb-5 border border-secondary py-4">
    <div class="h5 pb-2 mt-2 mb-4 text-uppercase text-muted border-bottom border-secondary">Formulaire de contact</div>
    <div class="h6 pb-2 mt-2 mb-4 text-muted">Vous souhaitez nous contacter ? Remplissez ce formulaire et laissez-nous votre message !</div>
    <form>
        <div class="form-floating mb-3">
            <input class="form-control" placeholder="Entrer votre nom et prénom" id="floatingInput">
            <label for="floatingInput">Prénom & Nom</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Adresse mail</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Message</label>
        </div>
        <button type="submit" class="btn btn-info mt-4 mb-3">Envoyer</button>
    </form>
  </div>
@endsection