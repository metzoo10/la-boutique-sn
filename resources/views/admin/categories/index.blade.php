@extends('admin.layout')

@section('title', 'Catégories')

@section('content')
    <h2>Catégories</h2>
    <a href="/createCateg" class="btn btn-primary mb-3">Ajouter une Catégorie</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom de la Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->nomCateg }}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $categorie->id) }}" class="btn btn-warning">Éditer</a>
                        <form action="{{ route('admin.categories.destroy', $categorie->id) }}" method="POST" style="display:inline;">
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
