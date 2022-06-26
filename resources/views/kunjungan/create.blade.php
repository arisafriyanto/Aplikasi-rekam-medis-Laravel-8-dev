@extends('layouts.app')

@section('content')
    <div class="app-main__inner">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-plus icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Tambah Kunjungan Rekam Medis
                        <div class="page-title-subheading">
                            Tambah Kunjungan adalah halaman untuk menginputkan data kunjungan.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-12">
                <div class="mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Tambah Rekam Medis</h5>
                        <form action="{{ route('kunjungan.store') }}" method="post" class="needs-validation"
                            id="bash_path">

                            @csrf

                            <div class="form-row">

                                <div class="col-md-12 mb-3">
                                    <label for="nama_pasien">Nama Pasien</label>
                                    <input type="text" name="nama_pasien"
                                        class="form-control @error('nama_pasien') is-invalid @enderror" id="nama_pasien"
                                        value="{{ old('nama_pasien') }}">

                                    @error('nama_pasien')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <input type="hidden" name="id_pasien" id="id_pasien" value="{{ old('id_pasien') }}">

                                <div class="col-md-6 mb-3">
                                    <label for="jenis_registrasi">Jenis Registrasi</label>
                                    <input type="text" name="jenis_registrasi"
                                        class="form-control @error('jenis_registrasi') is-invalid @enderror"
                                        id="jenis_registrasi" value="{{ old('jenis_registrasi') }}" readonly>

                                    @error('jenis_registrasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="no_bpjs">No BPJS</label>
                                    <input type="text" name="no_bpjs"
                                        class="form-control @error('no_bpjs') is-invalid @enderror" id="no_bpjs"
                                        value="{{ old('no_bpjs') }}" readonly>

                                    @error('no_bpjs')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                                    <input type="date" name="tgl_kunjungan"
                                        class="form-control @error('tgl_kunjungan') is-invalid @enderror" id="tgl_kunjungan"
                                        value="{{ old('tgl_kunjungan') }}">

                                    @error('tgl_kunjungan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="poli">Poli Tujuan</label>

                                    <select name="poli" id="poli" class="form-control @error('poli') is-invalid @enderror">
                                        @foreach ($polis as $poli)
                                            <option value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                                        @endforeach
                                    </select>

                                    @error('poli')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="jenis_kunjungan">Jenis Kunjungan</label>

                                    <select name="jenis_kunjungan" id="jenis_kunjungan"
                                        class="form-control @error('jenis_kunjungan') is-invalid @enderror">
                                        <option value="Kunjungan sakit">Kunjungan sakit</option>
                                        <option value="Kunjungan sehat">Kunjungan sehat</option>
                                    </select>

                                    @error('jenis_kunjungan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="tindak_lanjut">Tindak Lanjut</label>

                                    <select name="tindak_lanjut" id="tindak_lanjut"
                                        class="form-control @error('tindak_lanjut') is-invalid @enderror">
                                        <option value="Pulang sehat">Pulang sehat</option>
                                        <option value="Rawat jalan">Rawat jalan</option>
                                        <option value="Pemeriksaan berkala">Pemeriksaan berkala</option>
                                        <option value="Rujukan">Rujukan</option>
                                    </select>

                                    @error('tindak_lanjut')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="keluhan">Keluhan</label>
                                    <textarea name="keluhan" id="keluhan" class="form-control @error('keluhan') is-invalid @enderror"
                                        id="keluhan">{{ old('keluhan') }}</textarea>

                                    @error('keluhan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="terapi">Terapi</label>
                                    <input type="text" name="terapi"
                                        class="form-control @error('terapi') is-invalid @enderror" id="terapi"
                                        value="{{ old('terapi') }}">

                                    @error('terapi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="nama_dokter">Dokter</label>
                                    <input type="text" name="nama_dokter"
                                        class="form-control @error('nama_dokter') is-invalid @enderror" id="nama_dokter"
                                        value="{{ old('nama_dokter') }}">

                                    @error('nama_dokter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <input type="hidden" name="id_dokter" id="id_dokter" value="{{ old('id_dokter') }}">

                                <div class="col-md-12 mb-3">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror"
                                        id="keterangan">{{ old('keterangan') }}</textarea>

                                    @error('keterangan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <div class="col-md-6 mb-3">
                                    <label for="kesadaran">Kesadaran</label>
                                    <input type="text" name="kesadaran"
                                        class="form-control @error('kesadaran') is-invalid @enderror" id="kesadaran"
                                        value="{{ old('kesadaran') }}">

                                    @error('kesadaran')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <div class="col-md-6 mb-3">
                                    <label for="tekanan_darah">Tekanan Darah</label>

                                    <div class="input-group">
                                        <input type="number" name="tekanan_darah"
                                            class="form-control  @error('tekanan_darah') is-invalid @enderror"
                                            id="tekanan_darah" aria-describedby="tekanan_darah"
                                            value="{{ old('tekanan_darah') }}" placeholder="120/80">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="tekanan_darah">mmHg</span>
                                        </div>

                                        @error('tekanan_darah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-3 mb-3">
                                    <label for="tb">Tinggi Badan</label>

                                    <div class="input-group">
                                        <input type="number" name="tb" class="form-control  @error('tb') is-invalid @enderror"
                                            id="tb" aria-describedby="tb" value="{{ old('tb') }}">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="tb">cm</span>
                                        </div>

                                        @error('tb')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-3 mb-3">
                                    <label for="bb">Berat Badan</label>

                                    <div class="input-group">
                                        <input type="number" name="bb" class="form-control  @error('bb') is-invalid @enderror"
                                            id="bb" aria-describedby="bb" value="{{ old('bb') }}">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="bb">kg</span>
                                        </div>

                                        @error('bb')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-3 mb-3">
                                    <label for="respiratory_rake">Respiratori Rake</label>

                                    <div class="input-group">
                                        <input type="number" name="respiratory_rake"
                                            class="form-control  @error('respiratory_rake') is-invalid @enderror"
                                            id="respiratory_rake" aria-describedby="respiratory_rake"
                                            value="{{ old('respiratory_rake') }}">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="respiratory_rake">per menit</span>
                                        </div>

                                        @error('respiratory_rake')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-3 mb-3">
                                    <label for="heart_rafe">Heart Rafe</label>

                                    <div class="input-group">
                                        <input type="number" name="heart_rafe"
                                            class="form-control  @error('heart_rafe') is-invalid @enderror" id="heart_rafe"
                                            aria-describedby="heart_rafe" value="{{ old('heart_rafe') }}">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="heart_rafe">bpm</span>
                                        </div>

                                        @error('heart_rafe')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12 mb-3">
                                    <label for="status">Status Kunjungan</label>

                                    <select name="status" id="status"
                                        class="form-control @error('status') is-invalid @enderror">
                                        <option value="Belum dilayani">Belum dilayani</option>
                                        <option value="Sudah dilayani">Sudah dilayani</option>
                                    </select>

                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <div class="col-md-12 mb-3">
                                    <label for="biaya">Biaya Administrasi</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="biaya">RP</span>
                                        </div>

                                        <input type="number" name="biaya" class="form-control  @error('biaya') is-invalid @enderror"
                                            id="biaya" aria-describedby="biaya" value="{{ old('biaya') }}">

                                        @error('biaya')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                            </div>

                            <button type="submit" class="btn btn-primary mt-3">
                                <i class="fas fa-plus"></i> Tambah
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
