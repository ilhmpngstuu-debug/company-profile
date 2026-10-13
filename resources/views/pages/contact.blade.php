@extends('layouts.app')

@section('title', 'Kontak & Reservasi')

@section('content')
<!-- Header Banner -->
<section class="bg-[#1C2D27] text-amber-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-200 border border-amber-400/30 mb-4 tracking-wider uppercase">
            Reservation & Inquiries
        </span>
        <h1 class="text-3xl sm:text-5xl font-serif font-bold tracking-tight">
            Hubungi & Reservasi Meja Anda
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-stone-300 font-light leading-relaxed">
            Ingin memesan meja untuk makan malam istimewa, jamuan korporat, atau menyewa area event? Tim reservasi kami siap melayani Anda.
        </p>
    </div>
</section>

<!-- Content Section: Informasi Outlet & Formulir Reservasi -->
<section class="py-16 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <!-- Kolom 1: Daftar Kontak Cepat Seluruh Cabang -->
            <div class="space-y-6">
                <div class="bg-white p-8 rounded-2xl border border-stone-200 shadow-xs">
                    <h2 class="text-xl font-serif font-bold text-stone-900 mb-2">Kontak Cepat RSVP</h2>
                    <p class="text-xs text-stone-500 mb-6">Hubungi nomor reservasi outlet yang ingin Anda kunjungi:</p>
                    
                    <div class="space-y-4 text-xs max-h-[500px] overflow-y-auto pr-2 divide-y divide-stone-100">
                        @foreach($allOutlets as $outlet)
                        <div class="pt-3 first:pt-0">
                            <h4 class="font-bold text-stone-900 text-sm">{{ $outlet->name }}</h4>
                            <p class="text-stone-500 text-[11px] mt-0.5">{{ $outlet->city }}</p>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $outlet->rsvp) }}"
                               target="_blank"
                               class="inline-flex items-center gap-1.5 text-amber-800 font-semibold mt-1 hover:text-amber-950">
                                <span>💬</span> {{ $outlet->rsvp }}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-[#1C2D27] text-amber-100 p-8 rounded-2xl shadow-xs">
                    <h3 class="font-serif font-bold text-lg text-white mb-2">Head Office & Inquiries</h3>
                    <p class="text-xs text-stone-300 leading-relaxed mb-4">
                        Untuk penawaran kerjasama B2B, sponsorship event, atau layanan banquet:
                    </p>
                    <p class="text-xs text-amber-200 font-mono">partnership@gioigroup.com</p>
                    <p class="text-xs text-amber-200 font-mono mt-1">+62 21 5088 6100</p>
                </div>
            </div>

            <!-- Kolom 2 & 3: Formulir Reservasi / Booking Meja -->
            <div class="lg:col-span-2">
                <div class="bg-white p-8 sm:p-10 rounded-2xl border border-stone-200 shadow-xs">
                    <span class="text-xs uppercase tracking-wider font-bold text-amber-800">Online Booking</span>
                    <h2 class="text-2xl font-serif font-bold text-stone-900 mt-1 mb-2">Formulir Permintaan Reservasi</h2>
                    <p class="text-sm text-stone-600 mb-8">Isi detail kunjungan Anda di bawah ini dan perwakilan outlet terkait akan mengonfirmasi ketersediaan meja via WhatsApp.</p>

                    <form onsubmit="event.preventDefault(); alert('Terima kasih! Permintaan reservasi Anda telah kami terima (Simulasi). Tim GIOI Group akan menghubungi WhatsApp Anda.');" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs uppercase tracking-wider font-semibold text-stone-700 mb-2">Nama Pemesan *</label>
                                <input type="text" required placeholder="Nama lengkap Anda"
                                       class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-[#1C2D27] focus:border-transparent text-sm">
                            </div>

                            <div>
                                <label class="block text-xs uppercase tracking-wider font-semibold text-stone-700 mb-2">Nomor WhatsApp *</label>
                                <input type="tel" required placeholder="081234567890"
                                       class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-[#1C2D27] focus:border-transparent text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs uppercase tracking-wider font-semibold text-stone-700 mb-2">Pilih Outlet Tujuan *</label>
                                <select required class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-[#1C2D27] focus:border-transparent text-sm bg-white">
                                    <option value="">-- Pilih Cabang GIOI Group --</option>
                                    @foreach($allOutlets as $outlet)
                                        <option value="{{ $outlet->name }}">{{ $outlet->name }} ({{ $outlet->city }})</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs uppercase tracking-wider font-semibold text-stone-700 mb-2">Jumlah Tamu (Pax) *</label>
                                <input type="number" min="1" max="100" required placeholder="Contoh: 4"
                                       class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-[#1C2D27] focus:border-transparent text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs uppercase tracking-wider font-semibold text-stone-700 mb-2">Tanggal Kunjungan *</label>
                                <input type="date" required
                                       class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-[#1C2D27] focus:border-transparent text-sm">
                            </div>

                            <div>
                                <label class="block text-xs uppercase tracking-wider font-semibold text-stone-700 mb-2">Waktu / Jam Kunjungan *</label>
                                <input type="time" required
                                       class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-[#1C2D27] focus:border-transparent text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs uppercase tracking-wider font-semibold text-stone-700 mb-2">Permintaan Khusus / Keperluan Event</label>
                            <textarea rows="3" placeholder="Contoh: Meja smoking/non-smoking, baby chair, perayaan ulang tahun, private room..."
                                      class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-[#1C2D27] focus:border-transparent text-sm"></textarea>
                        </div>

                        <button type="submit"
                                class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-[#1C2D27] text-amber-100 hover:bg-stone-800 font-medium text-xs tracking-wider uppercase transition shadow-md">
                            Kirim Permintaan Reservasi &rarr;
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
