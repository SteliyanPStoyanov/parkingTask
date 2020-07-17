<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('cars')->insert([
            'carNumber' => 'CB'.$faker->numberBetween($min = 1000, $max = 9000).'CB',
            'carType' => '1',
            'ownerName' => $faker->name,
            'ownerPhone' => $faker->phoneNumber,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('cars')->insert([
            'carNumber' => 'CB'.$faker->numberBetween($min = 1000, $max = 9000).'CB',
            'carType' => '3',
            'ownerName' => $faker->name,
            'ownerPhone' => $faker->phoneNumber,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    }
}
