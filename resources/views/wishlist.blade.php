<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		@include('Partials/HeadPartial')
		<link rel="stylesheet" href="{{ asset('css/wishlist.css') }}">
		<title>Candidatures</title>
	</head>
	<body>
		<header>
		<nav class="navbar navbar-light" style="background-color: #fff;">
			<!----->
			<a class="navbar-brand" href="candidature 1.html">
				<img src="{{ asset('logo.png') }}" width="50" height="50" class="logo" alt="">
				<p class="titre" alt="">Annuaire d'entreprises</p>
			</a>
			
			<div class="bienvenue">Bienvenue + nom du mec</div>

		</nav>
	</header>
		<main>
			<div>
				<h1>Gestion des candidatures</h1>
			</div>
			
			<div id="bloc1">
				<h2>Rechercher une offre :</h2>
				<div>
					
					<form class="Recherche" method="POST">
						<div>
							<select class="niveau">
								<option value="">--Choisissez votre niveau--</option>
								<option id="N1">A2</option>
								<option id="N2">A3</option>
								<option id="N3">A4</option>
								<option id="N4">A5</option>
							</select>
							<select class="niveau">
								<option value="">--Choisissez votre domaine--</option>
								<option id="D1">Systèmes/Réseaux</option>
								<option id="D2">Développement web</option>
								<option id="D3">Gestion de données</option>
								<option id="D4">Développement logiciel</option>
								<option id="D5">Systèmes embarqués</option>
							</select>
							<input type="submit">
						</div>
					</form>
				</div>
				<div class="offre">
				</div>
			</div>
			
			<div id="bloc2">
				<h2>Ma wishlist :</h2>
				<div>
					<form class="Recherche">
					</form>
				</div>
				<div class="offre">		
				</div>	
			</div>
		</main>
		@include('Partials/LegalPartial')
	</body>
</html>