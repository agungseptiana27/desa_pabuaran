@extends('template.layout')
@section('title', 'Profile Desa | ' . config('app.name'))

@section('style')
<style>
#struktur {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.svg-container {
    display: inline-block;
    position: relative;
    width: 100%;
    padding-bottom: 80%;
    /* Aspect ratio: 80% of width */
    vertical-align: middle;
    overflow: hidden;
}

.svg-content {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

@media (max-width: 768px) {
    .svg-container {
        padding-bottom: 120%;
        /* Increase aspect ratio for mobile devices */
    }
}
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section id="home">
    <div class="relative">
        <div class="h-[70vh] sm:h-[50vh] md:h-[70vh] lg:h-[100vh] overflow-hidden">
            <img class="w-full h-full object-cover" src="{{ asset('images/background_profile_desa.png') }}"
                alt="Background Hero">
        </div>
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <!-- Content Container -->
        <div class="absolute inset-0 flex items-center justify-center px-4 sm:px-6 md:px-10">
            <div class="max-w-7xl w-full grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center">
                <!-- Left: Text Content -->
                <div class="text-center lg:text-left order-2 lg:order-1">
                    <h4
                        class="text-2xl sm:text-3xl md:text-5xl lg:text-7xl text-white font-caveat font-bold mb-4 md:mb-6 leading-tight">
                        Desa Pabuaran
                    </h4>
                    <p class="text-white/90 text-base sm:text-lg md:text-xl  mx-auto lg:mx-0 leading-relaxed">
                        Mewujudkan Desa Pabuaran yang Transparan, Informatif, dan Bersahabat.
                    </p>
                </div>
                <!-- Right: Kepala Desa Circle Photo -->
                <div class="flex justify-center lg:justify-end order-1 lg:order-2 mb-6 lg:mb-0">
                    <div class="relative px-10">
                        <!-- Outer decorative ring -->
                        <div
                            class="hidden sm:block w-40 h-40 md:w-85 md:h-85 rounded-full border-4 border-white/20 absolute inset-0 animate-pulse">
                        </div>
                        <!-- Main photo container -->
                        <div class="relative w-32 h-32 md:w-75 md:h-75 mx-auto">
                            <!-- Photo circle with gradient border -->
                            <div
                                class="w-full h-full rounded-full p-1 sm:p-2 bg-gradient-to-br from-emerald-500 via-emerald-700 to-emerald-800 shadow-2xl overflow-hidden">
                                <img class="w-full h-full rounded-full object-cover border-2 sm:border-4 border-white object-[center_20%]"
                                    src="{{ asset('images/hamzah.png') }}" alt="Kepala Desa">
                            </div>
                            <!-- Floating info card -->
                            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                                <div
                                    class="bg-white rounded-2xl shadow-xl px-4 py-2 sm:px-6 sm:py-4 text-center min-w-max">
                                    <h3 class="text-gray-800 font-bold text-base sm:text-lg">Hamzah Hadi Permana, S.T
                                    </h3>
                                    <p class="text-emerald-700 font-semibold text-xs sm:text-sm">Desa Pabuaran</p>
                                    <p class="text-gray-500 text-xs">Periode 2025-2030</p>
                                </div>
                            </div>
                        </div>
                        <!-- Decorative floating elements -->
                        <div
                            class="hidden sm:block absolute top-4 -right-2 w-4 h-4 md:w-6 md:h-6 bg-orange-400 rounded-full opacity-80 animate-bounce">
                        </div>
                        <div class="hidden sm:block absolute -top-2 left-8 w-3 h-3 md:w-4 md:h-4 bg-blue-400 rounded-full opacity-60 animate-bounce"
                            style="animation-delay: 0.5s;"></div>
                        <div class="hidden sm:block absolute bottom-8 -left-4 w-3.5 h-3.5 md:w-5 md:h-5 bg-yellow-400 rounded-full opacity-70 animate-bounce"
                            style="animation-delay: 1s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Grafik Statistik desa --}}
<section id="grafik-statistik" class="bg-white pt-10 px-20">
    <div class="container mx-auto px-4">
        {{-- <h2 class="text-4xl font-bold text-center mb-10 text-white">Grafik Statistik Desa Pabuaran</h2> --}}
        <!-- Statistik Utama -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/jumlah_penduduk.png') }}" alt="Icon Penduduk" class="w-16 h-16 mx-auto mb-4">
                <div class="font-bold text-black text-xl">Total Penduduk</div>
                <div class="text-xl font-normal text-[#40916C] mb-2">5,102<span class="text-black"> jiwa</span></div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/jumlah_laki.png') }}" alt="Icon Penduduk" class="w-16 h-16 mx-auto mb-4">
                <div class="font-bold text-black text-xl">Laki-laki</div>
                <div class="text-xl font-normal text-[#40916C] mb-2">2,590<span class="text-black"> jiwa</span></div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/jumlah_perempuan.png') }}" alt="Icon Penduduk"
                    class="w-16 h-16 mx-auto mb-4">
                <div class="font-bold text-black text-xl">Perempuan</div>
                <div class="text-xl font-normal text-[#40916C] mb-2">2,512<span class="text-black"> jiwa</span></div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/kepala_keluarga.png') }}" alt="Icon Penduduk" class="w-16 h-16 mx-auto mb-4">
                <div class="font-bold text-black text-xl">Kepala Keluarga</div>
                <div class="text-xl font-normal text-[#40916C] mb-2">468<span class="text-black"> jiwa</span></div>
            </div>
        </div>
    </div>
</section>


{{-- sejarah section --}}
<section id="sejarah">
    <div class="container mx-auto pb-20 px-20">
        <h2 class="text-4xl font-bold text-center mb-10 text-[#2D6A4F]">Sejarah Desa Pabuaran</h2>
        <p class="text-lg text-left mb-5">
            Dari sisi sejarah, Pabuaran pada "Masa Nasionalisme" pada awal abad ke-20 di Kabupaten Subang, Setelah
            Kongres Sarekat Islam di bandung tahun 1916 di Subang berdiri cabang organisasi Sarekat Islam di Desa
            Pringkasap bersamaan dengan di daerah Desa Sukamandijaya (Ciasem).

        </p>
        <p class="text-lg text-left mb-5">
            Desember 1947: Sebelum terjadi peristiwa pembantaian di Rawagede Kapten Lukas Sutaryo melawan Belanda di
            wilayah Pabuaran. 10 Juni 1948: Pertempuran sengit terjadi di Warungdoyong, Desa Pring­kasap, Kecamatan
            Pabuaran antara pasukan Belanda dengan Pejuang. 26 Agustus 1948: Penunjukan Bupati kedua Kabupaten Karawang
            Timur (saat Kab.Subang dan Kab. Purwakarta belum terbentuk) yang rapatnya dilaksanakn di Desa Siluman.
            Agustus 1948: Di Stasiun Tanjungrasa pejuang berhasil merampas kereta api, Kemudian lokomotif yang telah
            dipasangi bendera merah putih tersebut dijalankan tanpa manusia dan berhasil sampai ke stasiun Cikampek,
            Pasukan Belanda di Cikampek menjadi kalang kabut. Bulan September 1948: Belanda menyerang Pabuaran dari
            semua arah dengan mengerahkan pasukan dari darat dan udara. Sejarah mencatat, masyarakat Pabuaran bersama
            Tentara berjuang bahu membahu mempertahankan kemedekaan NKRI.
        </p>
    </div>
</section>

{{-- visi misi section --}}
<section id="visi-misi" class="bg-[#0A5126] py-20 px-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-white">
            <div>
                <h3 class="text-4xl text-center font-bold mb-5">Visi</h3>
                <p class="text-lg">
                    Mewujudkan Desa Pabuaran yang Sejahtera, Mandiri, Aman, Cerdas, Beriman & Taqwa serta Bermartabat.
                </p>
            </div>
            <div>
                <h3 class="text-4xl text-center font-bold mb-5">Misi</h3>
                <ul class="text-lg list-disc pl-5 space-y-2">
                    <li>Mewujudkan Pemerintahan Desa Pabuaran yang transparan dan tertib administrasi.</li>
                    <li>Meningkatkan pelayanan pemerintah desa yang prima, berkualitas dan demokrasi.</li>
                    <li>Terwujudnya masyarakat yang aman dan nyaman.</li>
                    <li>Terwujudnya lingkungan desa Pabuaran yang bersih.</li>
                    <li>Meningkatkan pembangunan ekonomi dan pertanian yang berbasis potensi lokal.</li>
                    <li>Meningkatkan kualitas infrastruktur wilayah.</li>
                    <li>Terwujudnya masyarakat yang agamis dan Bermartabat.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- demografi section --}}
<section id="demografi" class="py-20 px-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <div>
                <img class="w-85 md:order-last mx-auto" src="{{ asset('images/demografi_pabuaran.jpg') }}"
                    alt="Demografi Desa">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-left mb-10 text-[#2D6A4F]">Demografi Desa Pabuaran</h2>
                <p class="text-lg text-justify mb-5">
                    Secara goegrafis kecamatan Pabuaran
                    terletak di bagian utara Kabupaten Subang.
                    Dengan Luas wilayah kecamatan Pabuaran adalah 65,43km2 yang-batas batas wilayahnya sebagai berikut:
                </p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Selatan: berbatasan dengan
                        Kec. Cipeundeuy.
                    </li>
                    <li>Utara: berbatasan dengan
                        Kec. Patokbeusi.
                    </li>
                    <li>Timur: berbatasan dengan
                        Kec. Purwadadi.
                    </li>
                    <li>Barat: berbatasan dengan
                        Kab. Purwakarta</li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- potensi section --}}
<section id="potensi" class="py-20">
    <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-4xl font-bold text-[#2D6A4F] text-center mb-10">Potensi Desa</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Pertanian -->
            <div class="bg-white p-5 rounded-lg shadow-lg text-center">
                <img src="{{ asset('images/pertanian.png') }}" alt="Potensi Pertanian"
                    class="w-full h-64 object-cover rounded-md mb-5">
                <h3 class="text-2xl font-semibold mb-3 text-[#0D6630]">Pertanian</h3>
                <p class="text-base text-gray-700 leading-relaxed">
                    Desa Pabuaran memiliki lahan pertanian yang subur, dengan berbagai komoditas unggulan
                    seperti padi, sayuran, dan buah-buahan.
                </p>
            </div>

            <!-- Perikanan -->
            <div class="bg-white p-5 rounded-lg shadow-lg text-center">
                <img src="{{ asset('images/perikanan.png') }}" alt="Potensi Perikanan"
                    class="w-full h-64 object-cover rounded-md mb-5">
                <h3 class="text-2xl font-semibold mb-3 text-[#0D6630]">Perikanan</h3>
                <p class="text-base text-gray-700 leading-relaxed">
                    Potensi perikanan di desa ini sangat menjanjikan, dengan banyaknya kolam ikan
                    dan sungai yang melintasi wilayah desa.
                </p>
            </div>
        </div>
    </div>
</section>




{{-- logo section  --}}
<!-- <section id="logo" class="py-20 px-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-30 text-[#2D6A4F]">Makna Logo Desa</h2>
        <div class="flex justify-center">
            <img class="w-full md:w-3/4 h-auto" src="{{ asset('images/logo_makna.png') }}" alt="Logo Desa Pabuaran">
        </div>
        {{-- <p class="text-lg text-center mt-5">
                Logo Desa Pabuaran melambangkan identitas dan semangat masyarakat desa dalam menjaga tradisi dan
                membangun masa depan yang lebih baik.
            </p> --}}
    </div>
</section> -->

{{-- struktur pemerintahan --}}
<section id="struktur" class="py-20">
    <h2 class="text-4xl font-bold text-center mb-5 mt-30 text-[#2D6A4F]">Struktur Pemerintahan Desa</h2>
    <div class="svg-container">
        <svg class="svg-content" viewBox="0 0 1000 700" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid meet">
            <!-- Definitions for clipping -->
            <defs>
                <clipPath id="circleClip1">
                    <circle cx="275" cy="30" r="25" />
                </clipPath>
                <clipPath id="circleClip2">
                    <circle cx="675" cy="185" r="25" />
                </clipPath>
                <clipPath id="circleClip3">
                    <circle cx="105" cy="185" r="25" />
                </clipPath>
                <clipPath id="circleClip4">
                    <circle cx="375" cy="345" r="20" />
                </clipPath>
                <clipPath id="circleClip5">
                    <circle cx="575" cy="345" r="20" />
                </clipPath>
                <clipPath id="circleClip6">
                    <circle cx="775" cy="345" r="20" />
                </clipPath>
                <clipPath id="circleClip7">
                    <circle cx="470" cy="475" r="20" />
                </clipPath>
                <clipPath id="circleClip8">
                    <circle cx="675" cy="475" r="20" />
                </clipPath>
                <clipPath id="circleClip9">
                    <circle cx="95" cy="625" r="20" />
                </clipPath>
                <clipPath id="circleClip10">
                    <circle cx="275" cy="625" r="20" />
                </clipPath>
                <clipPath id="circleClip11">
                    <circle cx="465" cy="625" r="20" />
                </clipPath>
                <clipPath id="circleClip12">
                    <circle cx="885" cy="475" r="20" />
                </clipPath>

                <!-- Instagram Icon -->
                <symbol id="instagram-icon" viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </symbol>

                <!-- Facebook Icon -->
                <symbol id="facebook-icon" viewBox="0 0 24 24">
                    <path
                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                </symbol>

                <!-- Twitter/X Icon -->
                <symbol id="twitter-icon" viewBox="0 0 24 24">
                    <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </symbol>

                <filter id="shadow" x="-50%" y="-50%" width="200%" height="200%">
                    <feDropShadow dx="2" dy="2" stdDeviation="3" flood-color="#000000" flood-opacity="0.2" />
                </filter>
            </defs>

            <!-- Kepala Desa -->
            <rect x="180" y="30" width="190" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="250" y="5" width="50" height="50"
                clip-path="url(#circleClip1)" />
            {{-- <circle cx="345" cy="45" r="25" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="275" y="70" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Ristoyo</text>
            <text x="275" y="85" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kepala Desa
                Pabuaran</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="265" y="95" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- BPD Box -->
            <rect x="30" y="45" width="120" height="45" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <text x="90" y="73" font-family="Arial" font-size="14" font-weight="bold" text-anchor="middle"
                fill="#4b5563">BPD</text>

            <!-- LPM Box -->
            <rect x="600" y="45" width="120" height="45" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <text x="660" y="73" font-family="Arial" font-size="14" font-weight="bold" text-anchor="middle"
                fill="#4b5563">LPM</text>

            {{-- garis bpd dan lpm --}}
            <line x1="150" y1="73" x2="180" y2="73" stroke="#d1d5db" stroke-width="1" />
            <line x1="370" y1="73" x2="600" y2="73" stroke="#d1d5db" stroke-width="1" />

            {{-- garis vertikal kasie --}}
            <line x1="105" y1="150" x2="105" y2="200" stroke="#d1d5db" stroke-width="1" />
            <line x1="675" y1="150" x2="675" y2="200" stroke="#d1d5db" stroke-width="1" />

            <!-- Garis dari Kepala Desa ke bawah -->
            <line x1="275" y1="120" x2="275" y2="240" stroke="#d1d5db" stroke-width="1" />

            <!-- Garis Horizontal dari Kepala Desa ke Kasie -->
            <line x1="105" y1="150" x2="675" y2="150" stroke="#d1d5db" stroke-width="1" />
            <line x1="675" y1="150" x2="675" y2="150" stroke="#d1d5db" stroke-width="1" />

            <!-- Garis Vertikal ke Sekretaris -->
            {{-- <line x1="720" y1="140" x2="720" y2="200" stroke="#d1d5db" stroke-width="1" /> --}}



            <!-- Garis ke Tia Fellya -->
            <!-- Dari garis tengah Kepala Desa ke bawah (sudah ada sampai y=240, bisa stop di 150) -->
            <line x1="275" y1="120" x2="275" y2="150" stroke="#d1d5db" stroke-width="1" />

            <!-- Garis horizontal dari tengah Kepala Desa ke titik tengah Tia Fellya -->
            <line x1="275" y1="150" x2="410" y2="150" stroke="#d1d5db" stroke-width="1" />

            <!-- Garis vertikal turun ke kotak Tia Fellya -->
            <line x1="410" y1="150" x2="410" y2="190" stroke="#d1d5db" stroke-width="1" />



            <!-- Sekretaris Desa -->
            <rect x="565" y="190" width="220" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="650" y="160" width="50" height="50"
                clip-path="url(#circleClip2)" />
            {{-- <circle cx="675" cy="200" r="25" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="675" y="230" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Gunawan Somantri</text>
            <text x="675" y="245" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Sekretaris
                Desa</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="665" y="255" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- Pelaksana Teknis -->
            <rect x="2" y="190" width="207" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="80" y="160" width="50" height="50"
                clip-path="url(#circleClip3)" />
            {{-- <circle cx="105" cy="200" r="25" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="105" y="230" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Erry Anisa</text>
            <text x="105" y="245" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">
                Kepala Seksi Kesejahteraan dan Pelayanan
            </text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="95" y="255" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- Pelaksana Teknis 2 -->
            <rect x="335" y="190" width="150" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />

            <!-- Avatar bundar -->
            <defs>
                <clipPath id="circleClipKepsekpem">
                    <circle cx="410" cy="190" r="25" />
                </clipPath>
            </defs>
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="385" y="165" width="50" height="50"
                clip-path="url(#circleClipKepsekpem)" />

            <!-- Nama & Jabatan -->
            <text x="410" y="230" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">
                Tia Fellya
            </text>
            <text x="410" y="245" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">
                Kepala Seksi Pemerintahan
            </text>

            <!-- Sosial Media -->
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="400" y="255" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>



            <!-- Garis dari Sekretaris ke KAUR -->
            <line x1="675" y1="280" x2="675" y2="320" stroke="#d1d5db" stroke-width="1" />

            <!-- Garis Horizontal untuk KAUR -->
            <line x1="575" y1="320" x2="775" y2="320" stroke="#d1d5db" stroke-width="1" />

            <!-- Garis Vertikal ke masing-masing KAUR -->
            <!-- <line x1="375" y1="320" x2="375" y2="350" stroke="#d1d5db" stroke-width="1" /> -->
            <line x1="575" y1="320" x2="575" y2="350" stroke="#d1d5db" stroke-width="1" />
            <line x1="775" y1="320" x2="775" y2="350" stroke="#d1d5db" stroke-width="1" />

            <!-- KAUR Pemerintahan -->
            <!-- <rect x="300" y="350" width="140" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="355" y="325" width="40" height="40"
                clip-path="url(#circleClip4)" />
            {{-- <circle cx="400" cy="350" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="370" y="385" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Maulana Yusuf</text>
            <text x="370" y="400" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kaur
                Pemerintahan</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="370" y="410" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a> -->

            <!-- KAUR Keuangan -->
            <rect x="500" y="350" width="150" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="555" y="325" width="40" height="40"
                clip-path="url(#circleClip5)" />
            {{-- <circle cx="635" cy="350" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="575" y="385" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Sania Wulandari</text>
            <text x="575" y="400" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kaur
                Umum Perencanaan</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="565" y="410" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- KAUR Umum -->
            <rect x="840" y="350" width="150" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                transform="translate(-140, 0)" filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="755" y="325" width="40" height="40"
                clip-path="url(#circleClip6)" />
            {{-- <circle cx="850" cy="350" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="775" y="385" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Aksanatun</text>
            <text x="775" y="400" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kaur
                Keuangan</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="770" y="410" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- Garis Horizontal dari Kaur ke Kaur -->
            {{-- <line x1="565" y1="450" x2="790" y2="450" stroke="#d1d5db" stroke-width="1" /> --}}

            <!-- Garis Vertikal ke masing-masing KAUR level 2 -->
            <!-- <line x1="470" y1="320" x2="470" y2="480" stroke="#d1d5db" stroke-width="1" />
            <line x1="675" y1="320" x2="675" y2="480" stroke="#d1d5db" stroke-width="1" />
            <line x1="885" y1="320" x2="885" y2="480" stroke="#d1d5db" stroke-width="1" /> -->

            <!-- KAUR Kesra -->
            <!-- <rect x="400" y="480" width="140" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="450" y="455" width="40" height="40"
                clip-path="url(#circleClip7)" />
            {{-- <circle cx="520" cy="480" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="470" y="515" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Islah</text>
            <text x="470" y="530" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kaur
                Kesra</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="460" y="540" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a> -->

            <!-- KAUR Pembangunan -->
            <!-- <rect x="690" y="480" width="140" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                transform="translate(-85, 0)" filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="655" y="455" width="40" height="40"
                clip-path="url(#circleClip8)" />
            {{-- <circle cx="750" cy="480" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="675" y="515" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Wasna</text>
            <text x="675" y="530" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kaur
                Pembangunan</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="670" y="540" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a> -->

            <!-- Kasi Pelayanan -->
            <!-- <rect x="900" y="480" width="140" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                transform="translate(-85, 0)" filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="865" y="455" width="40" height="40"
                clip-path="url(#circleClip12)" />
            {{-- <circle cx="750" cy="480" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="885" y="515" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Kasan Kariri</text>
            <text x="885" y="530" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kasi
                Pelayanan</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="880" y="540" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a> -->

            <!-- Garis dari Kepala Desa ke Dusun -->
            <line x1="275" y1="240" x2="275" y2="580" stroke="#d1d5db" stroke-width="1" />

            <!-- Garis Horizontal untuk 6 Dusun -->
            <line x1="95" y1="580" x2="795" y2="580" stroke="#d1d5db" stroke-width="1" />

            <!-- Garis Vertikal ke masing-masing Kepala Dusun -->
            <line x1="95" y1="580" x2="95" y2="630" stroke="#d1d5db" stroke-width="1" />
            <line x1="235" y1="580" x2="235" y2="630" stroke="#d1d5db" stroke-width="1" />
            <line x1="375" y1="580" x2="375" y2="630" stroke="#d1d5db" stroke-width="1" />
            <line x1="515" y1="580" x2="515" y2="630" stroke="#d1d5db" stroke-width="1" />
            <line x1="655" y1="580" x2="655" y2="630" stroke="#d1d5db" stroke-width="1" />
            <line x1="795" y1="580" x2="795" y2="630" stroke="#d1d5db" stroke-width="1" />


            <!-- Kepala Dusun 1 -->
            <rect x="30" y="630" width="130" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="75" y="605" width="40" height="40"
                clip-path="url(#circleClip9)" />
            {{-- <circle cx="55" cy="590" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="95" y="665" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Sumandi</text>
            <text x="95" y="680" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kepala
                Dusun</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="85" y="690" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- Kepala Dusun 2 -->
            <rect x="170" y="630" width="130" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <defs>
                <mask id="maskAvatarDusun2">
                    <circle cx="235" cy="625" r="20" fill="white" />
                </mask>
            </defs>
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="215" y="605" width="40" height="40"
                mask="url(#maskAvatarDusun2)" />
            {{-- <circle cx="205" cy="590" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="235" y="665" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Abeng Wasna</text>
            <text x="235" y="680" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kepala
                Dusun</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="225" y="690" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- Kepala Dusun 3 -->
            <rect x="310" y="630" width="130" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <defs>
                <mask id="maskAvatarDusun3">
                    <circle cx="375" cy="625" r="20" fill="white" />
                </mask>
            </defs>
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="355" y="605" width="40" height="40"
                mask="url(#maskAvatarDusun3)" />
            {{-- <circle cx="355" cy="590" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="375" y="665" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Supiandi</text>
            <text x="375" y="680" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kepala
                Dusun</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="365" y="690" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- Kepala Dusun 4 -->
            <rect x="450" y="630" width="130" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <defs>
                <mask id="maskAvatarDusun4">
                    <circle cx="515" cy="625" r="20" fill="white" />
                </mask>
            </defs>
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="495" y="605" width="40" height="40"
                mask="url(#maskAvatarDusun4)" />
            {{-- <circle cx="355" cy="590" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="515" y="665" font-family=" Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">AA Sunardi</text>
            <text x="515" y="680" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kepala
                Dusun</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="505" y="690" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- Kepala Dusun 5 -->
            <rect x="590" y="630" width="130" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <defs>
                <mask id="maskAvatarDusun5">
                    <circle cx="655" cy="625" r="20" fill="white" />
                </mask>
            </defs>
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="635" y="605" width="40" height="40"
                mask="url(#maskAvatarDusun5)" />
            {{-- <circle cx="355" cy="590" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="655" y="665" font-family=" Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">AA Sunardi</text>
            <text x="655" y="680" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kepala
                Dusun</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="645" y="690" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>

            <!-- Kepala Dusun 6 -->
            <rect x="730" y="630" width="130" height="90" fill="white" stroke="#d1d5db" stroke-width="2" rx="15" ry="15"
                filter="url(#shadow)" />
            <defs>
                <mask id="maskAvatarDusun6">
                    <circle cx="795" cy="625" r="20" fill="white" />
                </mask>
            </defs>
            <image href="{{ asset('images/icons/avatar-struktur-01.png') }}" x="775" y="605" width="40" height="40"
                mask="url(#maskAvatarDusun6)" />
            {{-- <circle cx="355" cy="590" r="20" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1" /> --}}
            <text x="795" y="665" font-family="Arial" font-size="12" font-weight="bold" text-anchor="middle"
                fill="#4b5563">Endang Sartono</text>
            <text x="795" y="680" font-family="Arial" font-size="10" text-anchor="middle" fill="#6b7280">Kepala
                Dusun</text>
            <a href="https://www.instagram.com/thdi.24/" target="_blank">
                <use href="#instagram-icon" x="785" y="690" width="17" height="17" fill="#E1306C" class="social-icon" />
            </a>
        </svg>
    </div>
</section>

@endsection