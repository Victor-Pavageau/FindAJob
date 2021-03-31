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

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Intitulé de l'offre</span>
                                    <input type="text" class="form-control" placeholder="" name="intitule">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nom de l'utilisateur</span>
                                    <input type="text" class="form-control" placeholder="" name="Nom">
                                </div>
                            </div>
                        </div>
                    </form>
                        
                    <div class="col">
                        <h3>Gestion des candidatures</h3>
                        <div style="overflow:auto; border:#000000 1px solid; min-height: 100px; max-height: 350px; height: auto;">
                            <!--@foreach (DB::table('entreprise')->get() as $entreprise) 
                                <div class="col">
                                    <fieldset>
                                        <legend class="d-flex justify-content-center" style="background-color: #000; color: #fff;">{{ $entreprise->nom_entreprise}}</legend>
                                        <label> - Domaine de l'entreprise : {{ $entreprise->domaine_entreprise}} </label><br>
                                        <label> - Adresse mail de l'entreprise {{ $entreprise->mail_entreprise}} </label><br>
                                        <label> - Note de confiance de l'entreprise {{ $entreprise->confiance_entreprise}}/10 </label><br>
                                        <label> - Adresse de l'entreprise : {{ $entreprise->adresse_entreprise}},</label> <label> {{ $entreprise->zipcode_entreprise}} -</label> <label> {{ $entreprise->pays_entreprise}} </label><br>
                                        <label> - Nombre de Stagiaire : {{ $entreprise->nombre_stagiaire_entreprise}} </label><br>
                                    </fieldset> <br><br>
                                </div>
                            @endforeach-->
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn red" onclick="history.go(-1)"> Retour</button>
        </main>
        @include('Partials/LegalPartial')
    </body>
</html>