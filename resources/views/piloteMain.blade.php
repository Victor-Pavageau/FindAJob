<!doctype html>
<html lang="fr">
    <head>
        @include('Partials/HeadPartial')
        <title>Acceuil Pilotes</title>
    </head>

    <body>
        <header>
            @include('Partials/HeaderPartial')
        </header>
        
        <main>
            <!-------------------------------4 cards-------------------------->
            <div class="d-flex justify-content-center mt-3">
                <div class ="card-deck">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <!-------------------------------Entreprise-------------------------->
                        <div class="card-header">Entreprise</div>
                        <div class="card-body">
                            <h5 class="card-title border rounded"><a class= "text-white" href="#">Gerer les entreprises.</a></h5>
                            <p class="card-text">Rechercher, Créer, Modifier Evaluer et consulter les statistiques de l'entreprise.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted text-white">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <!-------------------------------Stage-------------------------->
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Stage</div>
                        <div class="card-body">
                            <h5 class="card-title border rounded"><a class= "text-white" href="#">Gerer les stages.</a></h5>
                            <p class="card-text">Rechercher une offre, Créer, Modifier, Supprimer et Consulter les statistiques des offres.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted text-white">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <!-------------------------------Cansidature-------------------------->
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Candidature</div>
                        <div class="card-body">
                            <h5 class="card-title border rounded"><a class= "text-white" href="#">Examiner ses candidatures.</a></h5>
                            <p class="card-text">Ajouter/Retirer une offre de la wish-list et postuler à une nouvelle offre.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted text-white">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <!-------------------------------Profil-------------------------->
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Profil</div>
                        <div class="card-body">
                            <h5 class="card-title border rounded"><a class= "text-white" href="#">Editer votre profil.</a></h5>
                            <p class="card-text">Modifier les données de l'utilisateur.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted text-white" >Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <!-------------------------------Entreprise-------------------------->
                        <div class="card-header">Délégués</div>
                        <div class="card-body">
                            <h5 class="card-title border rounded"><a class= "text-white" href="#">Gerer les délégués.</a></h5>
                            <p class="card-text">Rechercher, Créer, Modifier Evaluer et consulter les statistiques de l'entreprise.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted text-white">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <!-------------------------------Entreprise-------------------------->
                        <div class="card-header">Etudiants</div>
                        <div class="card-body">
                            <h5 class="card-title border rounded"><a class= "text-white" href="#">Gerer les étudiants.</a></h5>
                            <p class="card-text">Rechercher, Créer, Modifier Evaluer et consulter les statistiques de l'entreprise.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted text-white">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <aside>
            <div class="d-flex justify-content-center mt-5">
                <h1>Faciliter votre Recherche de stage</h1>
            </div>
            <div class="d-flex justify-content-center mt-2">	
                <h5>Ce site web  regroupe différentes offres de stage et permet de stocker les données des entreprises ayant déjà pris un stagiaire, ou qui en recherchent un. </h5>
            </div>
        </aside>
        @include('Partials/LegalPartial')
    </body>
    <script src=".\assets\darkmode\darkMode.js"></script>
</html>