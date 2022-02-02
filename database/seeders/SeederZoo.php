<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zoo;

class SeederZoo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zoo::factory()->count(50)->create();
    }
}
