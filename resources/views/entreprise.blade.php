<!doctype html>
<html lang="fr">
	<!---------HEAD----------------------------------------------------------------------->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
		<link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
		<title>Entreprise</title>
	</head>
	<!---------HEADER----------------------------------------------------------------------->

	<header>
		<nav class="navbar navbar-light" style="background-color: #fff;">
			<!----->
			<a class="navbar-brand" href="#">
				<img src="{{ asset('logo.png') }}" width="50" height="50" class="d-inline-block align-middle" alt="">
				<p class="d-inline-block align-bottom" alt="">Annuaire d'entreprises</p>
			</a>
			<!----->
			<form class="form-inline">
				<button class="btn btn-outline-success mr-sm-4" class="btn btn-dark" type="submit">Se connecter</button>
				<button class="btn btn-outline-success my-2 my-sm-0" class="btn btn-success" type="submit">S'inscrire</button>
			</form>

		</nav>
	</header>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-4">
					<h2>Gerer les entreprises.</h2>

					<div class="row">
						<div class="col">
							<button type="button" class="btn blue" onclick="ajouterEntreprise()">Ajouter l'Entreprise</button>
						</div>
						<div class="col">
							<button type="button" class="btn green" onclick="ajouterEntreprise()">Modifier l'Entreprise</button>
						</div>
						<div class="col">
							<button type="button" class="btn yellow" onclick="ajouterEntreprise()">Noter l'Entreprise</button>
						</div>


						<!---------Formulaire de l'entreprise----------------------------------------------------------------------->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Nom</span>
							</div>
							<input type="text" class="form-control" placeholder="Nom de l'entreprise" aria-label="Nom" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Domaine</span>
							</div>
							<input type="text" class="form-control" placeholder="Domaine de spécialité" aria-label="Nom" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-at"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Adresse mail de l'entreprise" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Adresse mail de l'entreprise" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-building"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Adresse de l'entreprise" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
						</div>

						<div class="col">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-city"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="Ville" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
							</div>
						</div>
						<div class="col">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="Code postal" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
							</div>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-globe-africa"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Pays" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
						</div>
						
					</div>
				</div>
				<div class="col-8">
					<h2>Consulter les entreprises.</h2>
				</div>
			</div>
		</div>
		@include('LegalPartial')
	</body>
</html>