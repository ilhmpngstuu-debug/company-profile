@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 text-white overflow-hidden py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-blue-500/20 text-blue-300 border border-blue-400/30 mb-6">
                🚀 Solusi IT Berstandar Industri
            </span>
            <h1 class="text-4xl sm:text-6xl font-black tracking-tight leading-tight">
                Membangun Masa Depan Bisnis Lewat <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Teknologi Modern</span>
            </h1>
            <p class="mt-6 text-lg sm:text-xl text-slate-300 leading-relaxed">
                PT Nusantara Solusi Digital membantu perusahaan dan pelaku bisnis mengakselerasi pertumbuhan melalui rekayasa web, aplikasi mobile, cloud infrastruktur, dan keamanan siber.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('services.index') }}"
                   class="px-8 py-3.5 rounded-xl bg-blue-600 text-white font-bold text-base hover:bg-blue-500 transition shadow-lg shadow-blue-500/30">
                    Jelajahi 10 Layanan Kami &rarr;
                </a>
                <a href="{{ route('about') }}"
                   class="px-8 py-3.5 rounded-xl bg-slate-800 text-slate-200 border border-slate-700 font-bold text-base hover:bg-slate-700 transition">
                    Tentang Perusahaan
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats / Counter Section -->
<section class="bg-white border-b border-slate-200 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <p class="text-3xl sm:text-4xl font-extrabold text-blue-600">120+</p>
                <p class="text-xs sm:text-sm font-medium text-slate-500 mt-1">Proyek Selesai</p>
            </div>
            <div>
                <p class="text-3xl sm:text-4xl font-extrabold text-blue-600">65+</p>
                <p class="text-xs sm:text-sm font-medium text-slate-500 mt-1">Klien Korporat</p>
            </div>
            <div>
                <p class="text-3xl sm:text-4xl font-extrabold text-blue-600">99.8%</p>
                <p class="text-xs sm:text-sm font-medium text-slate-500 mt-1">Kepuasan Klien</p>
            </div>
            <div>
                <p class="text-3xl sm:text-4xl font-extrabold text-blue-600">24/7</p>
                <p class="text-xs sm:text-sm font-medium text-slate-500 mt-1">Dukungan Teknis</p>
            </div>
        </div>
    </div>
</section>

<!-- Cuplikan Layanan Unggulan (Diambil dari Database) -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-12">
            <div>
                <span class="text-xs uppercase tracking-wider font-bold text-blue-600">Katalog Pilihan</span>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-1">Layanan Unggulan Kami</h2>
                <p class="text-sm text-slate-500 mt-2 max-w-xl">Beberapa layanan yang paling diminati untuk mempercepat transformasi digital organisasi Anda.</p>
            </div>
            <a href="{{ route('services.index') }}" class="mt-4 sm:mt-0 font-bold text-blue-600 hover:text-blue-800 text-sm flex items-center gap-1">
                Lihat Seluruh 10 Layanan &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredServices as $service)
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col group">
                <div class="h-48 w-full overflow-hidden bg-slate-100 relative">
                    <img src="{{ $service->image }}"
                         alt="{{ $service->name }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <span class="absolute top-3 left-3 bg-slate-900/80 backdrop-blur-sm text-white text-xs font-semibold px-2.5 py-1 rounded-full">
                        {{ $service->category }}
                    </span>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">
                            <a href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a>
                        </h3>
                        <p class="text-slate-600 text-sm mt-2 line-clamp-2">
                            {{ $service->description }}
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-slate-400 block uppercase font-medium">Mulai</span>
                            <span class="font-extrabold text-blue-600 text-base">
                                Rp {{ number_format($service->price, 0, ',', '.') }}
                            </span>
                        </div>
                        <a href="{{ route('services.show', $service->slug) }}" class="text-xs font-bold text-blue-600 hover:text-blue-800">
                            Detail &rarr;
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Keunggulan Perusahaan -->
<section class="py-20 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900">Mengapa Memilih PT Nusantara Solusi Digital?</h2>
            <p class="mt-3 text-slate-600">Dedikasi kami adalah menghadirkan standar mutu rekayasa perangkat lunak terbaik.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-2xl font-black mb-6">
                    ⚡
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Kecepatan & Performa Tinggi</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Setiap kode dan arsitektur dioptimasi dengan best practice terbaru guna menjamin kecepatan akses maksimal.
                </p>
            </div>

            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-2xl font-black mb-6">
                    🛡️
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Keamanan Berlapis</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Standar enkripsi data ketat dan audit berkala untuk melindungi aset digital dan kerahasiaan data pengguna.
                </p>
            </div>

            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-2xl font-black mb-6">
                    🤝
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Garansi Purna Jual</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Kami senantiasa mendampingi klien dengan garansi teknis dan perbaikan bebas biaya setelah serah terima proyek.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

