<!-- resources/views/admin/produits/index.blade.php -->

@extends('admin.layout')
@section('title', 'Produits')
@section('content')
    <h2>Produits</h2>
    <a href="{{ route('admin.produits.create') }}" class="btn btn-primary mb-3">Ajouter un Produit</a> 
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->nomProd }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->categories->nomCateg }}</td>
                    <td><img src="{{ $produit->image}}" alt=""style="heith:50px;width:50px" ></td>
                    <td>
                         <a href="{{ route('admin.produits.edit', $produit->id) }}" class="btn btn-warning">Éditer</a> 
                         <form action="{{ route('admin.produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
