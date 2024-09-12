<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Stok untuk Barang Elektronik (5 barang)
            [
                'stok_id' => 1,
                'barang_id' => 1, // TV LED 32 inch
                'user_id' => 1,   // Admin
                'stok_tangal' => now(),
                'stok_jumlah' => 10,
            ],
            [
                'stok_id' => 2,
                'barang_id' => 2, // Kulkas 2 Pintu
                'user_id' => 1,   // Admin
                'stok_tangal' => now(),
                'stok_jumlah' => 8,
            ],
            [
                'stok_id' => 3,
                'barang_id' => 3, // Mesin Cuci
                'user_id' => 1,   // Admin
                'stok_tangal' => now(),
                'stok_jumlah' => 12,
            ],
            [
                'stok_id' => 4,
                'barang_id' => 4, // AC 1 PK
                'user_id' => 1,   // Admin
                'stok_tangal' => now(),
                'stok_jumlah' => 7,
            ],
            [
                'stok_id' => 5,
                'barang_id' => 5, // Speaker Bluetooth
                'user_id' => 1,   // Admin
                'stok_tangal' => now(),
                'stok_jumlah' => 15,
            ],

            // Stok untuk Barang Pakaian (5 barang)
            [
                'stok_id' => 6,
                'barang_id' => 6, // Kaos Polos
                'user_id' => 2,   // Manager
                'stok_tangal' => now(),
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 7,
                'barang_id' => 7, // Jaket Jeans
                'user_id' => 2,   // Manager
                'stok_tangal' => now(),
                'stok_jumlah' => 50,
            ],
            [
                'stok_id' => 8,
                'barang_id' => 8, // Kemeja Flanel
                'user_id' => 2,   // Manager
                'stok_tangal' => now(),
                'stok_jumlah' => 70,
            ],
            [
                'stok_id' => 9,
                'barang_id' => 9, // Celana Jeans
                'user_id' => 2,   // Manager
                'stok_tangal' => now(),
                'stok_jumlah' => 60,
            ],
            [
                'stok_id' => 10,
                'barang_id' => 10, // Hoodie
                'user_id' => 2,    // Manager
                'stok_tangal' => now(),
                'stok_jumlah' => 40,
            ],

            // Stok untuk Barang Buku (5 barang)
            [
                'stok_id' => 11,
                'barang_id' => 11, // Buku Tulis
                'user_id' => 3,    // Staff/Kasir
                'stok_tangal' => now(),
                'stok_jumlah' => 200,
            ],
            [
                'stok_id' => 12,
                'barang_id' => 12, // Novel Fiksi
                'user_id' => 3,    // Staff/Kasir
                'stok_tangal' => now(),
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 13,
                'barang_id' => 13, // Ensiklopedia Anak
                'user_id' => 3,    // Staff/Kasir
                'stok_tangal' => now(),
                'stok_jumlah' => 30,
            ],
            [
                'stok_id' => 14,
                'barang_id' => 14, // Komik
                'user_id' => 3,    // Staff/Kasir
                'stok_tangal' => now(),
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 15,
                'barang_id' => 15, // Majalah
                'user_id' => 3,    // Staff/Kasir
                'stok_tangal' => now(),
                'stok_jumlah' => 90,
            ]
        ];

        DB::table('t_stok')->insert($data);
    }
    }

