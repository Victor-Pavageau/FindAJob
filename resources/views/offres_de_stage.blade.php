<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <link rel="stylesheet" href="{{ asset('css/offre_de_stage.css') }}">
        <title>Offres de stage</title>
    </head>
    <!---------HEADER----------------------------------------------------------------------->

    <body>
        <header>
            @include('Partials/HeaderPartial')
        </header>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <h2>Gerer les offres de stage :</h2>
                    <div class="row">
                        <form action="" method="post">
                            @csrf
                            <div>
                                <button value="search"  name="action" type="submit" class="btn red">Rechercher l'offre</button>
                                <button value="add"  name="action" type="submit" class="btn blue">Ajouter une offre</button>
                                <button value="update"  name="action" type="submit" class="btn green">Modifier l'offre</button>
                                <br><br>
                                <button value="delete"  name="action" type="submit" class="btn yellow">Supprimer l'offre</button>
                            </div>

                            <br><br>

                            <!---------Formulaire de l'entreprise----------------------------------------------------------------------->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Intitulé</span>
                                    <input type="text" class="form-control" name="intitule">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Nom Entreprise</span>
                                    <input type="text" class="form-control" name="nom_entreprise">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Durée du stage</span>
                                    <input type="text" class="form-control" placeholder="ex : 6 mois" name="duree_du_stage">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Base de rémunération</span>
                                    <input type="text" class="form-control" placeholder="ex : 2000€" name="base_de_remuneration">
                                </div>                            
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Date du stage</span>
                                    <input type="Date" class="form-control" placeholder="Numéro de téléphone" name="date_du_stage">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nombre de places</span>
                                    <input type="text" class="form-control" value="1" name="nombre_de_places">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-8">
                    <h2>Consulter les offres de stage :</h2>
                    <div id="foreachacacher" style="overflow:auto; border:#000000 1px solid; min-height: 100px; max-height: 350px; height: auto;">
                        @foreach (DB::table('offre_de_stage')->get() as $offre_de_stage) 
                            <div class="col">
                                <fieldset>
                                    <legend style="background-color: #000; color: #fff;">
                                        <form action="" method="post">
                                            @csrf
                                            <button value="postuler" name="action" type="submit" class="btn blue float-right">Postuler pour cette Offre</button>
                                            <button value="wish" name="action" type="submit" class="btn yellow float-right"><i class="fas fa-star"></i></button>
                                            <input type="hidden" class="form-control" name="id_utilisateur_cookie" value="{{ json_decode(Cookie::get('utilisateur'))->id}}">
                                            <input type="hidden" class="form-control" name="id_offre_de_stage" value="{{ $offre_de_stage->id}}">
                                        </form>
                                        <label class="d-flex justify-content-center">{{ $offre_de_stage->intitule}}</label>
                                    </legend>
                                    <label> - Durée du stage : {{ $offre_de_stage->duree_du_stage}} </label><br>
                                    <label> - Salaire : {{ $offre_de_stage->base_de_remuneration}}€/mois</label><br>
                                    <label> - Début du stage le : {{ $offre_de_stage->date_du_stage}}</label><br>
                                    <label> - Ce stage propose : {{ $offre_de_stage->nombre_de_places}} places</label><br>
                                </fieldset> <br><br>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('Partials/LegalPartial')
    </body>
</html>