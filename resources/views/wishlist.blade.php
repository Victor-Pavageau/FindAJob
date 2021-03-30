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
                        <div>
                            <select class="niveau" name="niveau">
                                <option>--Choisissez votre niveau--</option>
                                <option id="N1">A2</option>
                                <option id="N2">A3</option>
                                <option id="N3">A4</option>
                                <option id="N4">A5</option>
                            </select>
                            <select class="niveau" name="domaine">
                                <option>--Choisissez votre domaine--</option>
                                <option id="D1">Systèmes/Réseaux</option>
                                <option id="D2">Développement web</option>
                                <option id="D3">Gestion de données</option>
                                <option id="D4">Développement logiciel</option>
                                <option id="D5">Systèmes embarqués</option>
                            </select>
                            <button value="search"  name="action" type="submit" class="btn blue">Rechercher</button>
                        </div>
                    </form>
                    <br>
                <div class="offre">
                </div>
            </div>
            
            <div id="bloc2">
                <h2>Ma wishlist :</h2>
                <div>
                    <form class="Recherche">
                    </form>
                </div>
                <div class="offre">		
                </div>	
            </div>
        </main>
        @include('Partials/LegalPartial')
    </body>
</html>