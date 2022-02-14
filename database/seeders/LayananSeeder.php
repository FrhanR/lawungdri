<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            'nama' => 'Reguler',
            'durasi' => 48,
            'harga' => 5000
        ]);

        Layanan::create([
            'nama' => 'Kilat',
            'durasi' => 24,
            'harga' => 12000
        ]);

        Layanan::create([
            'nama' => 'Express',
            'durasi' => 12,
            'harga' => 20000
        ]);

        Layanan::create([
            'nama' => 'VIP',
            'durasi' => 1,
            'harga' => 50000
        ]);
    }
}
