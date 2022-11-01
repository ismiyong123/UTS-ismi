<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert(
            [
                [
                    'kode_jenis_artikel' => 'OR',
                    'judul' => 'Cristiano Ronaldo Rilis Pernyataan Usai Dihukum oleh Manchester United',
                    'isi' => 'Pada Kamis (20/10/2022) malam WIB, Manchester United merilis pernyataan bahwa sang megabintang mereka, Cristiano Ronaldo, dihukum atas tindakan indisplinernya.
                    Hukuman tersebut adalah akibat dari perilakunya yang meninggalkan lapangan sebelum pertandingan berakhir dalam laga Manchester United kontra Tottenham Hotspur.',
                ],
                [
                    'kode_jenis_artikel' => 'PL',
                    'judul' => 'Mahfud: Politik Uang Sulit Dihindari saat Pemilu 2024',
                    'isi'=> 'enteri Koordinator Bidang Politik, Hukum, dan Keamanan (Menko Polhukam) Mahfud MD optimistis Pemilu 2024 bakal terselenggara sesuai jadwal. Hanya saja, dia pesimistis pesta demokrasi itu terhindar dari praktik politik uang
                    "Bahwa akan terjadi politik uang dan sebagainya, itu masih sangat sulit dihindari," kata Mahfud saat berdiskusi dengan Rocky Gerung di kantor Kemenkopolhukam, Jakarta, yang ditayangkan di RGTV Channel ID, Senin (17/10/2022)',
                ]
            ]
        );
    }
}
