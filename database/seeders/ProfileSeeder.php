<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Profile::create(['kategori' => 'sejarah', 'isi' => 'Isi sejarah Polrestabes Surabaya.']);
        Profile::create(['kategori' => 'pejabat', 'isi' => 'Data pejabat terkini.']);
        Profile::create(['kategori' => 'kebijakan', 'isi' => 'Kebijakan internal dan pelayanan publik.']);
    }
    //
}
