<?php

namespace App\Http\Controllers;

use App\Models\barang as ModelsBarang;
use Illuminate\Http\Request;

class barang extends Controller
{
    public function daftarBarang()
    {
        $data = [
            'barang' => ModelsBarang::all()
        ];
        return view('uts.daftarBarang', $data);
    }
    public function reviewBarang($id)
    {
        $reviewBarang = ModelsBarang::Find($id);
        return view('uts.reviewBarang', compact('reviewBarang'));
    }
}
