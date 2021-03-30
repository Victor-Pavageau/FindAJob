<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <title>Entreprise</title>
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
                    <h2>Gerer les entreprises.</h2>

                    <div class="row">

                    <form action="{{ route('entreprise')}}" method="POST">
                        @csrf
                        <div class="col">
                            <button type="submit" class="btn blue">Ajouter l'Entreprise</button>
                        </div>
                        <!-- <div class="col">
                            <button type="submit" class="btn green">Modifier l'Entreprise</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn yellow">Noter l'Entreprise</button>
                        </div> -->

                        <!---------Formulaire de l'entreprise----------------------------------------------------------------------->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend form-group">
                                <label class="input-group-text">Nom</label>
                                <input type="text" class="form-control" placeholder="Nom de l'entreprise" name="nom_entreprise">
                            </div>
                        </div>
					</form>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Domaine</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Domaine de spécialité" aria-label="Nom" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Adresse mail de l'entreprise" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Adresse mail de l'entreprise" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Adresse de l'entreprise" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                        </div>

                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ville" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Code postal" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe-africa"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Pays" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                        </div>
                        
                    </div>
                </div>

                <div class="col-8">
                    <h2>Consulter les entreprises.</h2>
                </div>

            </div>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>