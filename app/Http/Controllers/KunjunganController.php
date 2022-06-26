<?php

namespace App\Http\Controllers;

use App\Models\{Kunjungan, Dokter, Poli};

class KunjunganController extends Controller
{
    public function index()
    {
        return view('kunjungan.index', [
            'kunjungans' => Kunjungan::get()
        ]);
    }

    public function create()
    {
        return view('kunjungan.create', [
            'polis' => Poli::get(),
            'dokters' => Dokter::get()
        ]);
    }

    public function store()
    {
        $attr = request()->all();
        dd($attr);
    }
}
