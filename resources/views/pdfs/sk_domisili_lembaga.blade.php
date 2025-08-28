<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 30px;
        font-size: 12px;
        line-height: 1.3;
    }

    .kop-surat {
        text-align: center;
        border-bottom: 3px solid black;
        padding-bottom: 8px;
        margin-bottom: 5px;
        position: relative;
    }

    .kop-logo {
        position: absolute;
        left: 10px;
        top: 0px;
    }

    .kop-logo-text img {
        max-width: 80px;
        height: auto;
    }

    .kop-title {
        font-size: 14px;
        font-weight: bold;
        margin: 0;
        margin-bottom: 15px;
        line-height: 0.6;
    }

    .kop-address {
        font-size: 10px;
        margin: 3px 0;
    }

    .header {
        text-align: center;
        margin-bottom: 10px;
    }

    .title {
        font-size: 14px;
        font-weight: bold;
        text-decoration: underline;
        text-align: center;
        margin: 10px 0 2px 0;
        text-transform: uppercase;
    }

    .nomor {
        text-align: center;
        margin-bottom: 20px;
        font-size: 12px;
    }

    .content {
        text-align: justify;
    }

    .identity {
        margin: 10px 0;
    }

    .identity-row {
        margin: 3px 0;
    }

    .identity-label {
        display: inline-block;
        width: 130px;
    }

    .identity-colon {
        display: inline-block;
        width: 10px;
    }

    .identity-value {
        display: inline-block;
    }

    .bold {
        font-weight: bold;
        text-transform: uppercase;
    }

    .signature {
        margin-top: 20px;
        text-align: left;
        width: 40%;
        float: right;
    }

    .signature-name {
        font-weight: bold;
        margin-top: 70px;
        text-decoration: underline;
    }

    .clear {
        clear: both;
    }

    p {
        margin: 5px 0;
    }

    .closing {
        margin: 5px 0;
        text-indent: 30px;
        text-align: justify;
    }
    </style>
</head>

<body>
    <div class="kop-surat">
        <div class="kop-logo">
            <div class="kop-logo-text">
                <img src="{{ $logoBase64 }}" alt="Logo Desa">
            </div>
        </div>
        <p class="kop-title">PEMERINTAH KABUPATEN SUBANG</p>
        <p class="kop-title">KECAMATAN PABUARAN</p>
        <p class="kop-title">KANTOR DESA PABUARAN</p>
        <p class="kop-address">Jl. Raya Pabuaran No. 270 Kecamatan Pabuaran Kabupaten Subang Kode Pos : 45251
        </p>
        <p class="kop-address">Email : pemdespabuaran@gmail.com Home Page : www.pabuaran.com</p>
    </div>

    <div class="header">
        <div class="title">{{ $surat->subSuratType->suratType->nama_surat }}</div>
        <div class="nomor">{{ $surat->nomor_surat }}</div>
    </div>

    <div class="content">
        <p>Yang bertandatangan dibawah ini Kepala Desa Pabuaran Kecamatan Pabuaran Kabupaten Subang :</p>

        <div class="identity">
            <div class="identity-row">
                <div class="identity-label">Nama</div>
                <div class="identity-colon">:</div>
                <div class="identity-value"><strong>Ristoyo</strong></div>
            </div>
            <div class="identity-row">
                <div class="identity-label">Jabatan</div>
                <div class="identity-colon">:</div>
                <div class="identity-value">Kepala Desa Pabuaran</div>
            </div>
        </div>

        <p>Menerangkan dengan sesungguhnya :</p>

        <div class="identity">
            <div class="identity-row">
                <div class="identity-label">Nama</div>
                <div class="identity-colon">:</div>
                <div class="identity-value bold">{{ $surat->data_pemohon['nama_lengkap_pemohon'] }}</div>
            </div>
            <div class="identity-row">
                <div class="identity-label">NIK</div>
                <div class="identity-colon">:</div>
                <div class="identity-value">{{ $surat->data_pemohon['nik_pemohon'] }}</div>
            </div>
            <div class="identity-row">
                <div class="identity-label">Tempat/ tanggal lahir</div>
                <div class="identity-colon">:</div>
                <div class="identity-value">
                    {{ ucfirst($surat->data_pemohon['tempat_lahir_pemohon']) . '/' . $surat->data_pemohon['tgl_lahir_pemohon'] }}
                </div>
            </div>
            <div class="identity-row">
                <div class="identity-label">Jenis kelamin</div>
                <div class="identity-colon">:</div>
                <div class="identity-value">
                    {{ $surat->data_pemohon['jenis_kelamin_pemohon'] == 'L' ? 'Laki-laki' : ($surat->data_pemohon['jenis_kelamin_pemohon'] == 'P' ? 'Perempuan' : '') }}
                </div>
            </div>
            <div class="identity-row">
                <div class="identity-label">Pekerjaan</div>
                <div class="identity-colon">:</div>
                <div class="identity-value">{{ ucfirst($surat->data_pemohon['pekerjaan_pemohon']) }}</div>
            </div>
            <div class="identity-row">
                <div class="identity-label">Alamat</div>
                <div class="identity-colon">:</div>
                <div class="identity-value">{{ $surat->data_pemohon['alamat_pemohon'] }}</div>
            </div>
            <div class="identity-row">
                <div class="identity-label">Keperluan</div>
                <div class="identity-colon">:</div>
                <div class="identity-value">{{ $surat->data_pemohon['keperluan_pemohon'] }}</div>
            </div>
        </div>

        <p>Bahwa benar yang bersangkutan telah meninggal dunia pada:</p>

        <table class="identity my-4 text-xs" style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 150px;">Nama</td>
                <td style="width: 20px;">:</td>
                <td>{{ $surat->data_surat['nama_alm'] ?? '-' }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">Hari / Tanggal</td>
                <td style="width: 20px;">:</td>
                <td>{{ $surat->data_surat['tanggal_meninggal'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Tempat Meninggal </td>
                <td>:</td>
                <td>{{ $surat->data_surat['tempat_meninggal'] }}</td>
            </tr>
            <tr>
                <td>Sebab Meninggal</td>
                <td>:</td>
                <td>{{ $surat->data_surat['sebab_meninggal'] }}</td>
            </tr>
        </table>
    </div>

    <p class="closing">Almarhum/Almarhumah tersebut adalah benar warga Desa Pabuaran dan semasa hidupnya berdomisili di alamat sebagaimana tercantum di atas. Adapun hubungan pelapor dengan Almarhum/Almarhumah adalah {{ $surat->data_surat['hubungan_pelapor'] }}. Surat keterangan ini dibuat untuk dipergunakan sebagai kelengkapan administrasi kependudukan maupun keperluan lain yang sah, serta agar dapat digunakan sebagaimana mestinya. Demikian surat keterangan ini dibuat dengan sebenar-benarnya. Apabila di kemudian hari terdapat kekeliruan, maka akan dilakukan perbaikan sebagaimana mestinya.</p>

    <div class="signature">
        <p>Pabuaran, {{ \Carbon\Carbon::parse($surat->tgl_surat)->locale('id')->isoFormat('D MMMM YYYY') }}
            <br>
            Kepala Desa Pabuaran,
        </p>
        <div class="signature-name">Ristoyo</div>
    </div>
    <div class="clear"></div>
    </div>
</body>

</html>