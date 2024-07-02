<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="/css/navbar.css">
	<link rel="stylesheet" href="/css/footer.css">
	<link rel="icon" href="/images/favicon.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<!-- Inclure le fichier 'navbar' de 'component' pour la barre de navigation -->
	@include('component.navbar')

	<!-- Section du template parent à modifier dans chaque page -->
	<div>
		@yield('content')
	</div>

	<!-- Inclure le fichier 'footer' de 'component' pour le footer -->
	@include('component.footer')

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/1946a24281.js" crossorigin="anonymous"></script>
</body>

</html>