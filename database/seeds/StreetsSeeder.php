<?php

use Illuminate\Database\Seeder;
use App\Street;
class StreetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $model = 'tes.com';
        foreach(range(1, 80) as $i ) {
            Street::create([
                'name' => 'Jalan ' . $faker->name,
                'type' => 'jalan raya',
                'longitude' => $faker->longitude($min = 106, $max = 108),
                'latitude' => $faker->latitude($min = -6, $max = -7),
                'model_url' => $model,
                'description' => $faker->text($maxNbChars = 200),
                'cluster_id' => rand(1, 19)
            ]);
        }
    }
}
