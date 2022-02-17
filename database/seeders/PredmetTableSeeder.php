<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Predmet;

class PredmetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Predmet::factory()->count(3)->create();
    }
}
