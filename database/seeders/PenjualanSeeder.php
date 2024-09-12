<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1, // Admin
                'pembeli' => 'Budi Santoso',
                'penjualan_kode' => 'PNJ001',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2, // Manager
                'pembeli' => 'Siti Aminah',
                'penjualan_kode' => 'PNJ002',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3, // Staff/Kasir
                'pembeli' => 'Adi Pranoto',
                'penjualan_kode' => 'PNJ003',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1, // Admin
                'pembeli' => 'Lina Agustin',
                'penjualan_kode' => 'PNJ004',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2, // Manager
                'pembeli' => 'Tono Suherman',
                'penjualan_kode' => 'PNJ005',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3, // Staff/Kasir
                'pembeli' => 'Rina Lestari',
                'penjualan_kode' => 'PNJ006',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1, // Admin
                'pembeli' => 'Rudi Hartono',
                'penjualan_kode' => 'PNJ007',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2, // Manager
                'pembeli' => 'Dewi Anggraeni',
                'penjualan_kode' => 'PNJ008',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3, // Staff/Kasir
                'pembeli' => 'Bagas Sutrisno',
                'penjualan_kode' => 'PNJ009',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1, // Admin
                'pembeli' => 'Farida Iskandar',
                'penjualan_kode' => 'PNJ010',
                'penjualan_tanggal' => now(),
            ]
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
