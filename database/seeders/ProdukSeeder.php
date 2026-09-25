<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;


class ProdukSeeder extends Seeder
{
    public function run(): void
    {

        $daftarProduk = [
            ['nama_produk' => 'LipCream Boba Hanasui',    'harga' => 23000,  'stok' => 30],
            ['nama_produk' => 'Cushion Dazzle Me',        'harga' => 112000,  'stok' => 55],
            ['nama_produk' => 'Implora Eyeshadow Pro Pallete',   'harga' => 52000,  'stok' => 34],
            ['nama_produk' => 'Glowshopy Lipbalm',         'harga' => 33000, 'stok' => 33],
            ['nama_produk' => 'Micellar Water Glad2Glow',  'harga' => 45000, 'stok' => 50],
            ['nama_produk' => 'Pixy BB Cream',    'harga' => 44000, 'stok' => 33],
            ['nama_produk' => 'Animate Covering Cream', 'harga' => 31000, 'stok' => 33],
            ['nama_produk' => 'Lip Serum Animate',    'harga' => 23400,  'stok' => 35],
            ['nama_produk' => 'Lip Balm Hanasui Next Level',    'harga' => 36000,  'stok' => 44],
            ['nama_produk' => 'Serum Implora Luminous Brightening',    'harga' => 27700,  'stok' => 11],
            ['nama_produk' => 'Elformula Cerahydro Moisturizer',    'harga' => 112130,  'stok' => 22],
            ['nama_produk' => 'Dazzle Me Setting Spray',    'harga' => 34223,  'stok' => 30],
            ['nama_produk' => 'Azura Lose Powder',    'harga' => 28454,  'stok' => 22],
        ];

        foreach ($daftarProduk as $produk) {

            Produk::firstOrCreate(['nama_produk' => $produk['nama_produk']], $produk);
        }
    }
}
