<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <link rel="stylesheet" href="{{ asset('css/offre_de_stage.css') }}">
        <title>Offres de stage</title>
    </head>
    <!---------HEADER----------------------------------------------------------------------->

    <header>
        <nav class="navbar navbar-light" style="background-color: #fff;">
            <!----->
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{ asset('logo.png') }}" width="50" height="50" class="d-inline-block align-middle" alt="">
                <p class="d-inline-block align-bottom" alt="">Annuaire d'entreprises</p>
            </a>



            <!----->
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
                    <h2>Gerer les offres de stage :</h2>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn blue" onclick="ajouterOffre()">Ajouter une offre</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn green" onclick="modifierOffre()">Modifier l'offre</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn yellow" onclick="supprimerOffre()">Supprimer l'offre</button>
                        </div>
                        <div class="row">
                            <div class="col-6">

                                <!---------Formulaire de l'entreprise----------------------------------------------------------------------->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" >Compétences</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Compétences recherchées" aria-label="Nom" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Entreprise</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nom de l'entreprise" aria-label="Nom" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Localité</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Adresse de l'entreprise" aria-label="Nom" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Promotions concernées</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="ex : A3" aria-label="Nom" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Durée du stage</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="ex : 6 mois" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Base de rémunération</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="ex : 2000€" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="col-6 ">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Date de l'offre</span>
                                    </div>
                                    <input type="Date" class="form-control" placeholder="Numéro de téléphone" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nombre de places</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="ex : 4" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
                                </div>
                                <div>
                                    <button type="button" class="btn red" onclick="rechecherOffre()">Rechercher l'offre</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <h2>Consulter les offres de stage :</h2>
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