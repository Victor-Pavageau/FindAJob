<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <title>Identification</title>
    </head>

    <body>
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="card text-center" style="width: 100rem;">
                    <div class="card-header" >
                        <img class="card-img-top" src="https://www.cesi.fr/wp-content/uploads/2018/11/logo-CESI.png" alt="Card image cap" width="130rem" height="350rem">
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">Se Connecter à trouve ton stage</h1>
                        <div class="mb-4">
                            <input type="text" name="username" id="username" class="form-control login-username" value="" placeholder="Nom d'utilisateur" autocomplete="username">

                            <input type="password" name="password" id="password" value="" class="form-control login-password" placeholder="Mot de passe" autocomplete="current-password">
                        </div>
                        <a href="#" class="btn btn-primary">Connexion</a>
                        <input type="checkbox" name="rememberusername" id="rememberusername" value="0">
                        <label for="rememberusername" style=" color: black;">Se souvenir du nom d'utilisateur</label>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="#" class="badge badge-secondary">Mot de passe oublié</a><a href="#" class="badge badge-secondary">Créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>