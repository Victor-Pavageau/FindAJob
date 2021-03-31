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
									<select class="form-control" placeholder="Note sur 10" name="confiance_entreprise">
										<option> 0 </option>
										<option> 1 </option>
										<option> 2 </option>
										<option> 3 </option>
										<option> 4 </option>
										<option> 5 </option>
										<option> 6 </option>
										<option> 7 </option>
										<option> 8 </option>
										<option> 9 </option>
										<option> 10 </option>
									</select>
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
							<div class="col">
								<button value="delete" name="action" type="submit" class="btn red">Supprimer l'entreprise</button>
							</div>
							<div class="col">
								<button value="search" name="action" type="submit" class="btn purple">Rechercher l'entreprise</button>
							</div>
						</div>
							
						<div>
							<br>
							<textarea id="email" class="btn-block"  placeholder="Entrez un mail"></textarea>
							<br>
							<a href ="{{route('identification')}}"><input type="subit" class="btn orange"  value="Envoyer le mail"></a>
						</div>
				
					</form>
							
                </div>		
                <div class="col">
                    <h2>Consulter les entreprises.</h2>
                    <div style="overflow:auto; border:#000000 1px solid; min-height: 100px; max-height: 350px; height: auto;">
						@foreach (DB::table('utilisateurs')->get() as $utilisateur) 
							<div class="col">
								<fieldset>
									<legend class="d-flex justify-content-center" style="background-color: #000; color: #fff;">{{ $utilisateur->Nom, $utilisateur->Prenom}}</legend>
									@if ({{ json_decode(Cookie::get('utilisateur'))->Type }} == 4)
                                    <label> - Niveau de compte : {{ $utilisateur->Type }} </label><br>
                                    @endif
									<label> - Centre : {{ $utilisateur->Centre }} </label><br>
									<label> - CV : {{ $utilisateur->CV }}/10 </label><br>
									<label> - Lettre de motivation : {{ $utilisateur->Lettre_de_motivation }},</label>
									<label> - E-mail : {{ $utilisateur->E_mail }} </label><br>
                                    <label> - Promotion : {{ DB::table('promotion')->where('id', $utilisateur->id_promotion)->value('Nom') }} </label><br>
								</fieldset> <br><br>
							</div>
						@endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>