@extends('admin.layout')

@section('title', 'Catégories')

@section('content')
    {{-- <h2>LES COMMANDES CLIENTS</h2>
    <section class="d-flex align-items-center justify-content-center">
        <img width:"250" height="250" src="https://www.kindpng.com/picc/m/289-2892204_your-cart-is-empty-empty-cart-icon-png.png" alt="">
    </section> --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>Toutes les Commandes</h1>

    @if($commandes->isEmpty())
        <p>Aucune commande trouvée.</p>
    @else
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Client_id</th>
                    <th>Total</th>
                    <th>Statut</th>
                    <th>Date</th>
                    <th>Produits</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                {{-- AFFICHER TOUS LES COMMANDES --}}
                @foreach($commandes as $commande)
                
                    <tr>
                        <td>{{ $commande->id }}</td>
                        <td>{{ $commande->user_id }}</td>
                        <td>{{ $commande->total }} fcfa</td>
                        <td>{{ $commande->status}}</td>
                        <td>{{ $commande->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            {{-- AFFICHER LE NOM DU PRODUIT COMMANDE EN UTILISANT LA RELATION --}}
                            <ul>
                                @foreach($commande->products as $product)
                                    <li>{{ $product->nomProd }} (x{{ $product->quantity }})</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="{{ route('admin.commandes.edit', $commande) }}" class="btn btn-warning">Modifier</a>
                            
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $commandes->links() }}
    @endif
</div>
@endsection
