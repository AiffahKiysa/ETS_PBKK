<?php

namespace Database\Seeders;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\RekamMedis;
use Database\Factories\rekamMedisFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        rekamMedis::factory(20)->create();
        
        Dokter::create([
            'name' => 'dr. Melissa Ayu',
            'slug' => 'melissa-ayu'
        ]);
        Dokter::create([
            'name' => 'dr. Abdul Aziz',
            'slug' => 'abdul-aziz'
        ]);
        Dokter::create([
            'name' => 'dr. Alexander Ferdinand',
            'slug' => 'alexander-ferdinand'
        ]);
        Dokter::create([
            'name' => 'dr. Bayu Murti',
            'slug' => 'bayu-murti'
        ]);
        Dokter::create([
            'name' => 'dr. Berlian Sudteja',
            'slug' => 'berlian-sudteja'
        ]);

        Pasien::create([
            'name' => 'Brandon Haskel',
            'slug' => 'brandon-haskel'
        ]);
        Pasien::create([
            'name' => 'Candy Natalia',
            'slug' => 'candy-natalia'
        ]);
        Pasien::create([
            'name' => 'Dedi Setiawan',
            'slug' => 'dedi-setiawan'
        ]);
        Pasien::create([
            'name' => 'Bayu teguh',
            'slug' => 'bayu-teguh'
        ]);
        Pasien::create([
            'name' => 'Susi Handani',
            'slug' => 'susi-handani'
        ]);
    }
}
