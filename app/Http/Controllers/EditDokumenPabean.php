<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderPabean;
use Illuminate\Support\Facades\Auth;

class EditDokumenPabean extends Controller
{
    public function index($nomor_aju_pabean)
    {   
        $items = HeaderPabean::where('nomor_aju_pabean', $nomor_aju_pabean)->first();

        return view('edit-dokumen-pabean', [
            'nomor_aju_pabean' => $nomor_aju_pabean,
            'items' => $items,
        ]);
        
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);;
        $data['users_id'] = Auth::id();
        
        $items = HeaderPabean::where('nomor_aju_pabean', $request->nomor_aju_pabean)->first();

        if (empty($items)){
            HeaderPabean::create($data);
        } else {
            $items->update($data);
        }

        return redirect()->back()->withSuccess('Berhasil Simpan');
    }
}
