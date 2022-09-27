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

                        <div class="row">
                            <div class="col-md-3 text-center">
                                <div class="mb-3 card text-white card-body bg-primary">
                                    <i class="fas fa-user icon-md mb-2"></i>
                                    <h5 class="text-white card-title">INFORMASI PASIEN</h5>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="mb-3 card text-white card-body bg-primary">
                                    <i class="fas fa-user icon-md mb-2"></i>
                                    <h5 class="text-white card-title">PEMERIKSAAN FISIK</h5>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="mb-3 card card-body">
                                    <i class="fas fa-user icon-md mb-2"></i>
                                    <h5 class="card-title">INFORMASI PASIEN</h5>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="mb-3 card card-body">
                                    <i class="fas fa-user icon-md mb-2"></i>
                                    <h5 class="card-title">INFORMASI PASIEN</h5>
                                </div>
                            </div>
                        </div>


                        <form action="{{ route('kunjungan.step2') }}" method="post" class="needs-validation mt-4"
                            id="bash_path">

                            @csrf
                            <div class="form-row">

                                <div class="col-md-12 mb-3">
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
                                    <label for="tb">Tinggi Badan</label>

                                    <div class="input-group">
                                        <input type="number" name="tb"
                                            class="form-control  @error('tb') is-invalid @enderror" id="tb"
                                            aria-describedby="tb" value="{{ old('tb') }}">

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


                                <div class="col-md-6 mb-3">
                                    <label for="bb">Berat Badan</label>

                                    <div class="input-group">
                                        <input type="number" name="bb"
                                            class="form-control  @error('bb') is-invalid @enderror" id="bb"
                                            aria-describedby="bb" value="{{ old('bb') }}">

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



                                <div class="col-md-6 mb-3">
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



                                <div class="col-md-6 mb-3">
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


                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mt-3">
                                    Selanjutnya <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
