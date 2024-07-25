<!-- resources/views/admin/produits/index.blade.php -->

@extends('admin.layout')
@section('title', 'Produits')
@section('content')
    <h2 class="py-3 text-center">Listes des Produits</h2>
    <a href="{{ route('admin.produits.create') }}" class="btn btn-primary mb-4  ">Ajouter un Produit</a> 
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Image</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->prix }}</td>
                    @if ($produit->categories)
                    <td>	{{ $produit->categories->nomCateg }}</td>
							@else
                            <td><em>supprimer</em> </td>
							@endif
                 
                    <td><img src="{{ asset($produit->image)}}" alt=""style="heith:50px;width:50px" ></td>
                    <td>
                         <a href="{{ route('admin.produits.edit', $produit->id) }}" class="btn btn-warning">Éditer</a> 
                         <form action="{{route('admin.produits.destroy', $produit->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
        
    </table>
    <div class="text-center">{{$produits->links()}}</div>
    
@endsection
