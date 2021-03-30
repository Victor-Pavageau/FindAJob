<!DOCTYPE html>
<html>
    <head>
        @include('Partials/HeadPartial')
        <link rel="stylesheet" href="{{ asset('css/mescandidatures.css') }}">
        <title>Candidature</title>
    </head>
    
    <body>
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
            <br>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    <form action="" method="post">
                        @csrf
                        <button value="add"  name="action" type="submit" class="btn blue">Déposer ma candidature</button>
                        <br><br>

                        <div class="col">
                            <div class="input-group mb-3">
                                <label class="input-group-text" >Fiche de Validation</label>
                                <input type="file" accept=".doc, .docx, .pdf, .png, .jpeg" name="fiche_validation_candidature">
                            </div>

                            <div class="input-group mb-3">
                                    <label class="input-group-text" >Convention</label>
                                    <input type="file" accept=".doc, .docx, .pdf, .png, .jpeg" name="convention_candidature">
                            </div>
                        </div>
                    </form>
                        
                    <div class="col">
                        <h3>Gestion des candidatures</h3>
                        <div style="overflow:auto; border:#000000 1px solid; max-width: 500px; min-height: 100px; max-height: 350px; height: auto;">
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn red" onclick="history.go(-1)"> Retour</button>
        </main>
        @include('Partials/LegalPartial')
    </body>
</html>