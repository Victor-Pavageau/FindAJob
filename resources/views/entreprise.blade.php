<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <title>Entreprise</title>
    </head>

    <body>

		<header>
            @include('Partials/HeaderPartial')
        </header>

        <div class="container-fluid">
            <div class="row">
                <div class="col-4 justify-content-center">
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
									<span class="input-group-text">Note de Confiance de l'entreprise</span>
									<input type="text" class="form-control" placeholder="Note sur 10" name="confiance_entreprise">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-building"></i></span>
									<input type="text" class="form-control" placeholder="Adresse de l'entreprise" name="adresse_entreprise">
									&emsp;
									<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
									<input type="text" class="form-control" placeholder="Code postal" name="zipcode_entreprise">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-globe-africa"></i></span>
									<input type="text" class="form-control" placeholder="Pays" name="pays_entreprise">
									&emsp;
									<span class="input-group-text">Nombre de Stagiaire</span>
									<input type="text" class="form-control" value="0" name="nombre_stagiaire_entreprise">
								</div>
							</div>
							<div>
								<button value="delete" name="action" type="submit" class="btn purple">Supprimer l'entreprise</button>
							</div>
						</div>
					</form>
                </div>

                <div class="col">
                    <h2>Consulter les entreprises.</h2>
                    <div style="overflow:auto; border:#000000 1px solid; max-width: 500px; min-height: 100px; max-height: 350px; height: auto;">
                        
                    </div>
                </div>
            </div>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>