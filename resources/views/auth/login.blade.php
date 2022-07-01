@extends('layouts.app')

@section('content.guest')
    <div class="app-container app-theme-white body-tabs-shadow closed-sidebar-mobile closed-sidebar">
        <div class="app-container closed-sidebar-mobile closed-sidebar">
            <div class="h-100 bg-arielle-smile bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">

                        <h3 class="text-center text-white mb-3">
                            <img src="{{ asset('images/logo/light.png') }}" width="190px">
                        </h3>

                        <div class="modal-dialog w-100 mx-auto mt-3">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h5 class="mt-2 mb-5">
                                            <div class="text-secondary">Selamat Datang</div>
                                            <span>Silahkan login dengan akun Anda.</span>
                                        </h5>
                                    </div>


                                    <form action="{{ route('login') }}" method="post" novalidate>

                                        @csrf

                                        <div class="form-row">

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input id="username" type="text"
                                                        class="form-control @error('username') is-invalid @enderror"
                                                        name="username" value="{{ old('username') }}" autocomplete="username"
                                                        placeholder="Username" autofocus>

                                                    @error('username')
                                                        <span class=" invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="Password" name="password"
                                                        autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 mt-1">
                                                <div class="d-flex justify-content-between position-relative form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                            id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>

                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                </div>

                                <div class="modal-footer clearfix mt-3">

                                    <div class="float-right">
                                        <button type="submit" class="btn btn-info btn-lg">Login to
                                            dashboard</button>
                                    </div>
                                </div>

                                </form>
                            </div>
                        </div>

                        <div class="text-center text-white opacity-8 mt-3">
                            Copyright &copy; 2022 Aris Afriyanto - Theme : By DashboardPack
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
