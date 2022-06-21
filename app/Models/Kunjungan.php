<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $fillable = ['poli_id', 'pasien_id', 'dokter_id', 'user_id', 'tgl_kunjungan', 'jenis_kunjungan', 'tindak_lanjut', 'keluhan', 'terapi', 'kesadaran', 'tb', 'bb', 'tekanan_darah', 'respiratory_rake', 'heart_rafe', 'keterangan', 'biaya', 'status'];

    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
