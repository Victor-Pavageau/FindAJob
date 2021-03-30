<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <link rel="stylesheet" href="{{ asset('css/offre_de_stage.css') }}">
        <title>Comptes Pilotes</title>
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
                    <h2>Gerer les entreprises :</h2>

                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn blue" onclick="ajouterEntreprise()">Créer le compte pilote</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn green" onclick="ajouterEntreprise()">Modifier le compte pilote</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn yellow" onclick="ajouterEntreprise()">Supprimer le compte pilote</button>
                        </div>

                        <!---------Formulaire de l'entreprise----------------------------------------------------------------------->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nom</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nom du pilote" aria-label="Nom"
                                aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Prénom</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Prénom du pilote" aria-label="Nom"
                                aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Centre</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Centre de formation du pilote"
                                aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Promotion assignée</span>
                            </div>
                            <input type="text" class="form-control" placeholder="ex : A3" aria-label="Nom d'utilisateur"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <h2>Consulter les comptes pilotes : </h2>
                    <div><span>Rechercher le compte pilote:<span>
                        <input type="text" class="form-control" placeholder="ex :IACOBELLIS Manuel" aria-label="Nom du pilote" aria-describedby="basic-addon1">
                    </div>
                    <div class="container vertical-scrollable">
                        <div class="row text-center">
                            <div class="col-sm-8"> 1</div>
                            <div class="col-sm-8"> 2</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>