<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 2000; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('member')->insert([
                'kodeUnik' => $faker->numberBetween(100000, 999999),
    			'namaLengkap' => $faker->name,
    			'tanggalLahir' => $faker->date(),
    			'noTelp' => $faker->numberBetween(1000000,9999999),
    			'email' => $faker->email
    	]);
        }
    }
}