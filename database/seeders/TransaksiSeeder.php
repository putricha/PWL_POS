<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_penjualan')->insert([
                'penjualan_id' => $i,
                'user_id' => 2, 
                'pembeli' => 'Pembeli ' . $i,
                'penjualan_kode' => 'PJ00' . $i,
                'penjualan_tanggal' => now(),
            ]);
        }
    }
}
