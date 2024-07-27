@extends('layout.main')
@section('title', 'La Boutique.sn votre boutique en ligne numéro 1 - Commande')
@section('content')
	<!-- Page de commande --> 
	
	<div class="container mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">Commande</li>
	  		</ol>
		</nav>
	</div>

	
<!--Force ma commit nakk -->
	<div class="container mt-5 mb-5">
		@if(count($orders) > 0)
		<div class="h5 pb-2 mt-2 mb-4 text-uppercase text-muted border-bottom border-secondary">Produits commandés</div>
			<table class="mt-2 mb-4">
				<thead>
					<tr>
						<th>ID de la commande</th>
						<th>État</th>
						<th>Montant total</th>
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $order)
					<tr>
						<td>{{ $order->id }}</td>
						<td>{{ $order->status }}</td>
						<td>{{ $order->montant_total }} fcfa</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@else
				<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
					<h1>Aucune commande n'a été passée !</h1>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
		@endif

		
	
@endsection