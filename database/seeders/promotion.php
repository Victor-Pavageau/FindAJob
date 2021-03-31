<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class promotion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Promotion::create( [
            'Nom' => 'A1',
            ]);

        \App\Models\Promotion::create( [
            'Nom' => 'A2',
            ]);

        \App\Models\Promotion::create( [
            'Nom' => 'A3',
            ]);

        \App\Models\Promotion::create( [
            'Nom' => 'A4',
            ]);

        \App\Models\Promotion::create( [
            'Nom' => 'A5',
            ]);
    }
}
//pour seeder : php artisan db:seed --class=promotion
