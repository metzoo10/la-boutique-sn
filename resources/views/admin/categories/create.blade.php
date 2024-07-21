@extends('admin.layout')

@section('title', 'Ajouter une Catégorie')

@section('content')
    <h2>Ajouter une Catégorie</h2>
    <form action="/storeCateg" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomCateg" class="form-label">Nom de la Catégorie</label>
            <input type="text" class="form-control" id="nomCateg" name="nomCateg" required>
            @error('nomCateg')
				{{$message}}
					
				@enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection