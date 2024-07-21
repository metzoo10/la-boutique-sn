<!-- resources/views/admin/produits/edit.blade.php -->

@extends('admin.layout')

@section('title', 'Éditer un Produit')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Éditer un Produit</h2>
        <form action="{{ route('admin.produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom du Produit</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom', $produit->nomProd) }}" required>
                @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" step="0.01" class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix" value="{{ old('prix', $produit->prix) }}" required>
                @error('prix')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="categorie_id" class="form-label">Catégorie</label>
                <select class="form-select @error('categorie_id') is-invalid @enderror" id="categorie_id" name="categorie_id" required>
                    <option value="">Sélectionner une catégorie</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ $categorie->id == old('categorie_id', $produit->categorie_id) ? 'selected' : '' }}>
                            {{ $categorie->nomCateg }}
                        </option>
                    @endforeach
                </select>
                @error('categorie_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" >
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($produit->image)
                    <div class="mt-2">
                        <img src="{{old(asset('storage/' . $produit->image) )}}" alt="{{ $produit->nom }}" class="img-thumbnail" width="150">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
