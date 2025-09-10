<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $structures = StrukturOrganisasi::with('children')->whereNull('parent_id')->get();
        return view('struktur', compact('structures'));

    }
}
