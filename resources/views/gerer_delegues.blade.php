<!DOCTYPE html>
<html lang="fr">
    <head>
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
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form action="" method="post">
                        @csrf
                        <div class="col">
                            <br>
                            <div>
                                <button value="search"  name="action" type="submit" class="btn blue">Rechercher</button>
                                <button value="update"  name="action" type="submit" class="btn green">Modifier</button>
                                <button value="delete"  name="action" type="submit" class="btn yellow">Supprimer</button>
                            </div>
                            <br>
                                
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nom</span>
                                    <input type="text" class="form-control" placeholder="Nom du délégué" name="nom_delegue">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Prénom</span>
                                    <input type="text" class="form-control" placeholder="Prénom du délégué" name="prenom_delegue">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Centre</span>
                                    <input type="text" class="form-control" placeholder="Centre du délégué" name="centre_delegue">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Adresse Mail</span>
                                    <input type="text" class="form-control" placeholder="Mail du délégué" name="mail_delegue">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                        
                <div class="col-6">
                    <h2>Consulter comptes délégués.</h2>
                    <div style="overflow:auto; border:#000000 1px solid; max-width: 500px; min-height: 100px; max-height: 350px; height: auto;">
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a href="{{route('droits_delegues')}}"> <button type="button" class="btn purple">Modifier les droits du délégué</button></a>
            </div>
            <br>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>