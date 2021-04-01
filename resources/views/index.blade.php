<!doctype html>
<html lang="fr">
    <head>
        @laravelPWA
        @include('Partials/HeadPartial')
        <title>Accueil</title>
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
                            <h5 class="card-title border rounded"><a class= "text-white" href="{{route('entreprise')}}">Gerer les entreprises.</a></h5>
                            <p class="card-text" style="color:black">Rechercher, Créer, Modifier Evaluer et consulter les entreprises.</p>
                        </div>
                    </div>
                    <!-------------------------------Stage-------------------------->
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Stage</div>
                        <div class="card-body">
                            <h5 class="card-title border rounded"><a class= "text-white" href="{{route('offres_de_stage')}}">Gerer les stages.</a></h5>
                            <p class="card-text" style="color:black">Rechercher, Créer, Modifier, Supprimer et Consulter les offres.</p>
                        </div>
                    </div>
                    <!-------------------------------Candidature-------------------------->
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Candidature</div>
                        <div class="card-body">
                            <h5 class="card-title border rounded"><a class= "text-white" href="{{route('mescandidatures')}}">Examiner ses candidatures.</a></h5>
                            <p class="card-text" style="color:black">Gérer ma wishlist et mes candidatures.</p>
                        </div>
                    </div>
                    <!-------------------------------Profil-------------------------->
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Profil</div>
                        <div class="card-body">
                            <h5 class="card-title border rounded"><a class= "text-white" href="{{route('mesdonnees')}}">Editer votre profil.</a></h5>
                            <p class="card-text" style="color:black">Modifier les données de l'utilisateur.</p>
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
                <h5>Ce site web  regroupe différentes offres de stage et permet de stocker les données des entreprises ayant déjà pris un stagiaire, ou qui en recherchent un. 
                </h5>
            </div>
        </aside>
        @include('Partials/LegalPartial')
    </body>
</html>