<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') - GIOI GROUP | Restaurant & Lifestyle</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FAF7F2] text-stone-800 flex flex-col min-h-screen font-sans antialiased selection:bg-amber-100 selection:text-amber-900">

    <!-- Header & 4 Menu Navigasi Utama -->
    <header class="bg-white/95 backdrop-blur-md border-b border-stone-200 sticky top-0 z-50 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <!-- Brand / Logo GIOI GROUP -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="w-11 h-11 rounded-full bg-[#1C2D27] flex items-center justify-center text-amber-200 font-serif font-black text-2xl shadow-sm tracking-wider">
                        G
                    </div>
                    <div>
                        <span class="text-2xl font-serif font-bold tracking-widest text-[#1C2D27] uppercase">GIỎI</span>
                        <span class="text-[10px] block font-semibold text-stone-500 tracking-[0.25em] uppercase">Group &bull; 2025</span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu (4 Menu Wajib) -->
                <nav class="hidden md:flex items-center space-x-2">
                    <a href="{{ route('home') }}"
                       class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-[#1C2D27] text-amber-100 shadow-sm' : 'text-stone-700 hover:text-[#1C2D27] hover:bg-stone-100' }}">
                        Beranda
                    </a>
                    <a href="{{ route('about') }}"
                       class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('about') ? 'bg-[#1C2D27] text-amber-100 shadow-sm' : 'text-stone-700 hover:text-[#1C2D27] hover:bg-stone-100' }}">
                        Tentang Kami
                    </a>
                    <a href="{{ route('outlets.index') }}"
                       class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('outlets.*') ? 'bg-[#1C2D27] text-amber-100 shadow-sm' : 'text-stone-700 hover:text-[#1C2D27] hover:bg-stone-100' }}">
                        Outlet Kami
                    </a>
                    <a href="{{ route('contact') }}"
                       class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-[#1C2D27] text-amber-100 shadow-sm' : 'text-stone-700 hover:text-[#1C2D27] hover:bg-stone-100' }}">
                        Kontak & RSVP
                    </a>
                </nav>

                <!-- CTA RSVP Button (Desktop) -->
                <div class="hidden lg:block">
                    <a href="{{ route('outlets.index') }}"
                       class="px-5 py-2.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-amber-700 hover:bg-amber-800 text-white transition shadow-sm">
                        Cari Restoran
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-stone-700 hover:bg-stone-100 focus:outline-none" aria-label="Toggle menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="menu-icon-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-stone-200 bg-white px-4 pt-3 pb-5 space-y-2">
            <a href="{{ route('home') }}"
               class="block px-4 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('home') ? 'bg-[#1C2D27] text-amber-100' : 'text-stone-800 hover:bg-stone-50' }}">
                Beranda
            </a>
            <a href="{{ route('about') }}"
               class="block px-4 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('about') ? 'bg-[#1C2D27] text-amber-100' : 'text-stone-800 hover:bg-stone-50' }}">
                Tentang Kami
            </a>
            <a href="{{ route('outlets.index') }}"
               class="block px-4 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('outlets.*') ? 'bg-[#1C2D27] text-amber-100' : 'text-stone-800 hover:bg-stone-50' }}">
                Outlet Kami
            </a>
            <a href="{{ route('contact') }}"
               class="block px-4 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('contact') ? 'bg-[#1C2D27] text-amber-100' : 'text-stone-800 hover:bg-stone-50' }}">
                Kontak & RSVP
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer GIOI GROUP -->
    <footer class="bg-[#141F1B] text-stone-300 border-t border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            
            <!-- Brand Portfolio Badges -->
            <div class="border-b border-stone-800 pb-10 mb-10">
                <p class="text-xs uppercase tracking-[0.2em] text-stone-500 font-semibold mb-6 text-center">Portfolio Brands of GIOI Group</p>
                <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10 text-stone-400 font-serif text-sm">
                    <span class="hover:text-amber-200 transition">GIỎI Bistro & Cafe</span>
                    <span class="text-stone-700">&bull;</span>
                    <span class="hover:text-amber-200 transition">GIỎI Cafe</span>
                    <span class="text-stone-700">&bull;</span>
                    <span class="hover:text-amber-200 transition">GIỎI Ocean Gourmet</span>
                    <span class="text-stone-700">&bull;</span>
                    <span class="hover:text-amber-200 transition">The Brassey</span>
                    <span class="text-stone-700">&bull;</span>
                    <span class="hover:text-amber-200 transition">Shabu Baru</span>
                    <span class="text-stone-700">&bull;</span>
                    <span class="hover:text-amber-200 transition">Sinar Mandala (Since 1980)</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <!-- Col 1: Brand Info -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-9 h-9 rounded-full bg-amber-700/80 flex items-center justify-center text-amber-100 font-serif font-black text-lg">
                            G
                        </div>
                        <span class="text-xl font-serif font-bold text-white tracking-widest uppercase">GIỎI GROUP</span>
                    </div>
                    <p class="text-stone-400 text-sm leading-relaxed max-w-md">
                        Didirikan oleh Anthony Sadeli pada tahun 2016. Memimpin industri hospitality dan kuliner gaya hidup di Indonesia dengan menghadirkan pengalaman bersantap istimewa di Jakarta, Surabaya, dan Bali.
                    </p>
                    <p class="text-xs text-stone-500">
                        Southeast Asian Comfort Food & Global Culinary Fusion
                    </p>
                </div>

                <!-- Col 2: Navigasi 4 Menu -->
                <div>
                    <h4 class="text-xs font-semibold text-amber-200 tracking-widest uppercase mb-4">Navigasi Utama</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-amber-100 transition">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-amber-100 transition">Tentang Kami</a></li>
                        <li><a href="{{ route('outlets.index') }}" class="hover:text-amber-100 transition">Outlet & Cabang (10 Lokasi)</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-amber-100 transition">Kontak & Reservasi</a></li>
                    </ul>
                </div>

                <!-- Col 3: Instagram Resmi -->
                <div>
                    <h4 class="text-xs font-semibold text-amber-200 tracking-widest uppercase mb-4">Follow Us on Instagram</h4>
                    <ul class="space-y-1.5 text-xs text-stone-400">
                        <li><a href="https://instagram.com/GIOIjakarta" target="_blank" class="hover:text-amber-200 transition">@GIOIjakarta</a></li>
                        <li><a href="https://instagram.com/GIOI.cafe" target="_blank" class="hover:text-amber-200 transition">@GIOI.cafe</a></li>
                        <li><a href="https://instagram.com/GIOIoceangourmet" target="_blank" class="hover:text-amber-200 transition">@GIOIoceangourmet</a></li>
                        <li><a href="https://instagram.com/TheBrassey" target="_blank" class="hover:text-amber-200 transition">@TheBrassey</a></li>
                        <li><a href="https://instagram.com/restomandala" target="_blank" class="hover:text-amber-200 transition">@restomandala</a></li>
                        <li><a href="https://instagram.com/Shabubaru.id" target="_blank" class="hover:text-amber-200 transition">@Shabubaru.id</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 border-t border-stone-800 flex flex-col sm:flex-row justify-between items-center text-xs text-stone-500 space-y-4 sm:space-y-0">
                <p>&copy; 2025 GIOI GROUP. All rights reserved.</p>
                <p class="bg-stone-900 border border-stone-800 px-3.5 py-1.5 rounded-full text-stone-400">
                    Tugas Praktikum Rekayasa Web &bull; Pertemuan 7
                </p>
            </div>
        </div>
    </footer>

    <!-- Interactive Toggle Script for Mobile Navigation -->
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>
</body>
</html>
