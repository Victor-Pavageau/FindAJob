<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Entreprise::create( [
            'nom_entreprise' => 'entreprise de test',
            'domaine_entreprise' => 'test',
            'mail_entreprise' => 'test@cesi.fr',
            'nombre_stagiaire_entreprise' => '10',
            'confiance_entreprise' => '10',
            'adresse_entreprise' => 'test rue des tests',
            'zipcode_entreprise' => '10000',
            'pays_entreprise'=>'test'
             ]);

        \App\Models\Promotion::create( [
                'Nom' => 'test nom',
                ]);

        \App\Models\Utilisateur::create( [
            'password' => 'test mdp',
            'Nom' => 'test nom',
            'Prenom' => 'test prenom',
            'Type' => '10',
            'Centre' => 'test centre',
            'CV' => 'test CV',
            'Lettre_de_motivation' => 'test lettre',
            'E_mail'=>'test@cesi.fr',
            'id_promotion'=>'1'
            ]);

        \App\Models\Offre_de_stage::create( [
            'intitule' => 'test intitule',
            'duree_du_stage' => '10',
            'base_de_remuneration' => '10',
            'date_du_stage' => '1000-01-01',
            'nombre_de_places' => '10',
            'id_entreprise' => '1', 
            ]);

        \App\Models\Candidature::create( [
            'Date' => '1000-01-01',
            'Statut' => '10',
            'id_offre_de_stage' => '1',
            'id_utilisateur' => '1',
            ]);

        \App\Models\Competence::create( [
            'Nom' => 'Test nom competence',
            'Niveau' => '10',   
            ]);

        \App\Models\Droit::create( [
            'SFx' => '10',   
            ]);
            
             
    }
}
//pour seeder : php artisan db:seed