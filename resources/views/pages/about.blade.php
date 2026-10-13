@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<!-- Header Banner -->
<section class="bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/20 text-blue-200 border border-blue-400/30 mb-4">
            🏢 Profil Perusahaan
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
            Mengenal PT Nusantara Solusi Digital
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-blue-100">
            Berdedikasi untuk memberikan solusi rekayasa teknologi informasi terbaik bagi kemajuan ekosistem bisnis di Indonesia.
        </p>
    </div>
</section>

<!-- Kisah & Sejarah Singkat -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">Perjalanan Kami</span>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-2 mb-6">
                    Inovasi Tanpa Henti Sejak 2020
                </h2>
                <div class="space-y-4 text-slate-600 text-base leading-relaxed">
                    <p>
                        Didirikan di Jakarta pada tahun 2020, <strong>PT Nusantara Solusi Digital</strong> berawal dari sekelompok rekayasawan perangkat lunak berbakat yang memiliki visi memajukan efisiensi operasional industri melalui transformasi digital.
                    </p>
                    <p>
                        Kini, kami telah dipercaya oleh lebih dari 60+ korporasi, UMKM, dan institusi pemerintahan untuk merancang, membangun, dan mengelola ekosistem teknologi yang andal, aman, dan mudah diskalakan.
                    </p>
                    <p>
                        Dengan mengadopsi standar metodologi modern seperti Agile dan DevOps, setiap solusi yang kami hasilkan senantiasa tepat sasaran dan memberikan dampak nyata terhadap pertumbuhan bisnis klien kami.
                    </p>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
                     alt="Tim Nusantara Digital"
                     class="w-full h-80 sm:h-96 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Visi & Misi -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-extrabold text-slate-900">Visi & Misi Perusahaan</h2>
            <p class="mt-2 text-slate-600 text-sm">Prinsip dasar yang mengarahkan setiap langkah dan inovasi kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Visi -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-xs">
                <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-2xl font-bold mb-4">
                    🎯
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Visi</h3>
                <p class="text-slate-600 leading-relaxed text-sm">
                    Menjadi perusahaan teknologi dan konsultan rekayasa perangkat lunak terkemuka di Asia Tenggara yang diakui atas inovasi, integritas, dan keunggulan mutu teknis.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-xs">
                <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-2xl font-bold mb-4">
                    🚀
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Misi</h3>
                <ul class="text-slate-600 text-sm space-y-2 list-disc list-inside leading-relaxed">
                    <li>Menyediakan produk dan layanan digital berkinerja tinggi serta aman bagi setiap klien.</li>
                    <li>Mendampingi transformasi digital para pelaku usaha dari hulu ke hilir.</li>
                    <li>Mengembangkan talenta digital unggul yang adaptif terhadap perkembangan teknologi global.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Nilai Inti (Core Values) -->
<section class="py-16 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-extrabold text-slate-900">Nilai-Nilai Utama Kami</h2>
            <p class="mt-2 text-slate-600 text-sm">Budaya kerja yang kami pegang teguh dalam setiap kolaborasi.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 rounded-xl bg-slate-50 border border-slate-100 text-center">
                <span class="text-3xl block mb-2">💡</span>
                <h4 class="font-bold text-slate-900 mb-1">Inovasi Berkelanjutan</h4>
                <p class="text-xs text-slate-500">Selalu mengeksplorasi teknologi terdepan untuk solusi yang efektif.</p>
            </div>
            <div class="p-6 rounded-xl bg-slate-50 border border-slate-100 text-center">
                <span class="text-3xl block mb-2">⚖️</span>
                <h4 class="font-bold text-slate-900 mb-1">Integritas & Transparansi</h4>
                <p class="text-xs text-slate-500">Menjaga kejujuran dan komitmen penuh kepada klien dan mitra.</p>
            </div>
            <div class="p-6 rounded-xl bg-slate-50 border border-slate-100 text-center">
                <span class="text-3xl block mb-2">⭐</span>
                <h4 class="font-bold text-slate-900 mb-1">Keunggulan Kualitas</h4>
                <p class="text-xs text-slate-500">Menerapkan standar testing dan quality assurance tanpa kompromi.</p>
            </div>
            <div class="p-6 rounded-xl bg-slate-50 border border-slate-100 text-center">
                <span class="text-3xl block mb-2">🤝</span>
                <h4 class="font-bold text-slate-900 mb-1">Kolaborasi Aktif</h4>
                <p class="text-xs text-slate-500">Membangun kemitraan erat bersama klien untuk hasil optimal.</p>
            </div>
        </div>
    </div>
</section>
@endsection

