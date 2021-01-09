<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'name' => 'Mikhaya',
                'region' => 'Tanah Abang',
                'address' => 'Jl. Pejompongan Raya No.17, RT.10/RW.6, Bend. Hilir, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10210',
                'date' => Carbon::now(),
                'time' => 'Pagi',
                'phone' => '+6281327594567',
                'email' => 'mika@gmail.com',
                'payment' => 'OVO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Jones',
                'region' => 'Pademangan',
                'address' => 'Jl. Ancol Barat, A5 / C No. 12, Ancol, Pademangan, RT.4/RW.11, Ancol, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14430',
                'date' => Carbon::now(),
                'time' => 'Siang',
                'phone' => '+62216900546',
                'email' => 'jonmama@gmail.com',
                'payment' => 'GoPay',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Bambang',
                'region' => 'Menteng',
                'address' => 'Jl. Teuku Umar No.1, RT.1/RW.1, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350',
                'date' => Carbon::now(),
                'time' => 'Sore',
                'phone' => '+62213900899',
                'email' => 'bambang_kukuruyuk@gmail.com',
                'payment' => 'cash',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Markbujuk',
                'region' => 'Ciracas',
                'address' => 'Jl. Masjid Nurul Hidayah No.7, RT.11/RW.12, Klp. Dua Wetan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13730',
                'date' => Carbon::now(),
                'time' => 'Siang',
                'phone' => '+6281219474105',
                'email' => '@gmail.com',
                'payment' => 'GoPay',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Bill Door',
                'region' => 'Kebon Jeruk',
                'address' => 'Jl. Perjuangan No.9 10, RT.11/RW.10, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530',
                'date' => Carbon::now(),
                'time' => 'Sore',
                'phone' => '+62215303555',
                'email' => 'bill_smolgate@gmail.com',
                'payment' => 'GoPay',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
