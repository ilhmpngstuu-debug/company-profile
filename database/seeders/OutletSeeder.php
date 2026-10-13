<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $outlets = [
            [
                'name' => 'GIOI Menteng',
                'slug' => 'gioi-menteng',
                'brand' => 'GIOI Bistro & Cafe',
                'city' => 'Jakarta Pusat',
                'address' => 'Jl. Dr. Kusuma Atmaja No. 85, Menteng, Jakarta Pusat',
                'capacity' => '200 Pax',
                'rsvp' => '+62 852 8181 6101',
                'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Restoran bistro elegan berkonsep Southeast Asian Comfort Food dengan suasana asri, taman indoor tropis, dan area dining luas yang cocok untuk jamuan keluarga maupun acara privat skala besar.',
            ],
            [
                'name' => 'GIOI Senopati',
                'slug' => 'gioi-senopati',
                'brand' => 'GIOI Bistro & Cafe',
                'city' => 'Jakarta Selatan',
                'address' => 'Jl. Senopati Raya No. 88, Kebayoran Baru, Jakarta Selatan',
                'capacity' => '80 Pax',
                'rsvp' => '+62 878 8000 6101',
                'image' => 'https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Outlet ikonis pertama yang mengawali perjalanan GIOI Group sejak 2016. Hadir dengan ambience intim, bar koktail modern, dan desain kontemporer hangat di pusat gaya hidup Senopati.',
            ],
            [
                'name' => 'GIOI By The Farm',
                'slug' => 'gioi-by-the-farm',
                'brand' => 'GIOI Bistro & Cafe',
                'city' => 'Jakarta Utara',
                'address' => 'Jl. Orchestra Beach X, Pantai Indah Kapuk (PIK), Jakarta Utara',
                'capacity' => '152 Pax',
                'rsvp' => '+62 813 8899 6101',
                'image' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Menghadirkan konsep santap segar terbuka di pesisir Pantai Indah Kapuk dengan nuansa alam hijau. Suasana santai outdoor dan indoor yang memanjakan para pencinta kuliner tropis.',
            ],
            [
                'name' => 'GIOI Cafe IDD',
                'slug' => 'gioi-cafe-idd',
                'brand' => 'GIOI Cafe',
                'city' => 'Jakarta Utara',
                'address' => 'Indonesia Design District (IDD), PIK 2, Jakarta Utara',
                'capacity' => '60 Pax',
                'rsvp' => '+62 821 1889 9730',
                'image' => 'https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Kafe berarsitektur modern estetik di kawasan kreatif Indonesia Design District. Tempat sempurna untuk menikmati kopi berkualitas, mocktail signature, dan camilan sepanjang hari sambil berdiskusi santai.',
            ],
            [
                'name' => 'GIOI Cafe Setiabudi One',
                'slug' => 'gioi-cafe-setiabudi-one',
                'brand' => 'GIOI Cafe',
                'city' => 'Jakarta Selatan',
                'address' => 'Setiabudi One Building, Jl. H.R. Rasuna Said Kav. 62, Kuningan, Jakarta Selatan',
                'capacity' => '75 Pax',
                'rsvp' => '+62 819 2888 2853',
                'image' => 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Ruang kafe yang nyaman dan produktif di pusat bisnis Kuningan. Pilihan utama para profesional untuk work from cafe, rapat kasual, serta pertemuan makan siang korporat.',
            ],
            [
                'name' => 'GIOI Cafe Agora Mall, Tank Studio',
                'slug' => 'gioi-cafe-agora-mall',
                'brand' => 'GIOI Cafe',
                'city' => 'Jakarta Pusat',
                'address' => 'Agora Mall, Lantai B3, Jl. M.H. Thamrin No. 10, Jakarta Pusat',
                'capacity' => '70 Pax',
                'rsvp' => '+62 812 9008 8775',
                'image' => 'https://images.unsplash.com/photo-1521017432531-fbd92d768814?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Kolaborasi kafe dan ruang kreatif fleksibel yang sering digunakan sebagai venue peluncuran produk, perayaan ulang tahun, dan gathering eksklusif di jantung ibu kota.',
            ],
            [
                'name' => 'GIOI Ocean Gourmet Bali',
                'slug' => 'gioi-ocean-gourmet-bali',
                'brand' => 'GIOI Ocean Gourmet',
                'city' => 'Bali',
                'address' => 'Discovery Mall Bali, Ground Floor Beach Front, Kuta, Bali',
                'capacity' => '224 Pax',
                'rsvp' => '+62 852 8181 6101',
                'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Destinasi kuliner tepi pantai spektakuler di Kuta Bali dengan pemandangan laut lepas. Dilengkapi pertunjukan tari budaya Bali, atraksi api (fire dance), dan alunan live music di setiap akhir pekan.',
            ],
            [
                'name' => 'The Brassey Sedayu Indo Golf',
                'slug' => 'the-brassey-sedayu-indo-golf',
                'brand' => 'The Brassey',
                'city' => 'Jakarta Utara',
                'address' => 'Marina Raya, Jl. Pantai Indah Kapuk No. 1, Jakarta Utara',
                'capacity' => 'Seating 200 Pax / Standing 300 Pax',
                'rsvp' => '+62 812 1118 6101',
                'image' => 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Pengalaman bersantap prestisius dengan panorama padang golf hijau Sedayu Indo Golf. Mengusung arsitektur megah berplafon tinggi serta sajian fusion Asia dan Western kelas dunia.',
            ],
            [
                'name' => 'Shabu Baru Carstensz Mall',
                'slug' => 'shabu-baru-carstensz-mall',
                'brand' => 'Shabu Baru',
                'city' => 'Tangerang',
                'address' => 'Carstensz Mall, Ground Floor, Gading Serpong, Tangerang',
                'capacity' => '90 Pax',
                'rsvp' => '+62 821 8888 6101',
                'image' => 'https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Konsep fusion shabu-shabu modern yang menyajikan aneka kuah internasional pilihan dalam satu pot personal. Daging impor premium disajikan dengan harga yang tetap terjangkau.',
            ],
            [
                'name' => 'Sinar Mandala Wolter Monginsidi',
                'slug' => 'sinar-mandala-wolter-monginsidi',
                'brand' => 'Sinar Mandala',
                'city' => 'Jakarta Selatan',
                'address' => 'Jl. Wolter Monginsidi No. 42, Senopati, Kebayoran Baru, Jakarta Selatan',
                'capacity' => '120 Pax',
                'rsvp' => '+62 811 7107 788',
                'image' => 'https://images.unsplash.com/photo-1563245372-f21724e3856d?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Restoran legendaris masakan Chinese otentik dan halal yang telah memikat lidah pelanggan sejak tahun 1980. Suasana klasik oriental yang hangat untuk nostalgia jamuan makan bersama keluarga.',
            ],
        ];

        foreach ($outlets as $outlet) {
            Outlet::updateOrCreate(
                ['slug' => $outlet['slug']],
                $outlet
            );
        }
    }
}

