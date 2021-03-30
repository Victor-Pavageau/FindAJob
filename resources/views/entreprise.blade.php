<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <title>Entreprise</title>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <h2>Gerer les entreprises.</h2>
					<form action="" method="post">
						@csrf
						<div class="row">
							<div class="col">
								<button value="add"  name="action" type="submit" class="btn blue">Ajouter l'Entreprise</button>
							</div>
							<div class="col">
								<button value="update" name="action" type="submit" class="btn green">Modifier l'Entreprise</button>
							</div>
							<div class="col">
								<button value="note" name="action" type="submit" class="btn yellow">Noter l'Entreprise</button>
							</div>

							<br><br><br><br>

							<!---------Formulaire de l'entreprise----------------------------------------------------------------------->
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<label class="input-group-text">Nom</label>
									<input type="text" class="form-control" placeholder="Nom de l'entreprise" name="nom_entreprise">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Domaine</span>
									<input type="text" class="form-control" placeholder="Domaine de spécialité" name="domaine_entreprise">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-at"></i></span>
									<input type="text" class="form-control" placeholder="Adresse mail de l'entreprise" name="mail_entreprise">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
									<input type="text" class="form-control" placeholder="Numéro de l'entreprise" name="tel_entreprise">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-building"></i></span>
									<input type="text" class="form-control" placeholder="Adresse de l'entreprise" name="adresse_entreprise">
								</div>
							</div>

							<div class="col">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-city"></i></span>
										<input type="text" class="form-control" placeholder="Ville" name="ville_entreprise">
									</div>
								</div>
							</div>
							<div class="col">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
										<input type="text" class="form-control" placeholder="Code postal" name="zipcode_entreprise">
									</div>
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-globe-africa"></i></span>
									<input type="text" class="form-control" placeholder="Pays" name="pays_entreprise">
								</div>
							</div>
							<div>
								<button value="delete" name="action" type="submit" class="btn purple">Supprimer l'offre</button>
							</div>
						</div>
					</form>
                </div>

                <div class="col-8">
                    <h2>Consulter les entreprises.</h2>
                </div>

            </div>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>