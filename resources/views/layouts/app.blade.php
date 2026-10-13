<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') - PT Nusantara Solusi Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen font-sans antialiased">

    <!-- Header & Navigasi (4 Menu Wajib) -->
    <header class="bg-white/95 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Brand / Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white font-black text-xl shadow-md shadow-blue-500/20 group-hover:scale-105 transition">
                        N
                    </div>
                    <div>
                        <span class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-blue-600 transition">Nusantara</span>
                        <span class="text-xs block font-semibold text-blue-600 tracking-wider uppercase">Solusi Digital</span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu (4 Menu) -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="{{ route('home') }}"
                       class="px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-600 text-white shadow-sm shadow-blue-500/30' : 'text-slate-600 hover:text-blue-600 hover:bg-slate-100' }}">
                        Beranda
                    </a>
                    <a href="{{ route('about') }}"
                       class="px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 {{ request()->routeIs('about') ? 'bg-blue-600 text-white shadow-sm shadow-blue-500/30' : 'text-slate-600 hover:text-blue-600 hover:bg-slate-100' }}">
                        Tentang Kami
                    </a>
                    <a href="{{ route('services.index') }}"
                       class="px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 {{ request()->routeIs('services.*') ? 'bg-blue-600 text-white shadow-sm shadow-blue-500/30' : 'text-slate-600 hover:text-blue-600 hover:bg-slate-100' }}">
                        Layanan
                    </a>
                    <a href="{{ route('contact') }}"
                       class="px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-blue-600 text-white shadow-sm shadow-blue-500/30' : 'text-slate-600 hover:text-blue-600 hover:bg-slate-100' }}">
                        Kontak
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none" aria-label="Toggle menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="menu-icon-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white px-4 pt-3 pb-5 space-y-2">
            <a href="{{ route('home') }}"
               class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('home') ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
                Beranda
            </a>
            <a href="{{ route('about') }}"
               class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('about') ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
                Tentang Kami
            </a>
            <a href="{{ route('services.index') }}"
               class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('services.*') ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
                Layanan
            </a>
            <a href="{{ route('contact') }}"
               class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('contact') ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
                Kontak
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Col 1: Profil Singkat -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white font-bold">
                            N
                        </div>
                        <span class="text-xl font-bold text-white tracking-tight">PT Nusantara Solusi Digital</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-md mb-4">
                        Mitra terpercaya transformasi digital bisnis di Indonesia. Menyediakan solusi rekayasa perangkat lunak, arsitektur cloud, dan konsultasi IT terintegrasi.
                    </p>
                    <p class="text-xs text-slate-500">
                        Jl. Sudirman No. 120, Gedung Menara Digital Lt. 8, Jakarta Selatan 12190
                    </p>
                </div>

                <!-- Col 2: Navigasi Cepat -->
                <div>
                    <h4 class="text-sm font-semibold text-white tracking-wider uppercase mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-400 transition">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-blue-400 transition">Tentang Kami</a></li>
                        <li><a href="{{ route('services.index') }}" class="hover:text-blue-400 transition">Layanan Perusahaan</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-blue-400 transition">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Col 3: Kontak Cepat -->
                <div>
                    <h4 class="text-sm font-semibold text-white tracking-wider uppercase mb-4">Kontak</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li class="flex items-center space-x-2">
                            <span>📧</span>
                            <span>info@nusantaradigital.id</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span>📞</span>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span>⏰</span>
                            <span>Senin - Jumat: 09:00 - 18:00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 border-t border-slate-800 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 space-y-4 sm:space-y-0">
                <p>&copy; {{ date('Y') }} PT Nusantara Solusi Digital. Seluruh hak cipta dilindungi undang-undang.</p>
                <p class="bg-slate-800 px-3 py-1 rounded-full text-slate-400">
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

