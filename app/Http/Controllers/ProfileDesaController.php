<?php

namespace App\Http\Controllers;

use App\Models\Demografi;
use App\Models\FullStrukturOrganisasi;
use App\Models\Kependudukan;
use App\Models\PotensiDesa;
use App\Models\StrukturOrganisasi;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class ProfileDesaController extends Controller
{
    public function index() {

        $struktur = FullStrukturOrganisasi::latest()->first();

        $kepalaDesa = StrukturOrganisasi::where('position', 'LIKE', '%Kepala Desa Pabuaran%')->first();

        $kependudukan = Kependudukan::latest()->first();

        $visiMisi = VisiMisi::first();

        $demografi = Demografi::first();
        $potensiDesa = PotensiDesa::all();


        return view('pages.profile_desa.index', compact('struktur', 'kepalaDesa', 'kependudukan', 'visiMisi', 'demografi', 'potensiDesa'));
    }
}
