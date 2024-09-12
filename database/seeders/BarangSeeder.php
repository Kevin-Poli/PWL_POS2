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
            // Barang dari Supplier 1 (Elektronik)
            [
                'barang_id' => 1,
                'kategori_id' => 1, 
                'barang_kode' => 'BRG001',
                'barang_nama' => 'TV LED 32 inch',
                'harga_beli' => 2000000,
                'harga_jual' => 2500000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Kulkas 2 Pintu',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Mesin Cuci',
                'harga_beli' => 1500000,
                'harga_jual' => 2000000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'AC 1 PK',
                'harga_beli' => 2500000,
                'harga_jual' => 3000000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Speaker Bluetooth',
                'harga_beli' => 500000,
                'harga_jual' => 750000,
            ],

            // Barang dari Supplier 2 (Pakaian)
            [
                'barang_id' => 6,
                'kategori_id' => 2, 
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 30000,
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Jaket Jeans',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Kemeja Flanel',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 2,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 180000,
                'harga_jual' => 230000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 2,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Hoodie',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],

            // Barang dari Supplier 3 (Buku)
            [
                'barang_id' => 11,
                'kategori_id' => 3, 
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Buku Tulis',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 3,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Novel Fiksi',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Ensiklopedia Anak',
                'harga_beli' => 120000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 3,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Komik',
                'harga_beli' => 30000,
                'harga_jual' => 40000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 3,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Majalah',
                'harga_beli' => 25000,
                'harga_jual' => 35000,
            ]
        ];

        DB::table('m_barang')->insert($data);
    }
    }

