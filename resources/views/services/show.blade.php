@extends('layouts.app')

@section('title', $service->name)

@section('content')
<div class="py-12 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center space-x-2 text-sm text-slate-500 mb-8">
            <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Beranda</a>
            <span>/</span>
            <a href="{{ route('services.index') }}" class="hover:text-blue-600 transition">Layanan</a>
            <span>/</span>
            <span class="text-slate-800 font-semibold truncate">{{ $service->name }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Left 2 Cols: Main Content & Big Image -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Gambar Utama -->
                <div class="rounded-2xl overflow-hidden shadow-md bg-white border border-slate-200">
                    <img src="{{ $service->image }}"
                         alt="{{ $service->name }}"
                         class="w-full h-80 sm:h-96 object-cover">
                </div>

                <!-- Konten & Deskripsi -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
                    <div class="inline-block px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full mb-3">
                        {{ $service->category }}
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-4">
                        {{ $service->name }}
                    </h1>
                    <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed text-base">
                        <p>{{ $service->description }}</p>
                    </div>

                    <!-- Keuntungan & Fasilitas Layanan -->
                    <div class="mt-8 pt-6 border-t border-slate-100">
                        <h3 class="text-base font-bold text-slate-900 mb-4">Apa yang Anda Dapatkan:</h3>
                        <ul class="space-y-3 text-sm text-slate-600">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                                <span>Konsultasi arsitektur dan kebutuhan spesifikasi proyek secara menyeluruh.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                                <span>Source code terstruktur, dokumentasi teknis, dan user manual lengkap.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                                <span>Garansi pemeliharaan dan perbaikan bug selama 3 bulan pasca-deployment.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                                <span>Desain responsif berstandar modern dan optimal untuk semua jenis layar.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right 1 Col: Summary Card & Action -->
            <div class="space-y-6">
                <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm sticky top-28">
                    <h2 class="text-lg font-bold text-slate-900 pb-4 border-b border-slate-100 mb-4">
                        Ringkasan Layanan
                    </h2>

                    <div class="space-y-4 text-sm mb-6">
                        <div>
                            <span class="text-xs text-slate-400 block uppercase">Estimasi Biaya</span>
                            <span class="text-2xl font-black text-blue-600">
                                Rp {{ number_format($service->price, 0, ',', '.') }}
                            </span>
                        </div>

                        <div>
                            <span class="text-xs text-slate-400 block uppercase">Waktu Pengerjaan</span>
                            <span class="text-sm font-semibold text-slate-700">
                                {{ $service->duration }}
                            </span>
                        </div>

                        <div>
                            <span class="text-xs text-slate-400 block uppercase">Kategori</span>
                            <span class="text-sm font-semibold text-slate-700">
                                {{ $service->category }}
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="w-full inline-flex items-center justify-center px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition shadow-md shadow-blue-500/20 text-center">
                        Konsultasikan Layanan Ini
                    </a>

                    <a href="{{ route('services.index') }}"
                       class="w-full mt-3 inline-flex items-center justify-center px-6 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition text-center text-sm">
                        &larr; Kembali ke Katalog
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

