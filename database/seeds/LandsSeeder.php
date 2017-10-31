<?php

use Illuminate\Database\Seeder;
use App\Land;
class LandsSeeder extends Seeder
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
        foreach(range(1, 50) as $i ) {
            Land::create([
                'address' => $faker->address,
                'function' => 'tidak ada',
                'value' => rand(100000, 1000000000),
                'length' => rand(5, 200),
                'width' => rand(5,200),
                'longitude' => $faker->longitude($min = 106, $max = 108),
                'latitude' => $faker->latitude($min = -6, $max = -7),
                'model_url' => $model,
                'description' => $faker->text($maxNbChars = 200),
                'owner_id' => rand(1,50),
                'cluster_id' => rand(1,19)
            ]);
        }
    }
}
