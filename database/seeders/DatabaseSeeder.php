<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SeederZoo;
use Database\Seeders\SeederDrzava;
use Database\Seeders\SeederZivotinja;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seederZoo = new SeederZoo();
        $seederZoo->run();
        $seederDrzava = new SeederDrzava();
        $seederDrzava->run();
        $seederZivotinja = new SeederZivotinja();
        $seederZivotinja->run();
    }
}
