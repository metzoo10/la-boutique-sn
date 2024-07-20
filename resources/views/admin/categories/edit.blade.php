@extends('admin.layout')

@section('title', 'Éditer une Catégorie')

@section('content')
    <h2>Éditer une Catégorie</h2>
    <form action="{{ route('admin.categories.update', $categorie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nomCateg" class="form-label">Nom de la Catégorie</label>
            <input type="text" class="form-control" id="nomCateg" name="nomCateg" value="{{ $categorie->nomCateg }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection