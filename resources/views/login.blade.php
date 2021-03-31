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
                        <img class="card-img-top" src="https://www.cesi.fr/wp-content/uploads/2018/11/logo-CESI.png" alt="Card image cap" width="50%" height="auto">
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">Se connecter à Trouve1Stage</h1>
                        <div class="mb-4">
                            <form action="">
                                <input type="text" name="email" class="form-control login-username" placeholder="Entrez votre adresse mail">
                                <br>
                                <input type="password" name="password" class="form-control login-password" placeholder="Mot de passe">
                                <br>
                                <button type="submit" class="btn btn-block btn-primary">Se Connecter</button>
                                <br>
                                <a href="{{route('inscription')}}">Crée un compte</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>