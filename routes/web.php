<?php

use App\Http\Controllers\{DiagnosaController, DokterController, HomeController, KunjunganController, ObatController, PasienController, PoliController};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('obat')->middleware(['auth'])->group(function () {
    Route::get('/', [ObatController::class, 'index'])->name('obat');
    Route::get('/create', [ObatController::class, 'create'])->name('obat.create');
    Route::post('/store', [ObatController::class, 'store'])->name('obat.store');
    Route::get('/{obat}/update', [ObatController::class, 'update'])->name('obat.update');
    Route::patch('/{obat}/edit', [ObatController::class, 'edit'])->name('obat.edit');
    Route::delete('/{obat}/destroy', [ObatController::class, 'destroy'])->name('obat.destroy');
});


Route::prefix('pasien')->middleware('auth')->group(function () {
    Route::get('/get-pasien/{pasien:nama_pasien}', [PasienController::class, 'getPasien']);
    Route::get('/', [PasienController::class, 'index'])->name('pasien');
    Route::get('/create', [PasienController::class, 'create'])->name('pasien.create');
    Route::post('/store', [PasienController::class, 'store'])->name('pasien.store');
    Route::get('/{pasien}/update', [PasienController::class, 'update'])->name('pasien.update');
    Route::patch('/{pasien}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::delete('/{pasien}/destroy', [PasienController::class, 'destroy'])->name('pasien.destroy');
});

Route::prefix('poli')->middleware('auth')->group(function () {
    Route::get('/', [PoliController::class, 'index'])->name('poli');
    Route::get('/create', [PoliController::class, 'create'])->name('poli.create');
    Route::post('/store', [PoliController::class, 'store'])->name('poli.store');
    Route::get('/{poli}/update', [PoliController::class, 'update'])->name('poli.update');
    Route::patch('/{poli}/edit', [PoliController::class, 'edit'])->name('poli.edit');
    Route::delete('/{poli}/destroy', [PoliController::class, 'destroy'])->name('poli.destroy');
});

Route::prefix('dokter')->middleware('auth')->group(function () {
    Route::get('/get-dokter/{dokter:nama_dokter}', [DokterController::class, 'getDokter']);
    Route::get('/', [DokterController::class, 'index'])->name('dokter');
    Route::get('/create', [DokterController::class, 'create'])->name('dokter.create');
    Route::post('/store', [DokterController::class, 'store'])->name('dokter.store');
    Route::get('/{dokter}/update', [DokterController::class, 'update'])->name('dokter.update');
    Route::patch('/{dokter}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
    Route::delete('/{dokter}/destroy', [DokterController::class, 'destroy'])->name('dokter.destroy');
});

Route::prefix('diagnosa')->middleware(['auth'])->group(function () {
    Route::get('/', [DiagnosaController::class, 'index'])->name('diagnosa');
    Route::get('/create', [DiagnosaController::class, 'create'])->name('diagnosa.create');
    Route::post('/store', [DiagnosaController::class, 'store'])->name('diagnosa.store');
    Route::get('/{diagnosa}/update', [DiagnosaController::class, 'update'])->name('diagnosa.update');
    Route::patch('/{diagnosa}/edit', [DiagnosaController::class, 'edit'])->name('diagnosa.edit');
    Route::delete('/{diagnosa}/destroy', [DiagnosaController::class, 'destroy'])->name('diagnosa.destroy');
});


Route::prefix('kunjungan')->middleware('auth')->group(function () {
    Route::get('/', [KunjunganController::class, 'index'])->name('kunjungan');
    Route::get('/create/step1', [KunjunganController::class, 'createStep1'])->name('kunjungan.create.step1');
    Route::post('/step1', [KunjunganController::class, 'step1'])->name('kunjungan.step1');

    Route::get('/create/step2', [KunjunganController::class, 'createStep2'])->name('kunjungan.create.step2');
    Route::post('/step2', [KunjunganController::class, 'step2'])->name('kunjungan.step2');
});
