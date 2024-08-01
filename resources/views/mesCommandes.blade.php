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
    
		
		<div class="h5 pb-2 mt-2 mb-4 text-uppercase text-muted border-bottom border-secondary">Produits commandés</div>

		@if($commandes->isEmpty())
		<p>Vous n'avez pas encore passé de commandes.</p>
	@else
		<table class="table table-striped table-primary table-hover"> 
			<thead>
				<tr>
					<th>ID de la commande</th>
					<th>Date</th>
					<th>Produits</th>
					<th>Status</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach($commandes as $commande)
					<tr>
						<td>{{ $commande->id }}</td>
						<td>{{ $commande->created_at->format('d/m/Y') }}</td>
						<td>
							@foreach($commande->products as $produit)
	
							<img src="{{ asset( $produit->image)}}" alt="" style="width: 50px; heith:50px; margin-left: 10px">	

							@endforeach
						</td>
						<td>{{ $commande->status  }} fcfa</td>
						<td>{{ $commande->montant_total  }} fcfa</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif
	</div>
	
@endsection