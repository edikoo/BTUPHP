<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,20) as $index)
        {
            DB::table('applicants')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'position' => $faker->randomElement(['ARCHITECT', 'FRONT_END', 'BACK_END']),
                'phone' => $faker->randomNumber($nbDigits = 8),
                'is_hired' => $faker->boolean()
            ]);
        }
    }
}
