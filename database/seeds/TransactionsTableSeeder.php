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
            // [
            //     'name' => '',
            //     'region' => '',
            //     'address' => '',
            //     'date' => Carbon::now(),
            //     'time' => '',
            //     'phone' => '',
            //     'email' => '@gmail.com',
            //     'payment' => '',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // ],
            [
                'name' => 'mikaya',
                'region' => 'Tanah Abang',
                'address' => 'Jl. Pejompongan Raya No.17, RT.10/RW.6, Bend. Hilir, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10210',
                'date' => Carbon::now(),
                'time' => 'pagi',
                'phone' => '+6281327594567',
                'email' => 'mika@gmail.com',
                'payment' => 'ovo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
