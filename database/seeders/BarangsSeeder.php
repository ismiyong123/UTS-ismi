<?php

namespace Database\Seeders;

use App\Models\barang as ModelsBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsBarang::insert(
            [
                [
                    'namaBarang' => 'Money Tart',
                    'fotoBarang' => 'gmb1.jpeg',
                    'harga' => 'Rp 1150000',
                    'stok' => '10',
                    'reviewBarang' => 'Money Bouquet, Bisa request pakai uang asli atau uang mainan, Jasa menyesuaikan ukuran money tart',
                ],
                [
                    'namaBarang' => 'Graduation Bouquet',
                    'fotoBarang' => 'gmb2.jpeg',
                    'harga' => 'Rp 100.000',
                    'stok' => '50',
                    'reviewBarang' => 'Graduation Bouquet, bisa request warna wrapping, boneka, dan bunga',
                ],
                [
                    'namaBarang' => 'Bloom Box Baby',
                    'fotoBarang' => 'gmb3.jpeg',
                    'harga' => 'Rp 185.000',
                    'stok' => '42',
                    'reviewBarang' => 'Sangat cocok untuk kado newborn, bisa request warna dan juga stiker balon',
                ],
            ]
        );
    }
}
