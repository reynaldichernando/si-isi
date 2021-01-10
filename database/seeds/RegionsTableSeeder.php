<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            [
                'name' => "Cakung",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Cempaka Putih",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Cengkareng",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Cilandak",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Cilincing",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Cipayung",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Ciracas",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Duren Sawit",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Gambir",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Grogol Petamburan",
                'price' => random_int(3000, 30000),
            ],
            // --------------------------
            [
                'name' => "Jagakarsa",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Jatinegara",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Johar Baru",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Kali Deres",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Kebayoran Baru",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Kebayoran Lama",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Kebon Jeruk",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Kelapa Gading",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Kemayoran",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Kembangan",
                'price' => random_int(3000, 30000),
            ],
            // -------------------------------
            [
                'name' => "Kep. Seribu Selatan",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Kep. Seribu Utara",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Koja",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Kramat Jati",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Makasar",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Mampang Prapatan",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Matraman",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Menteng",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Pademangan",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Palmerah",
                'price' => random_int(3000, 30000),
            ],
            // ----------------------------
            [
                'name' => "Pancoran",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Pasar Minggu",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Pasar Rebo",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Penjaringan",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Pesanggrahan",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Pulo Gadung",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Sawah Besar",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Senen",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Setiabudi",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Taman Sari",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Tambora",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Tanah Abang",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Tanjung Priok",
                'price' => random_int(3000, 30000),
            ],
            [
                'name' => "Tebet",
                'price' => random_int(3000, 30000),
            ],
        ]);
    }
}
