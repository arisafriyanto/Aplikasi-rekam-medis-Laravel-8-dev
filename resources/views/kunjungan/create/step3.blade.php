


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