<?php

use App\Models\Site;
use Illuminate\Database\Seeder;

class SitesSeeder extends Seeder
{
    public function run()
    {
        Site::create(['name' => 'ALLADA']);
        Site::create(['name' => 'Zè']);
        Site::create(['name' => 'ZÈ Hèkanmè']);
        Site::create(['name' => 'ZÈ Hèkanmè 4']);
        Site::create(['name' => 'ZÈ Hèkanmè 1']);
        Site::create(['name' => 'ZÈ Hèkanmè 2']);
        Site::create(['name' => 'ZÈ Hèkanmè 3']);
        Site::create(['name' => 'TORI CADA']);
        Site::create(['name' => 'ZÈ DODJI - BATA']);
        Site::create(['name' => 'ZINVIÉ']);
        Site::create(['name' => 'SÉKOU ']);
        Site::create(['name' => 'OUÈDO 1']);
        Site::create(['name' => 'OUIDAH']);
        Site::create(['name' => 'OUÈDO 2']);
        Site::create(['name' => 'PAHOU']);
        Site::create(['name' => 'GLO']);
        Site::create(['name' => 'DJREGBE 2']);
        Site::create(['name' => 'ABOMEY CALAVI']);



        // Ajoute d'autres sites si nécessaire
    }
}
