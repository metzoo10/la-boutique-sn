@extends('admin.layout')

@section('title', 'Users')

@section('content')
    <h2>UTILISATEURS INSCRIT(S)</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<main class="mx-auto"> 

    <div class="col-xl-3 col-lg-4 col-sm-12 mb-5 mx-auto">
        <div class="icon-card mb-30 border rounded-3 p-3"  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
            <div class="icon purple">
                <i class="lni lni-cart-full"></i>
            </div>
                <div class="content text-center">
                    <h6 class="mb-10 text-uppercase fs-4">Total Utilisateurs</h6>
                  <h3 class="text-bold mb-10">{{ $totalUsers }}</h3>
                  <p class="text-sm text-success">
                      <i class="lni lni-arrow-up"></i> +2.00%
                    <span class="text-gray">(30 derniers jours)</span>
                </p>
            </div>
        </div>
              
    </div>

    <table class="table col-sm-12">
        <thead>
            <tr>
                <th>Id_utilisateurs</th>
                <th>Noms_utilisateurs</th>
                <th>E-mail_utilisateurs</th>
                <th>Adresses_utilisateurs</th>
                <th>Téléphones_utilisateurs</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->adresse }}</td>
                    <td>{{ $user->telephone }}</td>
                    <td>
                         <form action="{{ route('admin.utilisateurs.destroyUser', $user->id) }}" method="get" style="display:inline;">
                            @csrf
                          
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
    
</main>

@endsection
