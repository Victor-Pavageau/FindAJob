<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <link rel="stylesheet" href="{{ asset('css/offre_de_stage.css') }}">
        <title>Comptes Pilotes</title>
    </head>

    <body>

        <header>
            @include('Partials/HeaderPartial')
        </header>

        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <h2>Gerer les comptes pilotes :</h2>
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <button value="search"  name="action" type="submit" class="btn blue">Rechercher le compte pilote</button>
                            </div>
                            <div class="col">
                                <button value="update" name="action" type="submit" class="btn green">Modifier le compte pilote</button>
                            </div>
                            <div class="col">
                                <button value="delete" name="action" type="submit" class="btn red">Supprimer le compte pilote</button>
                            </div>

                            <br><br><br><br>

                            
                            <!---------Formulaire de l'entreprise----------------------------------------------------------------------->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nom</span>
                                    <input type="text" class="form-control" placeholder="Nom du pilote" name="Nom">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Prénom</span>
                                    <input type="text" class="form-control" placeholder="Prénom du pilote" name="Prenom">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Centre</span>
                                    <input type="text" class="form-control" placeholder="Centre de formation du pilote" name="Centre">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Adresse Mail</span>
                                    <input type="text" class="form-control" name="E_mail">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col">
                    <h2>Consulter comptes délégués.</h2>
                    <div style="overflow:auto; border:#000000 1px solid; max-width: 500px; min-height: 100px; max-height: 350px; height: auto;">
                    </div>
                </div>
            </div>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>