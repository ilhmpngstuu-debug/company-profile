@extends('layouts.app')

@section('title', $outlet->name)

@section('content')
<div class="py-12 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center space-x-2 text-sm text-stone-500 mb-8 font-light">
            <a href="{{ route('home') }}" class="hover:text-amber-800 transition">Beranda</a>
            <span>/</span>
            <a href="{{ route('outlets.index') }}" class="hover:text-amber-800 transition">Outlet</a>
            <span>/</span>
            <span class="text-stone-800 font-medium truncate">{{ $outlet->name }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Left 2 Cols: Main Content & Big Image -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Foto Utama Ambience -->
                <div class="rounded-2xl overflow-hidden shadow-md bg-white border border-stone-200">
                    <img src="{{ $outlet->image }}"
                         alt="{{ $outlet->name }}"
                         class="w-full h-80 sm:h-[420px] object-cover">
                </div>

                <!-- Konten & Deskripsi -->
                <div class="bg-white rounded-2xl border border-stone-200 p-8 shadow-xs">
                    <div class="flex flex-wrap items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-[#1C2D27] text-amber-200 text-xs font-serif rounded-full">
                            {{ $outlet->brand }}
                        </span>
                        <span class="px-3 py-1 bg-amber-100 text-amber-900 text-xs font-semibold rounded-full">
                            📍 {{ $outlet->city }}
                        </span>
                    </div>

                    <h1 class="text-2xl sm:text-4xl font-serif font-bold text-stone-900 mb-4">
                        {{ $outlet->name }}
                    </h1>

                    <div class="prose prose-stone max-w-none text-stone-600 leading-relaxed text-base">
                        <p>{{ $outlet->description }}</p>
                    </div>

                    <!-- Fasilitas & Keunggulan Outlet -->
                    <div class="mt-8 pt-6 border-t border-stone-100">
                        <h3 class="text-base font-serif font-bold text-stone-900 mb-4">Fasilitas & Layanan di Outlet Ini:</h3>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-stone-600">
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs">✓</span>
                                <span>Area Makan Nyaman & AC</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs">✓</span>
                                <span>Private Dining Room (Reservasi)</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs">✓</span>
                                <span>Layanan Banquet & Event Gathering</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs">✓</span>
                                <span>Koneksi Wi-Fi Berkecepatan Tinggi</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right 1 Col: Summary Card & RSVP Action -->
            <div class="space-y-6">
                <div class="bg-white rounded-2xl border border-stone-200 p-6 shadow-xs sticky top-28">
                    <h2 class="text-lg font-serif font-bold text-stone-900 pb-4 border-b border-stone-100 mb-4">
                        Informasi Kunjungan & RSVP
                    </h2>

                    <div class="space-y-4 text-sm mb-6">
                        <div>
                            <span class="text-xs text-stone-400 block uppercase font-medium">Alamat Lengkap</span>
                            <span class="text-sm font-medium text-stone-800 leading-relaxed block mt-1">
                                {{ $outlet->address }}
                            </span>
                        </div>

                        <div>
                            <span class="text-xs text-stone-400 block uppercase font-medium">Kapasitas Tempat</span>
                            <span class="text-sm font-semibold text-stone-800">
                                {{ $outlet->capacity }}
                            </span>
                        </div>

                        <div>
                            <span class="text-xs text-stone-400 block uppercase font-medium">Nomor Reservasi (RSVP)</span>
                            <span class="text-base font-bold text-amber-800 block mt-1">
                                {{ $outlet->rsvp }}
                            </span>
                        </div>
                    </div>

                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $outlet->rsvp) }}"
                       target="_blank"
                       class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800 transition shadow-sm text-center">
                        <span>💬</span> Reservasi via WhatsApp
                    </a>

                    <a href="{{ route('outlets.index') }}"
                       class="w-full mt-3 inline-flex items-center justify-center px-6 py-3 rounded-xl bg-stone-100 text-stone-700 font-medium hover:bg-stone-200 transition text-center text-xs">
                        &larr; Lihat Outlet Lainnya
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

