<?php

use Illuminate\Database\Seeder;
use App\Owner;

class OwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $type = "normal";
        foreach(range(1, 100) as $i ) {
            Owner::create([
                'name' => $faker->name,
                'type' => $type,
                'telephone' => $faker->phoneNumber
            ]);
        }
    }
}
