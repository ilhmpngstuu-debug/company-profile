@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<!-- Header Banner -->
<section class="bg-[#1C2D27] text-amber-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-200 border border-amber-400/30 mb-4 tracking-wider uppercase">
            Our Brand & Legacy
        </span>
        <h1 class="text-3xl sm:text-5xl font-serif font-bold tracking-tight">
            Kisah Perjalanan GIOI Group
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-stone-300 font-light leading-relaxed">
            Dari satu restoran intim di Senopati hingga menjadi kekuatan terdepan dalam industri kuliner dan lifestyle Indonesia.
        </p>
    </div>
</section>

<!-- Our Brand & Founder Story (Anthony Sadeli - Page 2 dari PDF) -->
<section class="py-20 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div>
                <span class="text-xs uppercase tracking-[0.2em] font-bold text-amber-800">Our Founder & Vision</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-stone-900 mt-2 mb-6">
                    Igniting a Culinary Spark Since 2016
                </h2>
                <div class="space-y-4 text-stone-600 text-base leading-relaxed">
                    <p>
                        Pada tahun 2016, <strong>Anthony Sadeli</strong> menyalakan percikan kuliner baru di Indonesia dengan mendirikan <strong>GIOI</strong>. Berawal dari kecintaan terhadap keanekaragaman rempah dan tradisi memasak Asia Tenggara, GIOI dirancang untuk membawa hidangan rumahan menjadi pengalaman bersantap kelas dunia.
                    </p>
                    <p>
                        Hingga kini, <strong>GIOI Group</strong> telah berkembang pesat menjadi kekuatan terkemuka di kancah restoran dan gaya hidup, membawahi koleksi merek kuliner yang fenomenal seperti <em>GIOI Bistro & Cafe, GIOI Cafe, GIOI Ocean Gourmet, The Brassey, Shabu Baru,</em> dan <em>Sinar Mandala (Est. 1980)</em>.
                    </p>
                    <p>
                        Jangkauan kami melintasi jalanan trendi ibu kota Jakarta, dinamika kota Surabaya, hingga pantai eksotis Bali—menghadirkan pengalaman bersantap yang tak terlupakan di setiap titik lokasi.
                    </p>
                </div>

                <div class="mt-8 pt-6 border-t border-stone-200 flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-full bg-[#1C2D27] flex items-center justify-center text-amber-200 font-serif font-bold text-lg">
                        AS
                    </div>
                    <div>
                        <h4 class="font-serif font-bold text-stone-900 text-lg">Anthony Sadeli</h4>
                        <p class="text-xs uppercase tracking-wider text-stone-500 font-medium">Founder & CEO, GIOI Group</p>
                    </div>
                </div>
            </div>

            <!-- Founder & Dining Visual -->
            <div class="rounded-2xl overflow-hidden shadow-lg border border-stone-200 bg-stone-100">
                <img src="https://images.unsplash.com/photo-1578474846511-04ba529f0b88?auto=format&fit=crop&w=1000&q=80"
                     alt="Anthony Sadeli GIOI Group Dining Experience"
                     class="w-full h-80 sm:h-[460px] object-cover">
            </div>

        </div>
    </div>
</section>

<!-- Visi & Filosofi Kuliner -->
<section class="py-20 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs uppercase tracking-[0.2em] font-bold text-amber-800">Philosophy</span>
            <h2 class="text-3xl font-serif font-bold text-stone-900 mt-2">Filosofi Bersantap Kami</h2>
            <p class="mt-3 text-stone-600 text-sm">Menjaga keseimbangan antara keaslian resep tradisional dan inovasi kontemporer.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Visi -->
            <div class="bg-white p-8 rounded-2xl border border-stone-200 shadow-xs">
                <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center text-2xl font-bold mb-5">
                    🌱
                </div>
                <h3 class="text-2xl font-serif font-bold text-stone-900 mb-3">Southeast Asian Heritage</h3>
                <p class="text-stone-600 leading-relaxed text-sm">
                    Menu kami memadukan tradisi dan inovasi, menawarkan perjalanan unik melintasi lanskap kuliner Asia yang beragam. Kami menghidupkan harmoni rasa di mana setiap suapan menceritakan kisahnya masing-masing.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white p-8 rounded-2xl border border-stone-200 shadow-xs">
                <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center text-2xl font-bold mb-5">
                    ✨
                </div>
                <h3 class="text-2xl font-serif font-bold text-stone-900 mb-3">Immersive Hospitality</h3>
                <p class="text-stone-600 leading-relaxed text-sm">
                    Bukan sekadar menyajikan hidangan lezat, kami merancang ruang berkonsep hangat, ramah, dan bernuansa estetik—mulai dari kafe produktif hingga dining tepi laut dengan iringan pertunjukan seni budaya.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
