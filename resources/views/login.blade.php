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
                        <br>
                        <div class="mb-4">
                            <form action="{{route('verifUtilisateur')}}" method="post">
                            @csrf
                                <div class="results">
                                    @if(Session::get('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    @if(Session::get('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif
                                </div>
                                <input type="text" name="E_mail" class="form-control" placeholder="Entrez votre adresse mail">
                                <span class="text-danger input-group mb-3">@error('E_mail'){{$message}} @enderror</span>
                                <input type="password" name="password" class="form-control login-password" placeholder="Entrez votre mot de passe">
                                <span class="text-danger input-group mb-3">@error('password'){{$message}} @enderror</span>
                                <br>
                                <button type="submit" class="btn btn-block btn-primary">Se Connecter</button>
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