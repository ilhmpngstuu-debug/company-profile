<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Pembuatan Website Company Profile',
                'slug' => 'website-company-profile',
                'category' => 'Web Development',
                'description' => 'Layanan pembuatan website profesional untuk meningkatkan kredibilitas dan identitas perusahaan di era digital dengan tampilan modern dan responsif di semua perangkat.',
                'price' => 3500000,
                'duration' => '1 - 2 Minggu',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name' => 'Aplikasi Web Enterprise & Dashboard',
                'slug' => 'aplikasi-web-enterprise',
                'category' => 'Web Development',
                'description' => 'Sistem informasi kustom terintegrasi dengan arsitektur scalable untuk otomatisasi proses operasional bisnis dan analisis performa perusahaan secara real-time.',
                'price' => 12500000,
                'duration' => '4 - 8 Minggu',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name' => 'Pengembangan Toko Online (E-Commerce)',
                'slug' => 'e-commerce-development',
                'category' => 'Web Development',
                'description' => 'Platform e-commerce lengkap dengan katalog produk dinamis, kalkulator ongkir otomatis, dan integrasi payment gateway terpercaya (Midtrans/Xendit).',
                'price' => 7500000,
                'duration' => '3 - 4 Minggu',
                'image' => 'https://images.unsplash.com/photo-1556742049-0a67e5572293?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name' => 'Aplikasi Mobile iOS & Android',
                'slug' => 'mobile-apps-development',
                'category' => 'Mobile Development',
                'description' => 'Pengembangan aplikasi mobile multiplatform (Flutter / React Native) yang cepat, ramah pengguna, dan siap dipublikasikan ke Google Play Store dan App Store.',
                'price' => 15000000,
                'duration' => '6 - 10 Minggu',
                'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name' => 'Desain UI/UX & Prototipe Interaktif',
                'slug' => 'ui-ux-design',
                'category' => 'Design & Creative',
                'description' => 'Riset kebutuhan pengguna, wireframing, user journey map, serta desain UI modern dengan prototype interaktif di Figma sebelum masuk ke tahap koding.',
                'price' => 4500000,
                'duration' => '2 - 3 Minggu',
                'image' => 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name' => 'Optimasi SEO & Digital Marketing',
                'slug' => 'seo-digital-marketing',
                'category' => 'Digital Marketing',
                'description' => 'Optimasi mesin pencari on-page & off-page untuk mendongkrak peringkat website di halaman pertama Google dan meningkatkan traffic pengunjung potensial.',
                'price' => 3000000,
                'duration' => 'Bulanan (Retainer)',
                'image' => 'https://images.unsplash.com/photo-1533750516457-a7f992034fec?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name' => 'Cloud Hosting & DevOps Setup',
                'slug' => 'cloud-devops-setup',
                'category' => 'Cloud & DevOps',
                'description' => 'Arsitektur dan konfigurasi server cloud (AWS, Google Cloud, DigitalOcean), otomatisasi deployment CI/CD, SSL, serta pemantauan uptime server.',
                'price' => 5000000,
                'duration' => '1 - 2 Minggu',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name' => 'Audit Keamanan Siber & Penetration Testing',
                'slug' => 'cyber-security-audit',
                'category' => 'Cyber Security',
                'description' => 'Pengujian keamanan aplikasi dan infrastruktur web terhadap potensi celah keamanan (OWASP Top 10) beserta laporan mitigasi dan rekomendasi perbaikan.',
                'price' => 9000000,
                'duration' => '2 Minggu',
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name' => 'Integrasi API & Third-Party Service',
                'slug' => 'api-integration-service',
                'category' => 'Integration',
                'description' => 'Menghubungkan website Anda dengan layanan eksternal seperti WhatsApp Gateway, Email Marketing (Mailchimp), CRM, ERP, atau sistem perbankan.',
                'price' => 4000000,
                'duration' => '1 - 2 Minggu',
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name' => 'Maintenance & Dukungan Teknis Berkala',
                'slug' => 'maintenance-technical-support',
                'category' => 'Support & Maintenance',
                'description' => 'Layanan pemeliharaan sistem rutin, backup data terjadwal, update patch keamanan, serta troubleshooting dan perbaikan bug darurat.',
                'price' => 2000000,
                'duration' => 'Bulanan (Retainer)',
                'image' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&w=800&q=80',
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}

