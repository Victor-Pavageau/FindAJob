<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
		<title>Gestion des Délégués</title>
	</head>
	
	<header>
		<nav class="navbar navbar-light" style="background-color: #fff;">
			<a class="navbar-brand" href="#">
				<img src="{{ asset('logo.png') }}" width="50" height="50" class="d-inline-block align-middle" alt="">
				<p class="d-inline-block align-bottom" alt="">Annuaire d'entreprises</p>
			</a>
			<form class="form-inline">
				<button class="btn btn-outline-success mr-sm-4" class="btn btn-dark" type="submit">Se connecter</button>
				<button class="btn btn-outline-success my-2 my-sm-0" class="btn btn-success" type="submit">S'inscrire</button>
			</form>
		</nav>
	</header>

	<body>
		<div class="container">
			<div class="row">
				<div class="col">
					<br>
					<div>
						<button class="btn btn-outline-primary" onclick="">Ajouter</button>
						<button class="btn btn-outline-success" onclick="">Modifier</button>
						<button class="btn btn-outline-warning" onclick="">Supprimer</button>
					</div>
					<br>
						
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Nom</span>
							<input type="text" class="form-control" placeholder="Nom du délégué">
						</div>
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Prénom</span>
							<input type="text" class="form-control" placeholder="Prénom du délégué">
						</div>
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Centre</span>
							<input type="text" class="form-control" placeholder="Centre du délégué">
						</div>
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Promotion assignée</span>
							<input type="text" class="form-control" placeholder="Promotion du délégué">
						</div>
					</div>
					
					<div>
						<button class="btn btn-outline-danger btn-block" onclick="">Rechercher le compte délégué</button>
					</div>
					<br>
				</div>
				
				<div class="col">
					<h2>Consulter comptes délégués.</h2>
					<div style="overflow:auto; border:#000000 1px solid; max-width: 500px; min-height: 100px; max-height: 350px; height: auto;">
						
					</div>
				</div>
			</div>
			
			<br>
			<div class="d-flex justify-content-center">
				<a href="./droits-delegues.html"> <button class="btn btn-outline-info">Modifier les droits du délégué</button></a>
			</div>
			<br>
			
		</div>
		@include(LegalPartial)
	</body>
	
</html>