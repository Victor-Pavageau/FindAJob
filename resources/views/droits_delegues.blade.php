<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		@include('Partials/HeadPartial')
		<title>Gestion des Délégués</title>
	</head>
	
	<header>
		<nav class="navbar navbar-light" style="background-color: #fff;">
			<a class="navbar-brand" href="{{route('home')}}">
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
		<p>
			<div class="container">
				<div class="row">
					<div class="col">
						<ul><h3> Entreprise : </h3></ul>
						<br>
						<ul><label><input type=checkbox id="E1"> Rechercher une entreprise </input></label></ul>
						<ul><label><input type=checkbox id="E2"> Créer une entreprise </input></label></ul>
						<ul><label><input type=checkbox id="E3"> Modifier une entreprise </input></label></ul>
						<ul><label><input type=checkbox id="E4"> Evaluer l'entreprise </input></label></ul>
						<ul><label><input type=checkbox id="E5"> Supprimer une entreprise </input></label></ul>
						<ul><label><input type=checkbox id="E6"> Consulter les stats de l'entreprise </input></label></ul>
					</div>
					<div class="col">
						<ul><h3> Offres de Stage : </h3></ul>
						<br>
						<ul><label><input type=checkbox id="OS1"> Rechercher une offre </input></label></ul>
						<ul><label><input type=checkbox id="OS2"> Créer une offre </input></label></ul>
						<ul><label><input type=checkbox id="OS3"> Modifier une offre </input></label></ul>
						<ul><label><input type=checkbox id="OS4"> Supprimer une offre </input></label></ul>
						<ul><label><input type=checkbox id="OS5"> Consulter les statistiques de l'offre </input></label></ul>
					</div>
					<div class="col">
						<ul><h3> Compte Pilote : </h3></ul>
						<br>
						<ul><label><input type=checkbox id="CP1"> Rechercher un compte pilote </input></label></ul>
						<ul><label><input type=checkbox id="CP2"> Créer un compte pilote </input></label></ul>
						<ul><label><input type=checkbox id="CP3"> Modifier un compte pilote </input></label></ul>
						<ul><label><input type=checkbox id="CP4"> Supprimer un compte pilote </input></label></ul>
					</div>
					<div class="col">
						<ul><h3> Compte Délégué : </h3></ul>
						<br>
						<ul><label><input type=checkbox id="CD1"> Rechercher un compte délégué </input></label></ul>
						<ul><label><input type=checkbox id="CD2"> Créer un compte délégué </input></label></ul>
						<ul><label><input type=checkbox id="CD3"> Modifier un compte délégué </input></label></ul>
						<ul><label><input type=checkbox id="CD4"> Supprimer un compte délégué </input></label></ul>
					</div>
					<div class="col">
						<ul><h3> Compte Etudiant : </h3></ul>
						<br>
						<ul><label><input type=checkbox id="CE1"> Rechercher un compte étudiant </input></label></ul>
						<ul><label><input type=checkbox id="CE2"> Créer un compte étudiant </input></label></ul>
						<ul><label><input type=checkbox id="CE3"> Modifier un compte étudiant </input></label></ul>
						<ul><label><input type=checkbox id="CE4"> Supprimer un compte étudiant </input></label></ul>
						<ul><label><input type=checkbox id="CE5"> Consulter les statistiques de l'étudiant </input></label></ul>
					</div>
					<div class="col-12 d-flex justify-content-center">
						<button type="button" class="btn red" onclick="history.go(-1)"> Retour</button>
						&emsp;
						<button type="button" class="btn green" onclick="fonctionvalider();"> Appliquer les changements </button>
					</div>
				</div>
			</div>
		</p>
		@include('Partials/LegalPartial')
	</body>
	<script src="{{ asset('js/droits_delegues') }}"></script>
</html>