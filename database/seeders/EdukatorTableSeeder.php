<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Edukator;

class EdukatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Edukator::factory()->count(10)->create();
    }
}
