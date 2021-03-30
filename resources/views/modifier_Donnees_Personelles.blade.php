<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <title>Données Personelles</title>
        <link rel="stylesheet" href="{{ asset('css/données_persos.css') }}">
    </head>

    <body>
        <div id="general_kenobi" class="bg-image d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div  class="text-light" style="max-width: 36rem;">
                    <div class="card-header text-center">
                        <h1 class="mb-0">Modification  données personelles</h1>
                    </div>
                    <div class="card-body text-light">
                        <p class="card-text text-center" >Utilisateur connecté :</p>
                    </div>

                    <!------------------- FORMULAIRE D'INSCRIPTION-------------------------------------------->

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nom</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text">Prénom</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nom d'utilisateur" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                    </div>

                        <div id="Adresse">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Centre</span>
                                </div>
                                <input id="inputNomVille" class="form-control autocomplete ui-autocomplete-input" type="search" placeholder="Centre" aria-label="Ville" autocomplete="off">
                            </div>
                         <!-------------------Promotion-------------------------------------------->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Promotion assignée</span>
                                </div>
                                <input  id="promotion" type="text" class="form-control" placeholder="ex : A3" aria-label="promotion" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Mot de passe</span>
                            </div>
                            <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Mot de passe" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Confirmer le mot de passe</span>
                            </div>
                            <input type="password" class="form-control" placeholder="Confirmer le mot de passe" aria-label="Mot de passe" aria-describedby="basic-addon1">
                        </div>
                    
                    <div class="d-flex justify-content-center">
                        <button id="buttonTropAgreable" type="button" class="btn yellow  btn-lg" onclick="ajouterEntreprise()">Enregistrer les données</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('css/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        @include('Partials/LegalPartial')
    </body>
</html>