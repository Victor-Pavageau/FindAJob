<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <link rel="stylesheet" href="{{ asset('css/inscription.css') }}">
        <title>Inscription</title>
    </head>
    <body>
        <div id="general_kenobi" class="bg-image d-flex justify-content-center align-items-center">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div  class="text-light" style="max-width: 36rem;">
                        <div class="card-header"><h1 class="mb-0">Formulaire d'inscription</h1></div>
                            <div class="card-body text-light">
                                <p class="card-text text-center" >Entrez vos informations d'utilisateur.</p>
                            </div>

                            <!------------------- FORMULAIRE D'INSCRIPTION-------------------------------------------->
                            <form action="{{ route('creeUtilisateur')}}" method="post">
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
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nom</span>
                                    </div>
                                    <input type="text" class="form-control" name="Nom" value="{{ old('Nom')}} ">
                                    <span class="text-danger input-group mb-3">@error('Nom'){{$message}} @enderror</span>
                                </div>
                                    
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Prénom</span>
                                    </div>
                                    <input type="text" class="form-control" name = "Prenom" value="{{ old('Prenom')}}">
                                    <span class="text-danger input-group mb-3">@error('Prenom'){{$message}} @enderror</span>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Email</span>
                                    </div>
                                    <input type="email" class="form-control" name="E_mail" value="{{old('E_mail')}}">
                                    <span class="text-danger input-group mb-3">@error('E_mail'){{$message}} @enderror</span>
                                </div>

                                <div id="Adresse">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Centre</span>
                                        </div>
                                        <input type="text" class="form-control" name="Centre" value="{{old('Centre')}}">
                                        <span class="text-danger input-group mb-3">@error('Centre'){{$message}} @enderror</span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Promotion assignée</span>
                                        </div>
                                        <select name="Promotion" class="custom-select" value="{{old('Promotion')}}">
                                            <option disabled selected value> Selectionnez une promotion </option>
                                            <option value="A1">A1</option>
                                            <option value="A2">A2</option>
                                            <option value="A3">A3</option>
                                            <option value="A4">A4</option>
                                            <option value="A5">A5</option>
                                        </select>
                                        <span class="text-danger input-group mb-3">@error('Promotion'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mot de passe</span>
                                    </div>
                                    <input type="password" class="form-control" name='password'>
                                    <span class="text-danger input-group mb-3">@error('password'){{$message}} @enderror</span>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-dark btn-primary btn-lg btn-block">Confirmer l'inscription</button>
                                <a href="{{route('identification')}}" class="btn btn-primary btn-block" >J'ai déjà un compte</a>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('css/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        @include('Partials/LegalPartial')
    </body>
</html>