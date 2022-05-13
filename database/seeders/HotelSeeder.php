<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = [
            [
                'name'          => 'Baratha Hotel',
                'description'   => 'Kami di Baratha Coffee percaya dalam menonjolkan kesegaran bahan-bahan kami melalui piring sederhana yang memungkinkan setiap rasa bersinar. Kami berpegang pada dasar-dasar dalam menyiapkan makanan kami, menggunakan resep klasik dan modern.',
                'images'        => 'baratha-hotel-coffe.jpg',
                'price_min'     => 285000,
                'price_max'     => 750000,
                'hotel_star'    => 4,
                'language'      => 'Indonesia dan Inggris',
                'phone'         => '0332424555',
                'website'       => 'http://www.barathahotel.com/',
                'email'         => 'reservasi@barathahotel.com',
                'address'       => 'Jl. Saliwiryo Pranowo Gg. Taman No.11, Pattian, Kotakulon, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68213',
                'latitude'      => -7.909331810757069,
                'longitude'     => 113.81037853694323
            ],
            [
                'name'          => 'Dreamland Hotel and Lounge',
                'description'   => 'Dreamland Hotel And Lounge di Bondowoso memiliki akomodasi bintang 3 dengan bar, taman, dan teras. Fasilitas yang ditawarkan di akomodasi ini meliputi restoran, resepsionis 24 jam, layanan kamar, dan Wi-Fi gratis. Anda dapat menikmati minuman di bar makanan ringan.

                Kamar-kamar di hotel ini memiliki area tempat duduk, TV kabel layar datar, dan kamar mandi pribadi dengan sandal dan bidet. Semua kamar di Dreamland Hotel And Lounge memiliki AC dan meja.

                Akomodasi ini menawarkan sarapan kontinental atau prasmanan.',
                'images'        => 'dreamland-hotel-bondowoso.jpg',
                'price_min'     => 385000,
                'price_max'     => 450000,
                'hotel_star'    => 3,
                'language'      => 'Indonesia dan Inggris',
                'phone'         => '03325552888',
                'website'       => '-',
                'email'         => '-',
                'address'       => 'Jl. Kis Mangunsarkoro No.999, Lumbung, Tamansari, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68216',
                'latitude'      => -7.927732119685944,
                'longitude'     => 113.8256967056357
            ],
            [
                'name'          => 'Grand Hotel Bondowoso',
                'description'   => 'Grand Hotel Bondowoso menyediakan pelayanan dan fasilitas terbaik untuk memastikan kenyamanan tamu. Jangan pernah kehilangan komunikasi dengan kolega Anda, dengan Wi-Fi gratis yang ditawarkan selama Anda menginap. Parkir disediakan secara gratis untuk para tamu. Kenakan pakaian favorit Anda berulang kali berkat layanan binatu dan layanan cuci kering yang ditawarkan di Grand Hotel Bondowoso.
                Merokok hanya diperbolehkan di area yang telah ditentukan, untuk kesehatan semua tamu dan staf.
                Memiliki desain yang mengutamakan kenyamanan, semua kamar tamu menawarkan beragam kelengkapan untuk memastikan tamu menikmati malam dengan nyaman. Nikmati pengalaman menginap yang lebih baik di hotel, dengan kamar pilihan yang dilengkapi dengan AC dan layanan linen. Kamar di Grand Hotel Bondowoso tersedia dengan desain yang menghadirkan fitur seperti balkon atau teras. Hiburan di dalam kamar seperti TV kabel tersedia untuk semua tamu.
                Hotel juga menawarkan air minum dalam botol di dalam kamar, jika Anda membutuhkannya. Anda bisa tenang karena mengetahui perlengkapan di kamar mandi termasuk handuk tersedia di kamar mandi.


                Kuliner dan aktivitas menarik

                Jika Anda tidak ingin bersantap di luar, Anda selalu dapat memilih pilihan bersantap yang lezat di hotel.
                Grand Hotel Bondowoso menawarkan fasilitas rekreasi yang luar biasa untuk dinikmati para tamu. Bersosialisasi di hotel ruang santai bersama dan area menonton TV, di mana Anda dapat bertemu tamu lain.',
                'images'        => 'grand-hotel-bondowoso.jpg',
                'price_min'     => 126000,
                'price_max'     => 200000,
                'hotel_star'    => 0,
                'language'      => 'Indonesia dan Inggris',
                'phone'         => '0332421549',
                'website'       => '-',
                'email'         => '-',
                'address'       => 'Jl. KH. Agus Salim No.122, Lumbung, Blindungan, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur, Indonesia 68212 , Bondowoso, Bondowoso, Indonesia, 68212',
                'latitude'      => -7.909845332783335,
                'longitude'     => 113.82570862104615
            ],
            [
                'name'          => 'Grand Padis Hotel',
                'description'   => 'Grand Padis Hotel menyediakan akomodasi di Bondowoso. Fasilitas yang ditawarkan di akomodasi ini meliputi restoran, resepsionis 24 jam, layanan kamar, dan Wi-Fi gratis di seluruh areanya. Tersedia parkir pribadi gratis dan hotel juga menawarkan penyewaan mobil untuk Anda yang ingin menjelajahi daerah sekitarnya. Hotel ini menyediakan kamar-kamar ber-AC yang menawarkan meja, ketel, minibar, brankas, TV layar datar, dan kamar mandi pribadi dengan shower. Beberapa kamar juga menawarkan dapur dengan kompor. Di Grand Padis Hotel, semua kamar mencakup seprai dan handuk. Akomodasi ini menawarkan sarapan kontinental atau prasmanan. Grand Padis Hotel menawarkan akomodasi bintang 3 dengan kolam renang indoor dan teras. Jember berjarak 33 km dari hotel, sedangkan Situbondo berjarak 31 km. Bandara terdekat adalah Banyuwangi, 115 km dari Grand Padis Hotel, dan akomodasi ini menawarkan layanan antar-jemput bandara berbayar.',
                'images'        => 'grand-padis-bondowoso.jpg',
                'price_min'     => 450000,
                'price_max'     => 600000,
                'hotel_star'    => 0,
                'language'      => 'Indonesia dan Inggris',
                'phone'         => '03323526888',
                'website'       => 'http://grandpadishotel.com/',
                'email'         => 'info@grandpadishotel.com',
                'address'       => 'Jl. Ahmad Yani No.28, Potos, Badean, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68214',
                'latitude'      => -7.9158449659316155,
                'longitude'     => 113.81984068245507
            ],
            [
                'name'          => 'Hotel Palm Bondowoso',
                'description'   => 'Terletak di lokasi utama Bondowoso, Palm Hotel menempatkan semua yang ditawarkan kota tepat di luar depan pintu Anda. Hotel ini menawarkan standar layanan dan fasilitas yang tinggi untuk memenuhi kebutuhan individu semua wisatawan. Staf layanan yang berpikiran akan menyambut dan memandu Anda di Palm Hotel. Kamar tamu dirancang untuk memberikan tingkat kenyamanan optimal dengan dekorasi yang ramah dan beberapa menawarkan fasilitas yang nyaman seperti televisi LCD/layar plasma, akses internet nirkabel (gratis), televisi, AC. Akses ke taman hotel akan semakin meningkatkan kepuasan masa inap Anda. Temukan semua yang ditawarkan.',
                'images'        => 'grand-padis-bondowoso.jpg',
                'price_min'     => 305388,
                'price_max'     => 388236,
                'hotel_star'    => 4,
                'language'      => 'Indonesia dan Inggris',
                'phone'         => '0332421201',
                'website'       => 'http://www.palm-hotel.net/',
                'email'         => 'reservation@palm-hotel.net',
                'address'       => 'Jl. Ahmad Yani No.32, Lumbung, Badean, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68214',
                'latitude'      => -7.916935223761788,
                'longitude'     => 113.81905041961755
            ]

        ];

        DB::table('lodgings')->insert($hotels);

    }
}
