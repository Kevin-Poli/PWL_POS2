<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailJualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Transaksi 1 (3 barang)
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1, // TV LED 32 inch
                'harga' => 2500000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 2, // Kulkas 2 Pintu
                'harga' => 3500000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 3, // Mesin Cuci
                'harga' => 2000000,
                'jumlah' => 1,
            ],

            // Transaksi 2 (3 barang)
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 4, // AC 1 PK
                'harga' => 3000000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 5, // Speaker Bluetooth
                'harga' => 750000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 6, // Kaos Polos
                'harga' => 50000,
                'jumlah' => 5,
            ],

            // Transaksi 3 (3 barang)
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 7, // Jaket Jeans
                'harga' => 200000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 8, // Kemeja Flanel
                'harga' => 150000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 9, // Celana Jeans
                'harga' => 230000,
                'jumlah' => 1,
            ],

            // Transaksi 4 (3 barang)
            [
                'detail_id' => 10,
                'penjualan_id' => 4,
                'barang_id' => 10, // Hoodie
                'harga' => 250000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 4,
                'barang_id' => 11, // Buku Tulis
                'harga' => 10000,
                'jumlah' => 10,
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 12, // Novel Fiksi
                'harga' => 75000,
                'jumlah' => 1,
            ],

            // Transaksi 5 (3 barang)
            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 13, // Ensiklopedia Anak
                'harga' => 150000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 5,
                'barang_id' => 14, // Komik
                'harga' => 40000,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 15, // Majalah
                'harga' => 35000,
                'jumlah' => 5,
            ],

            // Transaksi 6 (3 barang)
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 1, // TV LED 32 inch
                'harga' => 2500000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 6,
                'barang_id' => 5, // Speaker Bluetooth
                'harga' => 750000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 6,
                'barang_id' => 9, // Celana Jeans
                'harga' => 230000,
                'jumlah' => 2,
            ],

            // Transaksi 7 (3 barang)
            [
                'detail_id' => 19,
                'penjualan_id' => 7,
                'barang_id' => 7, // Jaket Jeans
                'harga' => 200000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 12, // Novel Fiksi
                'harga' => 75000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 21,
                'penjualan_id' => 7,
                'barang_id' => 10, // Hoodie
                'harga' => 250000,
                'jumlah' => 1,
            ],

            // Transaksi 8 (3 barang)
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 8, // Kemeja Flanel
                'harga' => 150000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 3, // Mesin Cuci
                'harga' => 2000000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 8,
                'barang_id' => 13, // Ensiklopedia Anak
                'harga' => 150000,
                'jumlah' => 1,
            ],

            // Transaksi 9 (3 barang)
            [
                'detail_id' => 25,
                'penjualan_id' => 9,
                'barang_id' => 15, // Majalah
                'harga' => 35000,
                'jumlah' => 10,
            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 9,
                'barang_id' => 9, // Celana Jeans
                'harga' => 230000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 27,
                'penjualan_id' => 9,
                'barang_id' => 11, // Buku Tulis
                'harga' => 10000,
                'jumlah' => 20,
            ],

            // Transaksi 10 (3 barang)
            [
                'detail_id' => 28,
                'penjualan_id' => 10,
                'barang_id' => 6, // Kaos Polos
                'harga' => 50000,
                'jumlah' => 10,
            ],
            [
                'detail_id' => 29,
                'penjualan_id' => 10,
                'barang_id' => 14, // Komik
                'harga' => 40000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 4, // AC 1 PK
                'harga' => 3000000,
                'jumlah' => 1,
            ]
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
