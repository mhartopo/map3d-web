<?php

use Illuminate\Database\Seeder;
use App\Water;
class WatersSeeder extends Seeder
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
        foreach(range(1, 20) as $i ) {
            Water::create([
                'name' => 'sungai ' . $faker->name,
                'type' => 'sungai',
                'function' => 'pengairan',
                'longitude' => $faker->longitude($min = 106, $max = 108),
                'latitude' => $faker->latitude($min = -6, $max = -7),
                'model_url' => $model,
                'description' => $faker->text($maxNbChars = 200),
                'cluster_id' => rand(1, 19)
            ]);
        }
    }
}
