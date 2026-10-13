@extends('layouts.app')

@section('title', 'Outlet & Cabang Restoran')

@section('content')
<!-- Header Banner Section -->
<section class="relative bg-[#1C2D27] text-amber-50 py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-200 border border-amber-400/30 mb-4 tracking-wider uppercase">
            📍 Jaringan Restoran & Kafe
        </span>
        <h1 class="text-3xl sm:text-5xl font-serif font-bold tracking-wide">
            Temukan Outlet GIOI Group
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-stone-300 font-light leading-relaxed">
            Menghadirkan pengalaman bersantap istimewa di 10 lokasi strategis di Jakarta, Tangerang, dan pesisir pantai Bali.
        </p>
    </div>
</section>

<!-- Outlets Grid Section (10 Data dari Database) -->
<section class="py-16 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Info Bar & Stats -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center pb-6 border-b border-stone-200 mb-10 gap-4">
            <div>
                <h2 class="text-2xl font-serif font-bold text-stone-900">Daftar Seluruh Cabang</h2>
                <p class="text-sm text-stone-600 mt-1">Data lokasi, kapasitas, dan kontak reservasi terhubung langsung ke database.</p>
            </div>
            <div class="px-4 py-2 rounded-full bg-amber-100/80 text-amber-900 font-medium text-xs flex items-center gap-2 border border-amber-200">
                <span class="w-2 h-2 rounded-full bg-amber-700 animate-pulse"></span>
                Total {{ $outlets->count() }} Cabang Resmi
            </div>
        </div>

        <!-- 10 Outlets Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($outlets as $outlet)
                <div class="bg-white rounded-2xl border border-stone-200 shadow-sm overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    
                    <!-- Foto Outlet -->
                    <div class="relative h-56 w-full overflow-hidden bg-stone-100">
                        <img src="{{ $outlet->image }}"
                             alt="{{ $outlet->name }}"
                             loading="lazy"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        
                        <!-- Badges Brand & City -->
                        <div class="absolute top-4 left-4 flex flex-col gap-1.5 items-start">
                            <span class="bg-[#1C2D27]/90 backdrop-blur-md text-amber-200 text-[11px] font-serif px-3 py-1 rounded-full shadow-sm">
                                {{ $outlet->brand }}
                            </span>
                            <span class="bg-white/95 text-stone-800 text-[10px] font-semibold tracking-wider uppercase px-2.5 py-0.5 rounded-full shadow-xs">
                                📍 {{ $outlet->city }}
                            </span>
                        </div>
                    </div>

                    <!-- Informasi Outlet -->
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-serif font-bold text-stone-900 group-hover:text-amber-800 transition-colors">
                                <a href="{{ route('outlets.show', $outlet->slug) }}">
                                    {{ $outlet->name }}
                                </a>
                            </h3>
                            <p class="mt-2 text-xs text-stone-500 leading-relaxed">
                                {{ $outlet->address }}
                            </p>
                            <p class="mt-3 text-sm text-stone-600 line-clamp-2 leading-relaxed">
                                {{ $outlet->description }}
                            </p>
                        </div>

                        <!-- Metadata: Kapasitas & Kontak RSVP -->
                        <div class="mt-6 pt-4 border-t border-stone-100 space-y-3">
                            <div class="flex items-center justify-between text-xs text-stone-600">
                                <span class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Kapasitas:
                                </span>
                                <span class="font-semibold text-stone-800 bg-stone-100 px-2.5 py-0.5 rounded-full">
                                    {{ $outlet->capacity }}
                                </span>
                            </div>

                            <div class="flex items-center justify-between pt-2">
                                <div>
                                    <span class="text-[10px] uppercase tracking-wider font-semibold text-stone-400 block">Reservasi (RSVP)</span>
                                    <span class="text-xs font-bold text-amber-800">
                                        {{ $outlet->rsvp }}
                                    </span>
                                </div>
                                <a href="{{ route('outlets.show', $outlet->slug) }}"
                                   class="inline-flex items-center px-4 py-2 rounded-lg bg-[#1C2D27] text-amber-100 hover:bg-stone-800 text-xs font-medium transition shadow-xs">
                                    Detail &rarr;
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-dashed border-stone-300">
                    <p class="text-stone-600 font-medium">Belum ada data outlet yang terdaftar di database.</p>
                    <p class="text-xs text-stone-400 mt-1">Silakan jalankan perintah <code class="bg-stone-100 px-2 py-1 rounded">sail artisan db:seed</code>.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>
@endsection

