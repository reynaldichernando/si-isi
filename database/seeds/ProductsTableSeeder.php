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
                'image' => 'Rinso Laundry Disinfektan Cair.jpg',
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
                'name' => 'So Klin Pembersih Lantai​',
                'price' => 54600 ,
                'description' => 'Pembersih lantai
                Bersih dan bebas kuman
                99% ampuh membunuh kuman
                Memberikan wangi yang segar didalam rumah atau ruangan Anda',
                'image' => 'So Klin Pembersih Lantai.jpg',
                'category_id' => 3,
                'stock' => 500,
            ],
            [
                'name' => 'Zero Waste Bathroom Kit 2​',
                'price' => 290000,
                'description' => 'Terdiri dari:\n
                \n1 x Loofah
                \n1 x Ara Handmade Soap
                \n1 x Segara Naturals – 2in1 Shampoo and Conditioner Bar
                \n1 x Yagi Natural Indonesia Cocoa Body Butter 50gr',
                'image' => 'Zero Waste Bathroom Kit 2.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => '​Zero Waste Bathroom Kit 1',
                'price' =>  180000,
                'description' => 'Terdiri dari:
                1 x Loofah
                1 x Ara Handmade Soap
                1 x Yagi Natural Indonesia Cocoa Body Butter 50gr',
                'image' => 'Zero Waste Bathroom Kit 1.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => '2in1 Laundry and Dish Bar​',
                'price' =>  30000,
                'description' => '2in1 Laundry dan Dish Soap ini adalah sabun natural yang dibuat khusus untuk mencuci baju dan piring.',
                'image' => '2in1 Laundry and Dish Bar.jpg',
                'category_id' => 2,
                'stock' => 500,
            ],
            [
                'name' => '​2in1 Shampoo and Conditioner Bar',
                'price' =>  108000,
                'description' => 'Produk shampoo bar untuk rambut yang cenderung kering. 2in1 Shampoo and Conditioner Bar yang membersihkan dan menjaga kelembaban rambut kering, serta menutrisi rambut dengan vitamin b5, aloe vera, protein rambut alami yang ECO-CERT atau COSMOS Natural Cert untuk membantu rambut kering dan/atau wavy untuk jadi lebih manageable.',
                'image' => '2in1 Shampoo and Conditioner Bar.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],

        ]);
    }
}
