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
                'name' => 'SOS Hand Sanitizer Antiseptic',
                'price' => 7200 ,
                'description' => 'Membunuh kuman* secara cepat tanpa air. Membuat tangan bersih higenis, wangi dan segar.
                *Telah diuji di Laboratorium terhadap kuman E.coli, S.aures, P.aeruginosa, S.typhimurium dan Virus Avian Influenza H5N1.',
                'image' => 'SOS Hand Sanitizer Antiseptic.jpg',
                'category_id' => 3,
                'stock' => 200,
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
                'price' => 36700,
                'description' => 'Rinso Laundry Disinfektan Baru! 10x lebih efektif bunuh kuman, berikan perlindungan maksimal pada pakaian keluarga. Pakai untuk merendam sebelum mencuci menggunakan detergen.',
                'image' => 'Rinso Laundry Disinfektan Cair.jpg',
                'category_id' => 2,
                'stock' => 500,
            ],
            [
                'name' => 'Pigeon Liquid Laundy Detergent​',
                'price' => 5600,
                'description' => 'Efektif membersihkan noda. 
                Sedikit busa. 
                Tidak mengiritasi kulit. 
                Bebas Paraben. 
                Teruji Dermatolog.',
                'image' => 'Pigeon Liquid Laundy Detergent.jpg',
                'category_id' => 2,
                'stock' => 500,
            ],
            [
                'name' => 'Yuri-sol Natural Pine Disinfectant​',
                'price' => 1900,
                'description' => 'Yuri-sol® Natural Pine didesain khusus untuk menggabungkan pembersih higienis dengan wewangian cemara serta pembasmi kuman pada permukaan lantai. Mengandung formula pine oil alami yang bersifat disinfektan dan menghasilkan aroma menyegarkan. Selain untuk membersihkan lantai, Yuri-sol® Natural Pine juga cocok digunakan untuk membersihkan toilet, rumah sakit, dan berbagai area di rumah Anda.',
                'image' => 'Yuri-sol Natural Pine Disinfectant.jpg',
                'category_id' => 3,
                'stock' => 500,
            ],
            [
                'name' => 'Biosoft Detergent + Softener',
                'price' => 3300,
                'description' => 'Biosoft® deterjen serta pelembut yang dirancang untuk menjaga warna pakaian dan keharuman yang tahan lama. Dibuat khusus untuk pakaian halus seperti sutra, woll, polyster, katun halus, dan lain-lain. Biosoft® juga mengandung pH balanced yang tetap menjaga kelembaban tangan Anda agar terhindar dari kulit kering dan pecah-pecah akibat mencuci.',
                'image' => 'Biosoft Detergent - Softener.jpg',
                'category_id' => 2,
                'stock' => 500,
            ],
            [
                'name' => 'Lifebuoy Total10 Body Wash​',
                'price' => 3400,
                'description' => 'ActivSilver+ Formula untuk melindungi pertahanan alami kulit dan melawan kuman penyebab masalah kesehatan.
                Sabun cair Lifebuoy Total 10 mengandung bahan baku yang sudah dipatenkan, ActivSilver+ Formula bersamaan dengan timol aktif diketahui akan kekuatannya sebagai antiseptik alami. Timol ditemukan pada tahun 1719 oleh Caspar Neuman dan berasal dari herbal yang sangat dikenal, Timi. Busa lembut dan kaya di sabun cair kami menggapai dalam hingga ke pori-pori, membersihkan secara mendalam dan menghilangkan kuman yang dapat menyebabkan 10 jenis infeksi kulit, dan meninggalkan kulit anda dalam keadaan bersih dan segar. ',
                'image' => 'Lifebuoy Total10 Body Wash.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'Dee - Dee Apple Body Wash',
                'price' =>  4400,
                'description' => 'dee-dee® Children Body Wash Apple dengan ekstrak buah apel dan Vitamin-C memberikan sensasi segar serta memberi perlindungan kulit anak agar selalu sehat. Diperkaya dengan formula no-tears menjadikan dee-dee® Children Body Wash Apple aman untuk digunakan setiap hari.',
                'image' => 'Dee - Dee Apple Body Wash.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'VANISH Penghilang Noda​',
                'price' =>  6500,
                'description' => 'Cairan penghilang noda.
                Aman untuk warna dan serat pakaian.
                Membuat noda membandel di baju Anda menghilang.
                Lembut pada pakaian berwarna putih serta bebas klorin.',
                'image' => 'VANISH Penghilang Noda.jpg',
                'category_id' => 2,
                'stock' => 500,
            ],
            [
                'name' => '​VANISH White Pemutih Pakaian',
                'price' =>  4300,
                'description' => 'Pemutih pakaian.
                Efektif menghilangkan noda membandel
                Tanpa merusak serat pakaian dan warna
                Formula Vanish tidak mengandung klorin.',
                'image' => 'VANISH White Pemutih Pakaian.jpg',
                'category_id' => 2,
                'stock' => 500,
            ],
            [
                'name' => 'SUNLIGHT JERUK NIPIS 100',
                'price' =>  1800,
                'description' => 'Setiap tetes Sunlight Jeruk Nipis 100 mengandung ekstrak jeruk nipis murni yang ampuh untuk membantu menghancurkan sisa lemak dan minyak dengan lebih cepat dan lebih mudah. Kini, dilengkapi dengan teknologi baru Cepat Bilas*, Sunlight Jeruk Nipis lebih efektif dan 10x lebih cepat bersihkan lemak. Mampu membersihkan wadah plastik sekalipun. Dapat digunakan untuk mencuci buah dan sayur',
                'image' => 'SUNLIGHT JERUK NIPIS 100.jpg',
                'category_id' => 3,
                'stock' => 500,
            ],
            [
                'name' => 'SUNLIGHT HIGIENIS PLUS',
                'price' =>  1900,
                'description' => 'Sunlight Higienis+ diformulasikan dengan Habbatussauda dan ekstrak jeruk nipis asli yang diperkuat dengan bahan anti bakteri membersihkan lemak pada peralatan makan dan masak, sekaligus menghilangkan dan mencegah pertumbuhan jutaan bakteri pada spons hingga ratusan kali lebih efektif dibandingkan pencuci piring biasa. Dengan teknologi baru Cepat Bilas*, Sunlight Higienis+ lebih efektif dan 10x lebih cepat bersihkan lemak.',
                'image' => 'SUNLIGHT HIGIENIS PLUS.jpg',
                'category_id' => 3,
                'stock' => 500,
            ],
            [
                'name' => 'SUNLIGHT ANTI BAU',
                'price' => 2000,
                'description' => 'Sunlight Anti Bau diformulasikan dengan jeruk nipis asli dan ekstrak mint dengan aksi-anti bau membersihkan lemak pada peralatan makan dan masak sekaligus menghilangkan lima jenis bau tak sedap membandel, seperti ikan, telur, bawang, gulai dan gorengan tanpa perlu mencuci kembali. Dengan teknologi baru Cepat Bilas*, Sunlight Anti Bau lebih efektif dan 10x lebih cepat bersihkan lemak.',
                'image' => 'SUNLIGHT ANTI BAU.jpg',
                'category_id' => 3,
                'stock' => 500,
            ],
            [
                'name' => 'SUNLIGHT EXTRA POWER',
                'price' =>  2400,
                'description' => 'Sunlight Extra Power baru, menghilangkan noda gosong dengan mudah, membuat semua peralatan dapur mudah dibersihkan, bahkan wajan penggorengan. Butiran biji zaitun ini tangguh dan mampu membersihkan, menghilangkan noda gosong dengan cepat dan mudah, tidak perlu direndam, tidak perlu menggunakan sabut stainless, sedikit upaya menggosok, dan cocok untuk semua jenis peralatan makan. Formula Sunlight Extra Power ini tangguh sehingga Anda tidak perlu lagi merendam panci dan wajan semalaman untuk meluruhkan keraknya.',
                'image' => 'SUNLIGHT EXTRA POWER.jpg',
                'category_id' => 3,
                'stock' => 500,
            ],
            [
                'name' => 'SUNLIGHT EXTRA PURE',
                'price' =>  2300,
                'description' => 'Sunlight Extra Pure mengandung jeruk nipis asli, diperkaya dengan ekstrak aloe vera dan garam mineral alami. Formulasinya dilengkapi minyak esensial alami tanpa pewarna, paraben dan fosfat. Produk ini sudah teruji secara dermatologi dan cocok untuk membersihkan peralatan makan dan minum bayi, buah dan sayuran. Formula sabun cuci piring Sunlight Extra Pure membersihkan lemak membandel pada piring untuk hasil bersih berkilau.',
                'image' => 'SUNLIGHT EXTRA PURE.jpg',
                'category_id' => 3,
                'stock' => 500,
            ],
            [
                'name' => 'Murumuru Butter & Rose Body Wash',
                'price' =>  9600,
                'description' => 'Majestic Glow Body Wash membersihkan dan mencerahkan kulit agar senantiasa tampak sehat bercahaya.',
                'image' => 'Murumuru Butter & Rose Body Wash.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'Coconut Water & Mimosa Flower Body Wash',
                'price' =>  9600,
                'description' => 'Petal Soft Body Wash membersihkan dengan lembut alami, membuat kulit sensitif terasa halus.',
                'image' => 'Coconut Water & Mimosa Flower Body Wash.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'Tea Tree Oil & Vetiver Body Wash',
                'price' =>  9600,
                'description' => 'Pure & Positive Body Wash membersihkan secara menyeluruh, membuat tubuh terasa segar dan cantik alami.',
                'image' => 'Tea Tree Oil & Vetiver Body Wash.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'Coconut Oil & Ylang Ylang Body Wash',
                'price' =>  9600,
                'description' => 'Body Wash Tropical Refresh membersihkan dengan keharuman sensasi menyegarkan yang melembapkan bagi kulit kering.',
                'image' => 'Coconut Oil & Ylang Ylang Body Wash.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'Murumuru Butter & Rose Shampoo',
                'price' =>  9900,
                'description' => 'Blooming Color shampoo menutrisi dan melindungi rambut agar tampak sehat berkilau, termasuk rambut yang diwarnai. Dilengkapi dengan kandungan bahan alami Murumuru Butter dari Amazon dan keharuman Bulgarian Rose yang lembut menyegarkan.',
                'image' => 'Murumuru Butter & Rose Shampoo.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'Coconut Water & Mimosa Flower Shampoo',
                'price' =>  9900,
                'description' => 'Volume and Bounty shampoo membuat rambutmu tampak tebal bervolume dan tidak lepek.Dilengkapi dengan kandungan bahan alami organic Coconut Water dan keharuman Mimosa Flower yang lembut.',
                'image' => 'Coconut Water & Mimosa Flower Shampoo.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'Argan Oil & Lavender Shampoo',
                'price' =>  9900,
                'description' => 'Smooth and Serene shampoo melembutkan rambut kusut dan kering, dengan kandungan bahan alami golden Argan Oil dan keharuman French Lavender yang lembut menenangkan.',
                'image' => 'Argan Oil & Lavender Shampoo.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'Tea Tree Oil & Vetiver Shampoo',
                'price' =>  9900,
                'description' => 'Radical Refresher shampoo membersihkan rambut secara menyeluruh, membuatnya tampak lebih bervolume. Dilengkapi dengan kandungan bahan alami Australian Tea Tree Oil dan keharuman Vetiver yang mewah dan menyegarkan.',
                'image' => 'Tea Tree Oil & Vetiver Shampoo.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],
            [
                'name' => 'Coconut Oil & Ylang Ylang Shampoo',
                'price' =>  9900,
                'description' => 'Hope and Repair shampoo merawat & menutrisi rambut rusak agar kembali lembut dan sehat. Dilengkapi dengan kandungan bahan alami organic Coconut Oil dan keharuman Ylang Ylang yang lembut.',
                'image' => 'Coconut Oil & Ylang Ylang Shampoo.jpg',
                'category_id' => 1,
                'stock' => 500,
            ],

        ]);
    }
}
