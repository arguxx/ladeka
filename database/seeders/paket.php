<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class paket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 20; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('paket')->insert([
                'namaPaket' => $faker->colorName(),
    			'deskripsi' => $faker->text(20),
    			'deskripsi1' => $faker->text(21),
    			'deskripsi2' => $faker->text(22),
    			'harga' => $faker->numberBetween(1000000,9999999),
    	]);
        }
    }
}