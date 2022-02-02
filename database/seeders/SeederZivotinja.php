<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zivotinja;

class SeederZivotinja extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zivotinja::factory()->count(85)->create();
    }
}
