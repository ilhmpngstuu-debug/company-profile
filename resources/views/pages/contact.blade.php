@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<!-- Header Banner -->
<section class="bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/20 text-blue-200 border border-blue-400/30 mb-4">
            💬 Konsultasi & Layanan
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
            Hubungi Tim Ahli Kami
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-blue-100">
            Punya ide proyek, kebutuhan sistem aplikasi, atau ingin konsultasi arsitektur IT? Tim kami siap berdiskusi dengan Anda.
        </p>
    </div>
</section>

<!-- Content Section: Informasi Kontak & Formulir -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <!-- Kolom 1: Informasi Kontak Perusahaan -->
            <div class="space-y-6">
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
                    <h2 class="text-xl font-bold text-slate-900 mb-6">Informasi Kantor</h2>
                    
                    <div class="space-y-6 text-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 text-lg">
                                📍
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Alamat Kantor Pusat</h4>
                                <p class="text-slate-600 mt-1 leading-relaxed">
                                    Gedung Menara Digital Lt. 8, Jl. Jenderal Sudirman Kav. 120, Jakarta Selatan 12190
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 text-lg">
                                📞
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Telepon & WhatsApp</h4>
                                <p class="text-slate-600 mt-1">+62 812-3456-7890</p>
                                <p class="text-xs text-slate-400">Respon cepat via WhatsApp</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 text-lg">
                                ✉️
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Email Resmi</h4>
                                <p class="text-slate-600 mt-1">info@nusantaradigital.id</p>
                                <p class="text-slate-600">partnership@nusantaradigital.id</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 text-lg">
                                ⏰
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Jam Operasional</h4>
                                <p class="text-slate-600 mt-1">Senin - Jumat: 09.00 - 18.00 WIB</p>
                                <p class="text-xs text-slate-400">Sabtu, Minggu & Hari Libur: Tutup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom 2 & 3: Formulir Pesan -->
            <div class="lg:col-span-2">
                <div class="bg-white p-8 sm:p-10 rounded-2xl border border-slate-200 shadow-sm">
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">Kirim Pesan / Konsultasi</h2>
                    <p class="text-sm text-slate-500 mb-8">Isi formulir di bawah ini dan konsultan kami akan menghubungi Anda dalam waktu 1x24 jam.</p>

                    <form onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah terkirim (Simulasi). Tim kami akan segera menghubungi Anda.');" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap *</label>
                                <input type="text" required placeholder="Contoh: Budi Santoso"
                                       class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Alamat Email *</label>
                                <input type="email" required placeholder="nama@perusahaan.com"
                                       class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Nomor Telepon / WhatsApp</label>
                                <input type="tel" placeholder="08123456789"
                                       class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Layanan yang Diminati</label>
                                <select class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm bg-white">
                                    <option value="">-- Pilih Layanan --</option>
                                    <option value="web">Pembuatan Website Company Profile</option>
                                    <option value="enterprise">Aplikasi Web Enterprise</option>
                                    <option value="ecommerce">Pengembangan Toko Online</option>
                                    <option value="mobile">Aplikasi Mobile iOS & Android</option>
                                    <option value="uiux">Desain UI/UX</option>
                                    <option value="cloud">Cloud Hosting & DevOps</option>
                                    <option value="security">Audit Keamanan Siber</option>
                                    <option value="other">Konsultasi Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Pesan atau Rincian Kebutuhan *</label>
                            <textarea rows="4" required placeholder="Ceritakan ringkasan kebutuhan proyek atau pertanyaan Anda..."
                                      class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"></textarea>
                        </div>

                        <button type="submit"
                                class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-blue-600 text-white font-bold text-sm hover:bg-blue-700 transition shadow-md shadow-blue-500/20">
                            Kirim Pesan Sekarang &rarr;
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

