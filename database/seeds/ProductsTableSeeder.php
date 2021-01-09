<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Bamboo Charcoal Toothbrush Greater Good',
                'price' => 15000 ,
                'description' => 'Sikat Gigi Bambu Greater Good adalah alternatif ramah lingkungan sikat plastik tradisional. Bulu sikat bebas BPA, terbuat dari bio-nilon (100% dapat didaur ulang) dilapisi dengan charcoal untuk membersihkan dan memutihkan gigi Anda secara alami dan lembut untuk gusi. Dirancang secara ergonomis agar terasa nyaman di tangan dan cukup fleksibel untuk menjangkau setiap sudut mulut.',
                'image' => 'Bamboo Charcoal Toothbrush Greater Good.jpg',
                'category_id' => 1,
                'stock' => 173,
            ],
            [
                'name' => 'Shampoo Head n Shoulders',
                'price' => 16900 ,
                'description' => '- Menghilangkan Ketombe Lebih Baik dari Shampo Anti-Ketombe Terkemuka
                - Lebih Ampuh Menghilangkan Ketombe dan gatal di kulit kepala dibanding Shampo Anti-Ketombe Terkemuka',
                'image' => 'Shampoo Head n Shoulders.jpg',
                'category_id' => 1,
                'stock' => 200,
            ],
            [
                'name' => 'Rinso Laundry Disinfektan Cair',
                'price' => 36700 ,
                'description' => 'Rinso Laundry Disinfektan Baru! 10x lebih efektif bunuh kuman, berikan perlindungan maksimal pada pakaian keluarga. Pakai untuk merendam sebelum mencuci menggunakan detergen.',
                'image' => '',
                'category_id' => 2,
                'stock' => 500,
            ],
            [
                'name' => 'Rinso Anti Noda Classic Fresh Detergen Bubuk​',
                'price' => 54600 ,
                'description' => 'Rinso Anti Noda Classic Fresh BARU! Nikmati keharuman memikat dengan keharuman bunga melati dan mawar putih yang tahan lama. Formulasi anti nodanya mampu menghilangkan noda hanya dalam 1x kucek!​',
                'image' => 'Rinso Anti Noda Classic Fresh Detergen Bubuk.jpg',
                'category_id' => 2,
                'stock' => 500,
            ],
            [
                'name' => 'So Klin Pembersihb Lantai​',
                'price' => 54600 ,
                'description' => 'Pembersih lantai
                Bersih dan bebas kuman
                99% ampuh membunuh kuman
                Memberikan wangi yang segar didalam rumah atau ruangan Anda',
                'image' => 'So Klin Pembersihb Lantai.jpg',
                'category_id' => 3,
                'stock' => 500,
            ],
        ]);
    }
}
