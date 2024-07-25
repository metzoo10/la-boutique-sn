<!-- resources/views/admin/layout.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
    <header>
        <h1 class="text-uppercase">Administration</h1>
        <nav>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                 <li><a href="{{ route('admin.categories.index') }}">Catégories</a></li>
                <li><a href="{{ route('admin.produits.index') }}">Produits</a></li>
                <li><a href="{{ route('admin.commandes.index') }}">Commandes</a></li>
                <li><a href="{{ route('admin.utilisateurs.index') }}">Utilisateurs</a></li>
                <li><a href="{{ route('logout') }}">Déconnexion</a></li> 
            </ul>
        </nav>
    </header>

    <main style="z-index: 100">
        @yield('content')
    </main>

    {{-- <footer>
        <p>&copy; 2024 Votre La-Boutique-sn</p>
    </footer> --}}

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
