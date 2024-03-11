<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang_ids = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        // Loop untuk membuat 30 detail transaksi
        for ($i = 1; $i <= 10; $i++) {
            // Ambil ID penjualan untuk transaksi saat ini
            $penjualan_id = $i;
            // Loop untuk setiap transaksi, menambahkan 3 detail transaksi
            for ($j = 0; $j < 3; $j++) {
                $barang_id = $barang_ids[($i + $j) % count($barang_ids)]; // Pilih ID barang secara bergantian
                $harga = rand(5000, 20000); // Harga acak antara 5000 dan 20000
                $jumlah = rand(1, 5); // Jumlah acak antara 1 dan 5

                // Menambahkan detail transaksi ke dalam array
                $penjualan_details[] = [
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => $jumlah,

                ];
            }
        }

        // Masukkan data penjualan detail ke dalam tabel
        DB::table('t_penjualan_detail')->insert($penjualan_details);
    }
}
