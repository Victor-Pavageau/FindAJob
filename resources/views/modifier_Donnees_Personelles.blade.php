<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <title>Données Personelles</title>
        <link rel="stylesheet" href="{{ asset('css/données_persos.css') }}">
    </head>

    <body>
        <header>
            @include('Partials/HeaderPartial')
        </header>

        <div id="general_kenobi" class="bg-image d-flex justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center h-100">
                <form action="" method="post">
                    @csrf
                    <div  class="text-light" style="max-width: 36rem;">
                        <button type="button" class="btn red btn-block" onclick="history.go(-1)"> Retour</button>
                        <br>
                        <div class="card-header text-center">
                            <h1 class="mb-0">Modification  données personelles</h1>
                        </div>
                        <br>

                        <!------------------- FORMULAIRE D'INSCRIPTION-------------------------------------------->

                        <div class="input-group-prepend">
                            <span class="input-group-text">Nom</span>
                            <input type="text" class="form-control" placeholder="Nom" name="nom">
                        </div>

                        <br>

                        <div class="input-group-prepend">
                            <span class="input-group-text">Prénom</span>
                            <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                        </div>
                        
                        <br>

                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Adresse Mail" name="mail">
                        </div>
                        
                        <br>

                        <div class="input-group-prepend">
                            <span class="input-group-text">Centre</span>
                            <input type="text" class="form-control" placeholder="Ville du centre" name="centre">
                        </div>
                        
                        <br>

                        <div class="input-group-prepend">
                            <span class="input-group-text">Mot de passe</span>
                            <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                        </div>
                        
                        <br>
                        
                        <div class="d-flex justify-content-center">
                            <button value="add"  name="action" type="submit" class="btn yellow">Enregistrer les données</button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('css/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        @include('Partials/LegalPartial')
    </body>
</html>