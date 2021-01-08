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
                'image' => '',
                'category_id' => 1,
                'stock' => 173,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
