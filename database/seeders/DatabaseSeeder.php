<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Seeders\CidadesTableSeeder;
use App\Seeders\MedicosTableSeeder;
use App\Seeders\PacientesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CidadesTableSeeder::class);
        $this->call(MedicosTableSeeder::class);
        $this->call(PacientesTableSeeder::class);
    }
}
