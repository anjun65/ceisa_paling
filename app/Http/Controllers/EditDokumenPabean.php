<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditDokumenPabean extends Controller
{
    public function index($nomor_aju_pabean)
    {
        return view('edit-dokumen-pabean', [
            'nomor_aju_pabean' => $nomor_aju_pabean,
        ]);
    }
}
