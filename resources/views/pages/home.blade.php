@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-[#141F1B] via-[#1C2D27] to-[#141F1B] text-amber-50 py-24 sm:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 mb-8 uppercase tracking-[0.25em]">
            Restaurant & Lifestyle Group &bull; Est. 2016
        </span>
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif font-bold tracking-tight leading-tight max-w-4xl mx-auto">
            A Symphony of Taste, Where <span class="italic text-amber-300">Every Bite</span> Tells a Story.
        </h1>
        <p class="mt-6 text-base sm:text-xl text-stone-300 max-w-2xl mx-auto font-light leading-relaxed">
            Menghadirkan kehangatan cita rasa Asia Tenggara dan eksplorasi kuliner global melalui pengalaman bersantap istimewa di Jakarta, Surabaya, dan Bali.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('outlets.index') }}"
               class="px-8 py-4 rounded-full bg-amber-700 hover:bg-amber-800 text-white font-medium text-sm tracking-wider uppercase transition shadow-lg shadow-amber-900/30">
                Jelajahi 10 Outlet Kami &rarr;
            </a>
            <a href="{{ route('about') }}"
               class="px-8 py-4 rounded-full bg-white/10 hover:bg-white/20 text-amber-100 border border-white/20 font-medium text-sm tracking-wider uppercase transition backdrop-blur-xs">
                Kisah GIOI Group
            </a>
        </div>
    </div>
</section>

<!-- Koleksi 6 Brand GIOI Group -->
<section class="py-20 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase tracking-[0.2em] font-bold text-amber-800">Our Collection</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-stone-900 mt-2">Brand di Bawah Naungan GIOI Group</h2>
            <p class="mt-3 text-stone-600 text-sm leading-relaxed">Koleksi konsep restoran dan kafe yang dirancang khusus untuk setiap momen berharga Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Brand 1: GIOI Bistro & Cafe -->
            <div class="p-8 rounded-2xl bg-[#FAF7F2] border border-stone-200 hover:border-amber-700/50 transition">
                <span class="text-xs uppercase tracking-wider font-bold text-amber-800">Menteng, Senopati, PIK</span>
                <h3 class="text-2xl font-serif font-bold text-stone-900 mt-2 mb-3">GIỎI Bistro & Cafe</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Southeast Asian Comfort Food yang memadukan tradisi dan inovasi cita rasa rempah khas Asia Tenggara.
                </p>
            </div>

            <!-- Brand 2: GIOI Cafe -->
            <div class="p-8 rounded-2xl bg-[#FAF7F2] border border-stone-200 hover:border-amber-700/50 transition">
                <span class="text-xs uppercase tracking-wider font-bold text-amber-800">IDD PIK 2, Setiabudi, Thamrin</span>
                <h3 class="text-2xl font-serif font-bold text-stone-900 mt-2 mb-3">GIỎI Cafe</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Ruang kerja dan temu yang nyaman dengan sajian specialty coffee, kreasi mocktail, serta all-day nibbles.
                </p>
            </div>

            <!-- Brand 3: GIOI Ocean Gourmet -->
            <div class="p-8 rounded-2xl bg-[#FAF7F2] border border-stone-200 hover:border-amber-700/50 transition">
                <span class="text-xs uppercase tracking-wider font-bold text-amber-800">Discovery Mall Kuta, Bali</span>
                <h3 class="text-2xl font-serif font-bold text-stone-900 mt-2 mb-3">GIỎI Ocean Gourmet</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Dining tepi pantai dengan panorama sunset, perpaduan hidangan khas GIOI, kuliner Bali, dan live performance.
                </p>
            </div>

            <!-- Brand 4: The Brassey -->
            <div class="p-8 rounded-2xl bg-[#FAF7F2] border border-stone-200 hover:border-amber-700/50 transition">
                <span class="text-xs uppercase tracking-wider font-bold text-amber-800">Sedayu Indo Golf PIK</span>
                <h3 class="text-2xl font-serif font-bold text-stone-900 mt-2 mb-3">The Brassey</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Pengalaman bersantap fusion Asian-Western dengan panorama padang golf hijau nan megah berplafon tinggi.
                </p>
            </div>

            <!-- Brand 5: Shabu Baru -->
            <div class="p-8 rounded-2xl bg-[#FAF7F2] border border-stone-200 hover:border-amber-700/50 transition">
                <span class="text-xs uppercase tracking-wider font-bold text-amber-800">Carstensz Mall, Gading Serpong</span>
                <h3 class="text-2xl font-serif font-bold text-stone-900 mt-2 mb-3">Shabu Baru</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Fusion shabu-shabu dengan aneka kuah global pilihan dalam satu personal pot dan daging impor premium.
                </p>
            </div>

            <!-- Brand 6: Sinar Mandala -->
            <div class="p-8 rounded-2xl bg-[#FAF7F2] border border-stone-200 hover:border-amber-700/50 transition">
                <span class="text-xs uppercase tracking-wider font-bold text-amber-800">Wolter Monginsidi, Jaksel</span>
                <h3 class="text-2xl font-serif font-bold text-stone-900 mt-2 mb-3">Sinar Mandala</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Restoran Chinese otentik dan halal legendaris sejak 1980 yang telah menjadi warisan kuliner turun temurun.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cuplikan Outlet Unggulan (Data dari Database) -->
<section class="py-20 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-12">
            <div>
                <span class="text-xs uppercase tracking-wider font-bold text-amber-800">Featured Locations</span>
                <h2 class="text-3xl font-serif font-bold text-stone-900 mt-1">Outlet Pilihan GIOI Group</h2>
                <p class="text-sm text-stone-600 mt-2 max-w-xl">Dari pusat kota Jakarta hingga pesisir pantai Kuta, temukan suasana bersantap favorit Anda.</p>
            </div>
            <a href="{{ route('outlets.index') }}" class="mt-4 sm:mt-0 font-semibold text-amber-800 hover:text-amber-950 text-sm flex items-center gap-1">
                Lihat Seluruh 10 Outlet &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredOutlets as $outlet)
            <div class="bg-white rounded-2xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col group">
                <div class="h-52 w-full overflow-hidden bg-stone-100 relative">
                    <img src="{{ $outlet->image }}"
                         alt="{{ $outlet->name }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 left-3 bg-[#1C2D27]/90 backdrop-blur-sm text-amber-200 text-xs font-serif px-2.5 py-1 rounded-full">
                        {{ $outlet->brand }}
                    </span>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-serif font-bold text-stone-900 group-hover:text-amber-800 transition">
                            <a href="{{ route('outlets.show', $outlet->slug) }}">{{ $outlet->name }}</a>
                        </h3>
                        <p class="text-stone-500 text-xs mt-1">
                            {{ $outlet->address }}
                        </p>
                        <p class="text-stone-600 text-sm mt-3 line-clamp-2">
                            {{ $outlet->description }}
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-stone-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-stone-400 block uppercase font-medium">Kapasitas</span>
                            <span class="font-bold text-stone-800 text-xs">
                                {{ $outlet->capacity }}
                            </span>
                        </div>
                        <a href="{{ route('outlets.show', $outlet->slug) }}" class="text-xs font-semibold text-amber-800 hover:text-amber-950">
                            Detail Outlet &rarr;
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Layanan Tambahan (Page 23 dari Company Profile) -->
<section class="py-20 bg-white border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs uppercase tracking-[0.2em] font-bold text-amber-800">Hospitality Solutions</span>
            <h2 class="text-3xl font-serif font-bold text-stone-900 mt-2">Layanan Spesial Kami</h2>
            <p class="mt-3 text-stone-600 text-sm">Menghidupkan setiap acara Anda dengan standar katering dan keramahan profesional.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 rounded-2xl bg-[#FAF7F2] border border-stone-100 text-center">
                <span class="text-4xl block mb-3">🎂</span>
                <h4 class="font-serif font-bold text-stone-900 mb-2">Cakes and Hampers</h4>
                <p class="text-xs text-stone-600">Kreasi kue premium dan hampers musiman elegan untuk hadiah istimewa.</p>
            </div>
            <div class="p-6 rounded-2xl bg-[#FAF7F2] border border-stone-100 text-center">
                <span class="text-4xl block mb-3">🍽️</span>
                <h4 class="font-serif font-bold text-stone-900 mb-2">Banquet and Catering</h4>
                <p class="text-xs text-stone-600">Layanan jamuan makan prasmanan dan katering korporat berstandar bintang lima.</p>
            </div>
            <div class="p-6 rounded-2xl bg-[#FAF7F2] border border-stone-100 text-center">
                <span class="text-4xl block mb-3">🎤</span>
                <h4 class="font-serif font-bold text-stone-900 mb-2">Live Events</h4>
                <p class="text-xs text-stone-600">Pertunjukan musik langsung, cultural dance, dan hiburan bertema di outlet kami.</p>
            </div>
            <div class="p-6 rounded-2xl bg-[#FAF7F2] border border-stone-100 text-center">
                <span class="text-4xl block mb-3">🏛️</span>
                <h4 class="font-serif font-bold text-stone-900 mb-2">Event Space</h4>
                <p class="text-xs text-stone-600">Penyewaan venue multifungsi untuk intimate wedding, birthday, dan launching produk.</p>
            </div>
        </div>
    </div>
</section>
@endsection
