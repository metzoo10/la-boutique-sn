@extends('layout.main')
@section('title', 'La Boutique.sn, votre boutique en ligne numéro 1 - À Propos')
@section('content')
	<!-- Page d'à propos -->

	<div class="container mt-5">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	    		<li class="breadcrumb-item"><a class="text-info text-uppercase text-decoration-none" href="/">Accueil</a></li>
	    		<li class="breadcrumb-item active text-uppercase" aria-current="page">À Propos</li>
	  		</ol>
		</nav>
	</div>

	<div class="container mt-5">
		<div class="row">
			<h4 class="mb-3">À Propos de La Boutique.SN</h4>
			<p>Bienvenue chez La Boutique.SN, votre destination en ligne pour découvrir une large gamme de produits de qualité dans les domaines de l'électronique, de la mode, du mobilier, de la beauté, du bricolage et des jouets. Depuis notre fondation en 2024, nous nous engageons à offrir à nos clients une expérience d'achat exceptionnelle, soutenue par notre passion pour la qualité et notre dévouement envers le service client.</p>
		</div>
		<div class="row g-5 mt-2 mb-5">
			<div class="card-group">
				<div class="card text-bg-info border-dark">
					<div class="card-body">
						<h5 class="card-title mb-4"><i class="fa-solid fa-bullseye"></i> Notre Mission</h5>
						<p class="card-text">Chez La Boutique.SN, notre mission est simple : inspirer et faciliter votre vie quotidienne en vous proposant des produits soigneusement sélectionnés qui répondent à vos besoins et dépassent vos attentes. Nous croyons fermement en l'importance de la qualité, de la durabilité et de la satisfaction client.</p>
					</div>
				</div>
				<div class="card text-bg-info border-dark">
					<div class="card-body">
						<h5 class="card-title mb-4"><i class="fa-solid fa-shirt"></i> Notre sélection de produits</h5>
						<p class="card-text">Explorez notre collection diversifiée comprenant des produits innovants et tendance dans chaque catégorie. Que vous recherchiez les dernières technologies, des vêtements élégants, des meubles élégants, des cosmétiques naturels, des outils robustes ou des jouets éducatifs, nous avons ce qu'il vous faut pour enrichir votre quotidien.</p>
					</div>
				</div>
				<div class="card text-bg-info border-dark">
					<div class="card-body">
						<h5 class="card-title mb-4"><i class="fa-solid fa-handshake"></i> Engagement envers l'excellence</h5>
						<p class="card-text">Nous nous engageons à vous offrir plus qu'une simple transaction commerciale. Notre équipe dévouée est là pour vous conseiller et vous assister à chaque étape de votre parcours d'achat. Avec des politiques de retour flexibles et un service clientèle réactif, nous veillons à ce que votre expérience soit toujours satisfaisante.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row g-5 mb-5">
			<div class="card-group">
				<div class="card text-bg-primary border-dark">
					<div class="card-body">
						<h5 class="card-title mb-4"><i class="fa-solid fa-network-wired"></i> Partenariats et reconnaissances</h5>
						<p class="card-text">Nous sommes fiers de nos partenariats avec des marques renommées et de nos efforts pour promouvoir des pratiques commerciales éthiques et durables. Ces collaborations nous permettent de vous offrir des produits de haute qualité et de soutenir des initiatives qui comptent pour nous et pour nos clients.</p>
					</div>
				</div>
				<div class="card text-bg-primary border-dark">
					<div class="card-body">
						<h5 class="card-title mb-4"><i class="fa-solid fa-phone"></i> Nous contacter</h5>
						<p class="card-text">N'hésitez pas à nous contacter pour toute question, suggestion ou collaboration. Notre équipe est là pour vous aider et s'assurer que vous avez une expérience exceptionnelle à chaque interaction avec La Boutique.SN</p>
					</div>
				</div>
			</div>
		</div>

		{{-- Section présentation de l'équipe (caroussel d'images) --}}
		
		<div class="h2 text-center mb-5">Membres de l'équipe</div>
		
		<div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
		  <div class="carousel-inner text-center">
		    <div class="carousel-item active">
		      <img src="images/membres/1.jpg" class="img-thumbnail" alt="..." width="250px">
		      <h5 class="mt-3">Mouhamed BA</h5>
		      <p>Étudiant</p>
		      <p>Email : <a href="mailto:mouhamed.ba@unchk.edu.sn">mouhamed.ba@unchk.edu.sn</a></p>
		    </div>
		    <div class="carousel-item">
		      <img src="images/membres/2.jpg" class="img-thumbnail" alt="..." width="350px">
		      <h5 class="mt-3">Mamadou Adiouma Kane</h5>
		      <p>Étudiant</p>
		      <p>Email : <a href="mailto:mamadouadiouma.kane@unchk.edu.sn">mamadouadiouma.kane@unchk.edu.sn</a></p>
		    </div>
		    <div class="carousel-item">
		      <img src="images/membres/3.jpg" class="img-thumbnail" alt="..." width="250px">
		      <h5 class="mt-5">Mame Diarra Mané</h5>
		      <p>Étudiante</p>
		      <p>Email : <a href="mailto:mamediarra.mane@unchk.edu.sn">mamediarra.mane@unchk.edu.sn</a></p>
		    </div>
		    <div class="carousel-item">
		      <img src="images/membres/8.jpg" class="img-thumbnail" alt="..." width="250px">
		      <h5 class="mt-5">Mor Tall</h5>
		      <p>Étudiant</p>
		      <p>Email : <a href="mailto:mor.tall@unchk.edu.sn">mor.tall@unchk.edu.sn</a></p>
		    </div>
		    <div class="carousel-item">
		      <img src="images/membres/6.jpg" class="img-thumbnail" alt="..." width="250px">
		      <h5 class="mt-5">Mamadou Hassimou Diallo</h5>
		      <p>Étudiant</p>
		      <p>Email : <a href="mailto:mamadouhassimou.diallo@unchk.edu.sn">mamadouhassimou.diallo@unchk.edu.sn</a></p>
		    </div>
		    <div class="carousel-item">
		      <img src="images/membres/7.jpg" class="img-thumbnail" alt="..." width="250px">
		      <h5 class="mt-5">Momar Coumba Kane</h5>
		      <p>Étudiant</p>
		      <p>Email : <a href="mailto:momarcoumba.kane@unchk.edu.sn">momarcoumba.kane@unchk.edu.sn</a></p>
		    </div>
		    <div class="carousel-item">
		      <img src="images/membres/9.jpg" class="img-thumbnail" alt="..." width="250px">
		      <h5 class="mt-5">Baye Ahmadou Khary Loum</h5>
		      <p>Étudiant</p>
		      <p>Email : <a href="mailto:bayeahmadoukhary.loum@unchk.edu.sn">bayeahmadoukhary.loum@unchk.edu.sn</a></p>
		    </div>
		    <div class="carousel-item">
		      <img src="images/membres/4.jpg" class="img-thumbnail" alt="..." width="250px">
		      <h5 class="mt-5">Mame Adama Bousso</h5>
		      <p>Étudiante</p>
		      <p>Email : <a href="mailto:mameadama.bousso@unchk.edu.sn">mameadama.bousso@unchk.edu.sn</a></p>
		    </div>
		    <div class="carousel-item">
		      <img src="images/membres/5.jpg" class="img-thumbnail" alt="..." width="250px">
		      <h5 class="mt-5">Khadidiatou Mbathie</h5>
		      <p>Étudiante</p>
		      <p>Email : <a href="mailto:khadidiatou.mbathie@unchk.edu.sn">khadidiatou.mbathie@unchk.edu.sn</a></p>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>

		{{-- Fin section --}}

		{{-- Section Tabs pour caractéristiques du site --}}

		<div class="row mt-5 mb-5">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="assistance-tab" data-bs-toggle="tab" data-bs-target="#assistance-tab-pane" type="button" role="tab" aria-controls="assistance-tab-pane" aria-selected="true">Assistance 24H/24 et 7j/7</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="qualite-tab" data-bs-toggle="tab" data-bs-target="#qualite-tab-pane" type="button" role="tab" aria-controls="qualite-tab-pane" aria-selected="false">Meilleure qualité</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="livraison-tab" data-bs-toggle="tab" data-bs-target="#livraison-tab-pane" type="button" role="tab" aria-controls="livraison-tab-pane" aria-selected="false">Livraison rapide</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="service-tab" data-bs-toggle="tab" data-bs-target="#service-tab-pane" type="button" role="tab" aria-controls="service-tab-pane" aria-selected="false">Service clientèle</button>
				</li>
			</ul>
			<div class="tab-content mt-4" id="myTabContent">
				<div class="tab-pane fade show active" id="assistance-tab-pane" role="tabpanel" aria-labelledby="assistance-tab" tabindex="0">
					<p>Notre équipe dévouée est disponible à tout moment, jour et nuit, pour répondre à vos questions, résoudre vos problèmes et assurer une expérience d'achat fluide et sans souci, quel que soit le moment où vous avez besoin de nous.</p>
				</div>
				<div class="tab-pane fade" id="qualite-tab-pane" role="tabpanel" aria-labelledby="qualite-tab" tabindex="0">
					<p>Chez La Boutique.SN, nous nous engageons à sélectionner uniquement les produits de la plus haute qualité. Chaque article est soigneusement évalué pour répondre à nos normes rigoureuses, garantissant ainsi une satisfaction totale à nos clients.</p>
				</div>
				<div class="tab-pane fade" id="livraison-tab-pane" role="tabpanel" aria-labelledby="livraison-tab" tabindex="0">
					<p>Nous comprenons l'importance de recevoir vos achats rapidement. Grâce à notre réseau logistique efficace, nous nous efforçons de vous offrir la livraison la plus rapide possible, afin que vous puissiez profiter de vos produits sans attendre.</p>
				</div>
				<div class="tab-pane fade" id="service-tab-pane" role="tabpanel" aria-labelledby="service-tab" tabindex="0">
					<p>Notre équipe de service clientèle est passionnée par votre satisfaction. Nous sommes là pour vous fournir un support personnalisé, des réponses rapides à vos questions et des solutions adaptées à vos besoins, assurant ainsi une expérience client exceptionnelle à chaque interaction.</p>
				</div>
			</div>
		</div>
		
	</div>
@endsection