<!DOCTYPE html>
<html>
    <head>
        @include('Partials/HeadPartial')
        <link rel="stylesheet" href="{{ asset('css/wishlist.css') }}">
        <title>Favoris</title>
    </head>
    
    <body>
        <header>
            @include('Partials/HeaderPartial')
        </header>

        <main>
            <div>
                <h1>Gestion des candidatures</h1>
            </div>
            <div id="bloc1">
                <h2>Rechercher une offre :</h2>
                <form action="" method="post">
                    @csrf
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
                            <input type="text" class="form-control" name="nombre_de_places">
                        </div>
                    </div>
                    <button value="search"  name="action" type="submit" class="btn blue">Rechercher</button>
                    <button value="delete"  name="action" type="submit" class="btn yellow">Supprimer</button>
                    <button type="button" class="btn red" onclick="history.go(-1)"> Retour</button>
                </form>
                <br>
            </div>
            
            <div id="bloc2">
                <h2>Ma wishlist :</h2>
                <div style="overflow:auto; border:#000000 1px solid; max-width: 500px; min-height: 100px; max-height: 350px; height: auto;">
                </div>	
            </div>
        </main>
        @include('Partials/LegalPartial')
    </body>
</html>