<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		@include('Partials/HeadPartial')
		<link rel="stylesheet" href="{{ asset('css/mescandidatures.css') }}">
		<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
		<title>Candidature</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-light" style="background-color: #fff;">
				<a class="navbar-brand" href="{{route('home')}}">
					<img src="{{ asset('logo.png') }}" width="50" height="50" class="logo" alt="">
					<p class="titre" alt="">Annuaire d'entreprises</p>
				</a>
				<div class="bienvenue">Bienvenue + nom du mec</div>
			</nav>
		</header>
		<main>
			<h1>Gestion des candidatures</h1>
			<div id="bloc1">
				
				<div class="input-group mb-3">
							<form class="input-group-prepend">
								<label class="input-group-text" >Nom</label>
								<input type="text" class="form-control" placeholder="Nom de l'entreprise">
							</form>
				</div>
				<div class="input-group mb-3">
					<form class="input-group-prepend">
						<label class="input-group-text" >Domaine</label>
						<select class="niveau">
							<option value="">--Choisissez votre domaine--</option>
							<option id="D1">Systèmes/Réseaux</option>
							<option id="D2">Développement web</option>
							<option id="D3">Gestion de données</option>
							<option id="D4">Développement logiciel</option>
							<option id="D5">Systèmes embarqués</option>
						</select>
					</form>
				</div>
				<div class="input-group mb-3">
							<form class="input-group-prepend">
								<label class="input-group-text" >Durée</label>
								<input type="text" class="form-control" placeholder="Durée du stage">
							</form>
				</div>
				<div class="input-group mb-3">
							<form class="input-group-prepend">
								<label class="input-group-text" >Rémunération</label>
								<input type="text" class="form-control" placeholder="Rémunération du stage">
							</form>
				</div>

				<div>
						Envoi d'email à l'adresse:
				</div>

				<form class="adressemail" method="GET">
								@ de l'entreprise
						</form>

				<form method="POST">
						
					<textarea id="envoi" name="message" placeholder="Ecrire le message ici" ></textarea>
					<div>
						<button id="White" type="submit" class="btn green" value="Envoyer">Envoyer</button>
					</div>
				</form>
			</div>

			<aside id="bloc2">
				<form class="supprimer" method="POST">
					<button type="submit" class="btn blue">Supprimer la candidature de la wish-list</button>
				</form>

				<div class="offre">
				
				</div>
				<form class="steps" method="POST">
					<div>
						<button type="submit" class="btn red">STEP 1</button>
						<button type="submit" class="btn red">STEP 2</button>
						<button type="submit" class="btn red">STEP 3</button>
					</div>
					<div>
						<button type="submit" class="btn red">STEP 4</button>
						<button type="submit" class="btn red">STEP 5</button>
						<button type="submit" class="btn red">STEP 6</button>
					</div>
				</form>
				<button type="button" class="btn red" onclick="history.go(-1)"> Retour</button>
				</div>
			</aside>
		</main>
		@include('Partials/LegalPartial')
	</body>
</html>