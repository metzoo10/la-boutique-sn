    <!-- Première barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <a class="navbar-brand" href="/">
        <img src="images/logo-1.png" alt="Logo">
    </a>
    <!-- Barre de recherche -->
    <div class="collapse navbar-collapse justify-content-center">
        <form class="form-inline search-bar">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Recherchez ici..." aria-label="Search">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Toutes les catégories 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Électroniques</a>
                        <a class="dropdown-item" href="#">Mode</a>
                        <a class="dropdown-item" href="#">Meubles</a>
                        <a class="dropdown-item" href="#">Jouets pour enfant</a>
                        <a class="dropdown-item" href="#">Beauté</a>
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
                <a class="nav-link" href="/wishlist"><i class="fa fa-heart"></i> Liste de souhaits <span class="badge badge-secondary">0 item</span></a>
            </li>
            <li class="nav-item cart">
                <a class="nav-link" href="/panier"><i class="fa fa-shopping-cart"></i> Panier <span class="badge badge-secondary">4 items</span></a>
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
                <a class="nav-link" href="/compte"><i class="fa-solid fa-user"></i></a>
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
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link connect-link" href="/login">Se connecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link register-link" href="/register">S'inscrire</a>
            </li>
        </ul>
    </div>
</nav>