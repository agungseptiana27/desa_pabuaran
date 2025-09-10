<?php

namespace App\Http\Controllers;

use App\Models\FullStrukturOrganisasi;
use Illuminate\Http\Request;

class FullStrukturOrganisasiController extends Controller
{
    public function index()
    {
        // ambil data terbaru, atau bisa pakai first() kalau hanya satu gambar
        $struktur = FullStrukturOrganisasi::latest()->first();

        return view('pages.profile_desa.index', compact('struktur'));
    }
}
