    <!-- Première barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <a class="navbar-brand" href="/">
        <img src="/images/logo-1.png" alt="Logo">
    </a>
    <!-- Barre de recherche -->
    <div class="collapse navbar-collapse justify-content-center">
        <form action="{{ route('produits.search') }}" method="GET" class="form-inline search-bar">
            <div class="input-group">
                <input id="searchInput" name="query" class="form-control" type="search" placeholder="Recherchez ici..." aria-label="Search">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Toutes les catégories 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach ($categories as $categorie)
                            <a class="dropdown-item" href="{{ route('categories.show', $categorie->id) }}">{{ $categorie->nomCateg }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="input-group-append">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <!-- Partie panier et wishlist -->
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item wishlist">
                <a class="nav-link" href="/wishlist"><i class="fa fa-heart"></i> Liste de souhaits 
                    @if ($wishlistItemCount > 0)
                    <span class="badge badge-secondary">{{ $wishlistItemCount }}
                    </span>
                    @endif
                </a>
            </li>
            <li class="nav-item cart">
                <a class="nav-link" href="/panier"><i class="fa fa-shopping-cart"></i> Panier 
                    @if ($cartItemCount > 0)
                    <span class="badge badge-secondary">{{ $cartItemCount }}
                    </span>
                    @endif
                </a>
            </li>
        </ul>
    </div>
</nav>

    <!-- Deuxième barre de navigation -->

<nav class="navbar navbar-expand-lg navbar-light second-navbar">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-2">
            <li class="nav-item">
                <a class="nav-link" href="/"><i class="fa-solid fa-house"></i></a>
            </li>
           
            
            <li class="nav-item">
                <a class="nav-link" href="/boutique">Boutique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">À Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/panier">Panier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            
        </ul>
        @auth
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <li> <a class="nav-link connect-link bold" href="{{route('compte')}}">Bonjour, {{Auth::user()->name}}</a></li>
            </li>
            <form action="{{route('logout')}}" method="POST">
                @csrf
              <li class="nav-item">
                    <a class="nav-link connect-link" href="{{route('logout')}}">Se déconnecter</a>
                </li>  
                
            </form>
           
        </ul>
            
        @endauth
        @guest
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="/compte"><i class="fa-solid fa-user"></i></a>
                </li>
            <li class="nav-item">
                <a class="nav-link connect-link" href="/login">Se connecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link register-link" href="/register">S'inscrire</a>
            </li>
        </ul>
        @endguest
        
    </div>
</nav>