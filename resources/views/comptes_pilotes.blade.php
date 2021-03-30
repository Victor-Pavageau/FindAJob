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
                                    <span class="input-group-text">Adresse Mail</span>
                                    <input type="text" class="form-control">
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