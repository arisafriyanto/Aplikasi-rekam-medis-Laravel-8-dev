<div class="col-md-6 mb-3">
    <label for="tekanan_darah">Tekanan Darah</label>

    <div class="input-group">
        <input type="number" name="tekanan_darah" class="form-control  @error('tekanan_darah') is-invalid @enderror"
            id="tekanan_darah" aria-describedby="tekanan_darah" value="{{ old('tekanan_darah') }}" placeholder="120/80">

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

<div class="col-md-12 mb-3">
    <label for="status">Status Kunjungan</label>

    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
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

        <input type="number" name="biaya" class="form-control  @error('biaya') is-invalid @enderror" id="biaya"
            aria-describedby="biaya" value="{{ old('biaya') }}">

        @error('biaya')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
