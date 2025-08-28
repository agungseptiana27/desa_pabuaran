{{-- resources/views/filament/resources/req-surat/templates/template_surat.blade.php --}}
<div class="p-4 bg-white rounded shadow dark:text-gray-800">
    <div class="kop-surat text-center border-b-2 border-gray-800 pb-2 mb-2 relative">
        <div class="kop-logo absolute left-6 top-2 ">
            {{-- Logo Desa --}}
            @if (isset($record->desa) && $record->desa->logo)
            <img src="{{ Storage::url($record->desa->logo) }}" alt="Logo Desa" class="w-24 h-24">
            @else
            <img src="{{ asset('images/logo/logo_desa_pabuaran.png') }}" alt="Logo Desa" class="w-24 h-24"
                style="width: 60px; ">
            @endif
        </div>
        <p class="kop-title text-sm font-bold m-0">PEMERINTAH KABUPATEN SUBANG</p>
        <p class="kop-title text-sm font-bold m-0">KECAMATAN PABUARAN</p>
        <p class="kop-title text-sm font-bold mb-2">KANTOR DESA PABUARAN</p>
        <p class="kop-address my-1" style="font-size: 10px">Jl. Raya Pabuaran No. 270 Kecamatan Pabuaran
            Kabupaten Subang Kode
            Pos : 45251</p>
        <p class="kop-address my-1" style="font-size: 10px">Email : pemdespabuaran@gmail.com Home Page :
            www.pabuaran.com</p>
    </div>

    <div class="line text-center mb-2">
        <hr class="border-x-15 border-gray-900 mb-2"
            style="margin: 0; height: 3px; width: 100%; border-top-width: 2px; border-color: #414141;">
    </div>

    <div class="header text-center mb-4">
        <div class="title text-xs font-bold underline mt-4 mb-1" style="text-transform: uppercase">
            {{ $record->subSuratType->suratType->nama_surat ?? 'SURAT KETERANGAN DOMISILI LEMBAGA' }}
        </div>
        <div class="nomor text-xs">{{ $record->nomor_surat ?? 'Nomor: -' }}</div>
    </div>

    <div class="content text-justify text-xs">
        <p class="mb-2">Yang bertandatangan dibawah ini Kepala Desa Pabuaran Kecamatan Pabuaran Kabupaten Subang
            :</p>

        <div class="identity my-4 text-xs">
            <div class="flex mb-1">
                <div class="w-32">Nama</div>
                <div class="w-4">:</div>
                <div class="font-bold">Ristoyo</div>
            </div>
            <div class="flex mb-1 text-xs">
                <div class="w-32">Jabatan</div>
                <div class="w-4">:</div>
                <div>Kepala Desa Pabuaran</div>
            </div>
        </div>

        <p class="mb-2">Menerangkan dengan sesungguhnya :</p>

        <div class="identity my-4 text-xs">
            <div class="flex mb-1">
                <div class="w-32">Nama</div>
                <div class="w-4">:</div>
                <div class="font-bold uppercase">{{ $record->data_pemohon['nama_lengkap_pemohon'] ?? '-' }}</div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">NIK</div>
                <div class="w-4">:</div>
                <div>{{ $record->data_pemohon['nik_pemohon'] ?? '-' }}</div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">Tempat/ tanggal lahir</div>
                <div class="w-4">:</div>
                <div>
                    @if (isset($record->data_pemohon['tempat_lahir_pemohon']) &&
                    isset($record->data_pemohon['tgl_lahir_pemohon']))
                    {{ ucfirst($record->data_pemohon['tempat_lahir_pemohon']) . '/' . $record->data_pemohon['tgl_lahir_pemohon'] }}
                    @else
                    -
                    @endif
                </div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">Jenis kelamin</div>
                <div class="w-4">:</div>
                <div>
                    @if (isset($record->data_pemohon['jenis_kelamin_pemohon']))
                    {{ $record->data_pemohon['jenis_kelamin_pemohon'] == 'L'
                            ? 'Laki-laki'
                            : ($record->data_pemohon['jenis_kelamin_pemohon'] == 'P'
                                ? 'Perempuan'
                                : '-') }}
                    @else
                    -
                    @endif
                </div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">Pekerjaan</div>
                <div class="w-4">:</div>
                <div>
                    {{ isset($record->data_pemohon['pekerjaan_pemohon']) ? ucfirst($record->data_pemohon['pekerjaan_pemohon']) : '-' }}
                </div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">Alamat</div>
                <div class="w-4">:</div>
                <div>{{ $record->data_pemohon['alamat_pemohon'] ?? '-' }}</div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">Keperluan</div>
                <div class="w-4">:</div>
                <div>{{ $record->data_pemohon['keperluan_pemohon'] ?? '-' }}</div>
            </div>
        </div>

        <p>Bahwa benar yang bersangkutan telah meninggal dunia pada:</p>

        <table class="identity my-4 text-xs" style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 150px;">Nama</td>
                <td style="width: 20px;">:</td>
                <td>{{ $record->data_surat['nama_alm'] ?? '-' }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">Hari / Tanggal</td>
                <td style="width: 20px;">:</td>
                <td>{{ $record->data_surat['tanggal_meninggal'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Tempat Meninggal </td>
                <td>:</td>
                <td>{{ $record->data_surat['tempat_meninggal'] }}</td>
            </tr>
            <tr>
                <td>Sebab Meninggal</td>
                <td>:</td>
                <td>{{ $record->data_surat['sebab_meninggal'] }}</td>
            </tr>
        </table>
    </div>

    <p class="closing">Almarhum/Almarhumah tersebut adalah benar warga Desa Pabuaran dan semasa hidupnya berdomisili di alamat sebagaimana tercantum di atas. Adapun hubungan pelapor dengan Almarhum/Almarhumah adalah {{ $record->data_surat['hubungan_pelapor'] }}. Surat keterangan ini dibuat untuk dipergunakan sebagai kelengkapan administrasi kependudukan maupun keperluan lain yang sah, serta agar dapat digunakan sebagaimana mestinya. Demikian surat keterangan ini dibuat dengan sebenar-benarnya. Apabila di kemudian hari terdapat kekeliruan, maka akan dilakukan perbaikan sebagaimana mestinya.</p>

    <div class="float-left w-2/5 text-right text-xs">
        <p class="mb-6">
            Pabuaran,
            @if (isset($record->tgl_surat))
            {{ \Carbon\Carbon::parse($record->tgl_surat)->locale('id')->isoFormat('D MMMM YYYY') }}
            @else
            {{ \Carbon\Carbon::now()->locale('id')->isoFormat('D MMMM YYYY') }}
            @endif
            <br>
            Kepala Desa Pabuaran,
        </p>
        <div class="font-bold underline" style="margin-top: 3.5rem">Ristoyo</div>
    </div>
    <div class="clear-both"></div>
</div>