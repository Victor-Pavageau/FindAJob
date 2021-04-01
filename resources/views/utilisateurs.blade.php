<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <title>Utilisateurs</title>
    </head>

    <body>

		<header>
            @include('Partials/HeaderPartial')
        </header>

        <div class="container-fluid">
            <div class="row">
                <div class="col-4 justify-content-center">
                    <h2>Gerer les utilisateurs.</h2>
					<form action="" method="post">
						@csrf
						<div class="row">
							<div class="col">
								<button value="add"  name="action" type="submit" class="btn blue">Ajouter l'utilisateur</button>
							</div>
							<div class="col">
								<button value="update" name="action" type="submit" class="btn green">Modifier l'utilisateur</button>
							</div>
							<div class="col">
								<button value="note" name="action" type="submit" class="btn yellow">Noter l'utilisateur</button>
							</div>

							<br><br><br><br>

							<!---------Formulaire de l'utilisateur----------------------------------------------------------------------->
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<label class="input-group-text">Nom</label>
									<input type="text" class="form-control" name="Nom">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Prenom</span>
									<input type="text" class="form-control" name="Prenom">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Type</span>
									<input type="text" class="form-control" name="Type">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Centre</span>
                                    <input type="text" class="form-control" name="Centre">
								</div>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">E-Mail</span>
									<input type="text" class="form-control" name="E_Mail">
								</div>
							</div>

							<div class="col">
								<button value="delete" name="action" type="submit" class="btn red">Supprimer l'utilisateur</button>
							</div>
							<div class="col">
								<button value="search" name="action" type="submit" class="btn purple">Rechercher l'utilisateur</button>
							</div>
						</div>
				
					</form>
							
                </div>		
                <div class="col">
                    <h2>Consulter les entreprises.</h2>
                    <div style="overflow:auto; border:#000000 1px solid; min-height: 100px; max-height: 350px; height: auto;">
						@foreach (DB::table('utilisateur')->get() as $utilisateur) 
							<div id="{{ $utilisateur->id }}"class="col">
								<fieldset>
									<legend class="d-flex justify-content-center" style="background-color: #000; color: #fff;">{{ $utilisateur->Nom}} {{$utilisateur->Prenom}}</legend>
									@if ( json_decode(Cookie::get('utilisateur'))->Type == 4)
                                    <label id="Type_Affichage"> - Niveau de compte : {{ $utilisateur->Type }} </label><br>
                                    @endif
									<label id="Centre_Affichage"> - Centre : {{ $utilisateur->Centre }} </label><br>
									<label id="CV_Affichage"> - CV : {{ $utilisateur->CV }}/10 </label><br>
									<label id="Lettre_de_motivation_Affichage"> - Lettre de motivation : {{ $utilisateur->Lettre_de_motivation }},</label>
									<label id="E_Mail_Affichage"> - E-mail : {{ $utilisateur->E_mail }} </label><br>
                                    <label id="Promotion_Affichage"> - Promotion : {{ DB::table('promotion')->where('id', $utilisateur->id_promotion)->value('Nom') }} </label><br>
                                    <button name="Selectionner" class="btn blue" value="button">Selectionner</button>
								</fieldset> <br><br>
							</div>
						@endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('Partials/LegalPartial')
        <script>
        $(document).ready(function(){
            $("#Selectionner").click(function(){
                alert($(this).closest('div').attr('id'));
            });
        });
        </script>
    </body>
</html>