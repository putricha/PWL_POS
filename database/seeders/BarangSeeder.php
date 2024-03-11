<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1, 
                'barang_kode' => 'B001',
                'barang_nama' => 'Indomie goreng 75gr',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
            ],
            [
                'kategori_id' => 1, 
                'barang_kode' => 'B002',
                'barang_nama' => 'Sedap goreng 75gr',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'kategori_id' => 2, 
                'barang_kode' => 'B003',
                'barang_nama' => 'Pocari sweet 500ml',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' => 2, 
                'barang_kode' => 'B004',
                'barang_nama' => 'Ultramilk',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' => 3, 
                'barang_kode' => 'B005',
                'barang_nama' => 'Beras',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' => 3, 
                'barang_kode' => 'B006',
                'barang_nama' => 'Minyak goreng',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'kategori_id' => 4, 
                'barang_kode' => 'B007',
                'barang_nama' => 'Minyak Kayu Putih',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' => 4, 
                'barang_kode' => 'B008',
                'barang_nama' => 'Salonpas',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' => 5, 
                'barang_kode' => 'B009',
                'barang_nama' => 'Sunlight',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' => 5, 
                'barang_kode' => 'B010',
                'barang_nama' => 'Mama lemon',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
        ];

        DB::table('m_barang')->insert($data);

    }
}
