<?php

namespace Database\Seeders;

use App\Models\Kategori;
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
        \App\Models\User::factory(1)->create();

        Kategori::create([
            'ket_kategori' => 'Kesehatan'
        ]);
        Kategori::create([
            'ket_kategori' => 'Keamanan'
        ]);
        Kategori::create([
            'ket_kategori' => 'Kebersihan'
        ]);
    }
}
