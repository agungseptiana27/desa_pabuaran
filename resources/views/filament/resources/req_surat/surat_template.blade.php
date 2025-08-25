```php
{{-- resources/views/filament/resources/req-surat/templates/template_surat.blade.php --}}
<div class="p-4 bg-white rounded shadow">
    <div class="kop-surat text-center border-b-2 border-gray-800 pb-2 mb-2 relative">
        <div class="kop-logo absolute left-4 top-0">
            @if (isset($record->desa) && $record->desa->logo)
            <img src="{{ Storage::url($record->desa->logo) }}" alt="Logo Desa" class="max-w-[80px]">
            @else
            <img src="{{ asset('images/logo/logo_desa_pabuaran.png') }}" alt="Logo Desa" class="max-w-[80px]">
            @endif
        </div>
        <p class="kop-title text-lg font-bold m-0 mb-2">PEMERINTAH KABUPATEN SUBANG</p>
        <p class="kop-title text-lg font-bold m-0">KECAMATAN Pabuaran</p>
        <p class="kop-title text-lg font-bold m-0">KANTOR DESA PABUARAN</p>
        <p class="kop-address text-xs my-1">Jl. Raya Pabuaran No. 270 Kecamatan Pabuaran Kabupaten Subang Kode
            Pos : 45251</p>
        <p class="kop-address text-xs my-1">Email : pemdespabuaran@gmail.com Home Page : www.pabuaran.com</p>
    </div>

    <div class="header text-center mb-4">
        <div class="title text-lg font-bold uppercase underline mt-4 mb-1">
            {{ $record->subSuratType->suratType->nama_surat ?? 'SURAT KETERANGAN' }}
        </div>
        <div class="nomor text-sm">{{ $record->nomor_surat ?? 'Nomor: -' }}</div>
    </div>

    <div class="content text-justify">
        <p class="mb-2">Yang bertandatangan dibawah ini Kepala Desa Pabuaran Kecamatan Pabuaran Kabupaten Subang
            :</p>

        <div class="identity my-4">
            <div class="flex mb-1">
                <div class="w-32">Nama</div>
                <div class="w-4">:</div>
                <div class="font-bold">Ristoyo</div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">Jabatan</div>
                <div class="w-4">:</div>
                <div>Kepala Desa Pabuaran</div>
            </div>
        </div>

        <p class="mb-2">Menerangkan dengan sesungguhnya :</p>

        <div class="identity my-4">
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
        </div>

        <p class="mb-2">Bahwa benar nama tersebut diatas merupakan warga Desa Pabuaran Kecamatan Pabuaran Kabupaten
            Subang yang sekarang bertempat tinggal dan atau berdomisili di :</p>

        <div class="identity my-4">
            <div class="flex mb-1">
                <div class="w-32">Blok</div>
                <div class="w-4">:</div>
                <div>{{ $record->data_surat['blok'] ?? '-' }}</div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">RT/RW</div>
                <div class="w-4">:</div>
                <div>
                    @if (isset($record->data_surat['rt']) && isset($record->data_surat['rw']))
                    {{ $record->data_surat['rt'] . '/' . $record->data_surat['rw'] }}
                    @else
                    -
                    @endif
                </div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">Desa</div>
                <div class="w-4">:</div>
                <div>{{ $record->data_surat['desa'] ?? '-' }}</div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">Kecamatan</div>
                <div class="w-4">:</div>
                <div>{{ $record->data_surat['kecamatan'] ?? '-' }}</div>
            </div>
            <div class="flex mb-1">
                <div class="w-32">Kabupaten</div>
                <div class="w-4">:</div>
                <div>{{ $record->data_surat['kabupaten'] ?? '-' }}</div>
            </div>
        </div>
    </div>

    <p class="pl-8 mb-4">Demikian surat keterangan ini dibuat dengan sebenarnya, untuk dapat digunakan sebagaimana
        mestinya oleh yang bersangkutan.</p>

    <div class="float-right w-2/5 text-left">
        <p>
            Pabuaran,
            @if (isset($record->tgl_surat))
            {{ \Carbon\Carbon::parse($record->tgl_surat)->locale('id')->isoFormat('D MMMM YYYY') }}
            @else
            {{ \Carbon\Carbon::now()->locale('id')->isoFormat('D MMMM YYYY') }}
            @endif
            <br>
            Kepala Desa Pabuaran,
        </p>
        <div class="mt-16 font-bold underline">Ristoyo</div>
    </div>
    <div class="clear-both"></div>
</div>
```