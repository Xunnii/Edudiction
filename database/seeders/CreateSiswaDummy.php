<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateSiswaDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $faker = Factory::create();

        foreach (range(1, 50) as $index) { // Generate 50 data
            DB::table('siswa')->insert([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'kelas' => $faker->randomElement(['12', '11', '10', '9', '8', '7', '6', '5', '4', '3']),
                'mataPelajaran' => $faker->randomElement([
                    'Matematika', 'Fisika', 'Biologi', 'Kimia', 'IPA', 'IPS',
                    'PKN', 'Agama Islam', 'Bahasa Indonesia', 'Bahasa Inggris'
                ]),
                'tanggal' => $faker->date,
                'pukul' => $faker->time,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
