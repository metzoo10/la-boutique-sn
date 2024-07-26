<!-- resources/views/admin/commandes/edit.blade.php -->

@extends('admin.layout')

@section('content')
<div class="container">
    <h1>Modifier l'État de la Commande #{{ $commande->id }}</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" class="form py-5 " action="{{ route('admin.commandes.update', $commande) }}">
        @csrf
        @method('PUT')
       

        <div class="form-group mt-3" >
            <label for="status">Status du commande</label>
            <select name="status" id="etat" class="form-control " required>
                <option value="en attente" {{ $commande->status == 'En attente' ? 'selected' : '' }}>En attente</option>
                <option value="validée" {{ $commande->status == 'Validée' ? 'selected' : '' }}>Validée</option>
                <option value="expédiée" {{ $commande->status == 'Expédiée' ? 'selected' : '' }}>Expédiée</option>
                <option value="livrée" {{ $commande->status == 'Livrée' ? 'selected' : '' }}>Livrée</option>
                <option value="annulée" {{ $commande->status == 'Annulée' ? 'selected' : '' }}>Annulée</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
    </form>
</div>
@endsection
