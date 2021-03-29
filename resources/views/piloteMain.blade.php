<!doctype html>
<html lang="fr">
	<!---------HEAD----------------------------------------------------------------------->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
		<title>Acceuil Pilotes</title>
	</head>
	<header>
		<nav class="navbar navbar-light" style="background-color: #fff;">
			<!----->
			<a class="navbar-brand" href="#">
				<img src="{{ asset('logo.png') }}" width="50" height="50" class="d-inline-block align-middle" alt="">
				<p class="d-inline-block align-bottom" alt="">Annuaire d'entreprises</p>
			</a>
			<button type="button" class="float-right btn btn-outline-primary btn-sm" onclick="myFunction()"> <i class="fas fa-adjust"></i> Thème </button>
			<!----->
			<form class="form-inline">
				<button class="btn btn-outline-success mr-sm-4" class="btn btn-dark" type="submit">Se connecter</button>
				<button class="btn btn-outline-success my-2 my-sm-0" class="btn btn-success" type="submit">S'inscrire</button>
			</form>
		</nav>
	</header>

	<body>
		<main>
			<!-------------------------------4 cards-------------------------->
			<div class="d-flex justify-content-center mt-3">
				<div class ="card-deck">
					<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
						<!-------------------------------Entreprise-------------------------->
						<div class="card-header">Entreprise</div>
						<div class="card-body">
							<h5 class="card-title border rounded"><a class= "text-white" href="#">Gerer les entreprises.</a></h5>
							<p class="card-text">Rechercher, Créer, Modifier Evaluer et consulter les statistiques de l'entreprise.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted text-white">Last updated 3 mins ago</small>
						</div>
					</div>
					<!-------------------------------Stage-------------------------->
					<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
						<div class="card-header">Stage</div>
						<div class="card-body">
							<h5 class="card-title border rounded"><a class= "text-white" href="#">Gerer les stages.</a></h5>
							<p class="card-text">Rechercher une offre, Créer, Modifier, Supprimer et Consulter les statistiques des offres.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted text-white">Last updated 3 mins ago</small>
						</div>
					</div>
					<!-------------------------------Cansidature-------------------------->
					<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
						<div class="card-header">Candidature</div>
						<div class="card-body">
							<h5 class="card-title border rounded"><a class= "text-white" href="#">Examiner ses candidatures.</a></h5>
							<p class="card-text">Ajouter/Retirer une offre de la wish-list et postuler à une nouvelle offre.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted text-white">Last updated 3 mins ago</small>
						</div>
					</div>
					<!-------------------------------Profil-------------------------->
					<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
						<div class="card-header">Profil</div>
						<div class="card-body">
							<h5 class="card-title border rounded"><a class= "text-white" href="#">Editer votre profil.</a></h5>
							<p class="card-text">Modifier les données de l'utilisateur.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted text-white" >Last updated 3 mins ago</small>
						</div>
					</div>
					<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
						<!-------------------------------Entreprise-------------------------->
						<div class="card-header">Délégués</div>
						<div class="card-body">
							<h5 class="card-title border rounded"><a class= "text-white" href="#">Gerer les délégués.</a></h5>
							<p class="card-text">Rechercher, Créer, Modifier Evaluer et consulter les statistiques de l'entreprise.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted text-white">Last updated 3 mins ago</small>
						</div>
					</div>
					<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
						<!-------------------------------Entreprise-------------------------->
						<div class="card-header">Etudiants</div>
						<div class="card-body">
							<h5 class="card-title border rounded"><a class= "text-white" href="#">Gerer les étudiants.</a></h5>
							<p class="card-text">Rechercher, Créer, Modifier Evaluer et consulter les statistiques de l'entreprise.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted text-white">Last updated 3 mins ago</small>
						</div>
					</div>
				</div>
			</div>
		</main>

		<aside>
			<div class="d-flex justify-content-center mt-5">
				<h1>Faciliter votre Recherche de stage</h1>
			</div>
			<div class="d-flex justify-content-center mt-2">	
				<h5>Ce site web  regroupe différentes offres de stage et permet de stocker les données des entreprises ayant déjà pris un stagiaire, ou qui en recherchent un. 
				</h5>
			</div>
			<div class="d-flex justify-content-center mt-5">
				carousel ?
			</div>
		</aside>



		@include('LegalPartial')
	</body>
	<script src=".\assets\darkmode\darkMode.js"></script>
</html>