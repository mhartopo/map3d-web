<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OwnersSeeder::class);
        $this->call(ClustersSeeder::class);
        $this->call(BuildingsSeeder::class);
        $this->call(LandsSeeder::class);
        $this->call(ParksSeeder::class);
        $this->call(WatersSeeder::class);
        $this->call(StreetsSeeder::class);
    }
}
