<?php

namespace App\Http\Controllers;

use App\Http\Requests\KunjunganStep1Request;
use App\Models\{Kunjungan, Dokter, Poli};

class KunjunganController extends Controller
{
    public function index()
    {
        return view('kunjungan.index', [
            'kunjungans' => Kunjungan::get()
        ]);
    }

    public function createStep1()
    {
        return view('kunjungan.create.step1', [
            'polis' => Poli::get(),
            'dokters' => Dokter::get()
        ]);
    }

    public function step1(KunjunganStep1Request $request)
    {
        $attr = $request->all();

        $attr['poli_id'] = request('poli');
        $attr['tb'] = 0;
        $attr['bb'] = 0;
        $attr['tekanan_darah'] = 0;
        $attr['biaya'] = 0;
        $attr['status'] = "Belum dilayani";

        $posted = auth()->user()->kunjungans()->create($attr);


        session()->flash('success', 'Data berhasil ditambah');
        return redirect('kunjungan/create/step2');
    }

    public function createStep2()
    {
        return view('kunjungan.create.step2');
    }
}
