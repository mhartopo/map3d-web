<?php

use Illuminate\Database\Seeder;
use App\Cluster;

class ClustersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $type = "normal class";
        $model = "tes.com";

        foreach(range(1, 20) as $i ) {
            Cluster::create([
                'name' => $faker->name . ' Cluster',
                'type' => $type,
                'address' => $faker->address,
                'longitude' => $faker->longitude($min = 106, $max = 108),
                'latitude' => $faker->latitude($min = -6, $max = -7),
                'model_url' => $model,
                'description' => $faker->text($maxNbChars = 200),
                'owner_id' => rand(1,30)
            ]);
        }
    }
}
