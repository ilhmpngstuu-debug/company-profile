@extends('layouts.app')

@section('title', 'Daftar Layanan Kami')

@section('content')
<!-- Header Banner Section -->
<section class="bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/20 text-blue-200 border border-blue-400/30 mb-4">
            ✨ Katalog Layanan Resmi
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
            Solusi Rekayasa & Transformasi Digital
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-blue-100">
            Kami menyediakan rangkaian layanan teknologi lengkap mulai dari pengembangan aplikasi, desain UI/UX, optimasi cloud, hingga audit keamanan siber.
        </p>
    </div>
</section>

<!-- Services Grid Section (10 Data dari Database) -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Info Bar -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center pb-6 border-b border-slate-200 mb-10 gap-4">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Semua Layanan Tersedia</h2>
                <p class="text-sm text-slate-500 mt-1">Dikelola dan diambil langsung secara dinamis melalui database.</p>
            </div>
            <div class="px-4 py-1.5 rounded-full bg-blue-100 text-blue-800 font-semibold text-xs flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                Total {{ $services->count() }} Layanan Aktif
            </div>
        </div>

        <!-- 10 Data Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($services as $service)
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    
                    <!-- Gambar Layanan -->
                    <div class="relative h-52 w-full overflow-hidden bg-slate-100">
                        <img src="{{ $service->image }}"
                             alt="{{ $service->name }}"
                             loading="lazy"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        
                        <!-- Badge Kategori -->
                        <span class="absolute top-4 left-4 bg-slate-900/80 backdrop-blur-md text-white text-xs font-medium px-3 py-1 rounded-full shadow-sm">
                            {{ $service->category }}
                        </span>
                    </div>

                    <!-- Detail & Konten Layanan -->
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition-colors line-clamp-1">
                                <a href="{{ route('services.show', $service->slug) }}">
                                    {{ $service->name }}
                                </a>
                            </h3>
                            <p class="mt-2 text-sm text-slate-600 line-clamp-3 leading-relaxed">
                                {{ $service->description }}
                            </p>
                        </div>

                        <!-- Metadata: Durasi & Harga -->
                        <div class="mt-6 pt-4 border-t border-slate-100">
                            <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Estimasi Waktu:
                                </span>
                                <span class="font-semibold text-slate-700 bg-slate-100 px-2 py-0.5 rounded">
                                    {{ $service->duration }}
                                </span>
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-[11px] font-medium text-slate-400 block uppercase tracking-wider">Mulai dari</span>
                                    <span class="text-lg font-black text-blue-600">
                                        Rp {{ number_format($service->price, 0, ',', '.') }}
                                    </span>
                                </div>
                                <a href="{{ route('services.show', $service->slug) }}"
                                   class="inline-flex items-center justify-center px-4 py-2 text-xs font-semibold rounded-lg bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-200">
                                    Lihat Detail &rarr;
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-dashed border-slate-300">
                    <p class="text-slate-500 font-medium">Belum ada layanan yang ditambahkan ke database.</p>
                    <p class="text-xs text-slate-400 mt-1">Silakan jalankan perintah <code class="bg-slate-100 px-2 py-1 rounded">sail artisan db:seed</code>.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>
@endsection

