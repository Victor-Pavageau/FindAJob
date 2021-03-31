<!DOCTYPE html>
<html>
    <head>
        @include('Partials/HeadPartial')
        <link rel="stylesheet" href="{{ asset('css/mescandidatures.css') }}">
        <title>Candidature</title>
    </head>
    
    <body>
        <header>
            @include('Partials/HeaderPartial')
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