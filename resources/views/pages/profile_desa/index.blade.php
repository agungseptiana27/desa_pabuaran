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
                 @if ($kepalaDesa)
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
                                    src="{{ asset('storage/' . $kepalaDesa->photo) }}" alt="{{ $kepalaDesa->name }}">
                            </div>
                            <!-- Floating info card -->
                            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                                <div
                                    class="bg-white rounded-2xl shadow-xl px-4 py-2 sm:px-6 sm:py-4 text-center min-w-max">
                                    <h3 class="text-gray-800 font-bold text-base sm:text-lg">{{ $kepalaDesa->name }}
                                    </h3>
                                    <p class="text-emerald-700 font-semibold text-xs sm:text-sm">{{ $kepalaDesa->position }}</p>
                                    <!-- <p class="text-gray-500 text-xs">Periode 2025-2030</p> -->
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
                 @endif
                
            </div>
        </div>
    </div>
</section>

{{-- Grafik Statistik desa --}}
<section id="grafik-statistik" class="bg-white pt-10 px-20">
    <div class="container mx-auto px-4">
        {{-- <h2 class="text-4xl font-bold text-center mb-10 text-white">Grafik Statistik Desa Pabuaran</h2> --}}
        <!-- Statistik Utama -->
        <div class="flex flex-wrap justify-between gap-4 mb-12">
            <div class="flex-1 min-w-[180px] bg-white p-4 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/jumlah_penduduk.png') }}" alt="Icon Penduduk" class="w-12 h-12 mx-auto mb-2">
                <div class="font-bold text-black text-lg">Total Penduduk</div>
                <div class="text-lg font-normal text-[#40916C]">{{ number_format($kependudukan->total ?? 0) }}<span class="text-black"> jiwa</span></div>
            </div>

            <div class="flex-1 min-w-[180px] bg-white p-4 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/jumlah_laki.png') }}" alt="Icon Laki-laki" class="w-12 h-12 mx-auto mb-2">
                <div class="font-bold text-black text-lg">Laki-laki</div>
                <div class="text-lg font-normal text-[#40916C]">{{ number_format($kependudukan->male ?? 0) }}<span class="text-black"> jiwa</span></div>
            </div>

            <div class="flex-1 min-w-[180px] bg-white p-4 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/jumlah_perempuan.png') }}" alt="Icon Perempuan" class="w-12 h-12 mx-auto mb-2">
                <div class="font-bold text-black text-lg">Perempuan</div>
                <div class="text-lg font-normal text-[#40916C]">{{ number_format($kependudukan->female ?? 0) }}<span class="text-black"> jiwa</span></div>
            </div>

            <div class="flex-1 min-w-[180px] bg-white p-4 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/kepala_keluarga.png') }}" alt="Icon KK" class="w-12 h-12 mx-auto mb-2">
                <div class="font-bold text-black text-lg">Kepala Keluarga</div>
                <div class="text-lg font-normal text-[#40916C]">{{ number_format($kependudukan->family_head ?? 0) }}<span class="text-black"> jiwa</span></div>
            </div>

            <div class="flex-1 min-w-[180px] bg-white p-4 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/kematian.png') }}" alt="Icon Kematian" class="w-12 h-12 mx-auto mb-2">
                <div class="font-bold text-black text-lg">Kematian</div>
                <div class="text-lg font-normal text-[#40916C]">{{ number_format($kependudukan->death ?? 0) }}<span class="text-black"> jiwa</span></div>
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
                    {{ $visiMisi->visi ?? 'Belum ada data visi' }}
                </p>
            </div>
            <div>
                <h3 class="text-4xl text-center font-bold mb-5">Misi</h3>
                <ul class="text-lg list-disc pl-5 space-y-2">
                    @if ($visiMisi && is_array($visiMisi->misi))
                        @foreach ($visiMisi->misi as $misi)
                            <li>{{ $misi['poin'] }}</li>
                        @endforeach
                    @else
                        <li>Belum ada data misi</li>
                    @endif
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
<section id="struktur">
    <h2 class="text-4xl font-bold text-center mb-5 mt-30 text-[#2D6A4F]">Struktur Pemerintahan Desa</h2>
        @if ($struktur)
            <img src="{{ asset('storage/' . $struktur->image) }}"
                 alt="Struktur Organisasi"
                 class="mx-auto max-w-full h-auto shadow-lg rounded-lg">
        @else
            <p class="text-gray-500">Belum ada data struktur organisasi.</p>
        @endif
</section>


@endsection