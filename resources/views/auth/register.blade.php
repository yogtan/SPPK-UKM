@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mb-4 pb-3 fw-semibold" style="color: #800000">SPPK PEMILIHAN UKM MENGGUNAKAN METODE
                    VIKOR</h1>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Nama -->
                    <div class="mb-4">
                        <label class="fw-semibold pb-2" for="username" class="form-label">{{ __('Username') }}</label>
                        <input style="border: 1px solid; " id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') }}" placeholder="Username" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- NIM -->
                    <div class="mb-4">
                        <label class="fw-semibold pb-2" for="nim" class="form-label">{{ __('NIM') }}</label>
                        <input style="border: 1px solid; " id="nim" type="text" class="form-control @error('nim') is-invalid @enderror"
                            name="nim" value="{{ old('nim') }}" placeholder="NIM" required>
                        @error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    

                    <!-- Password -->
                    <div class="mb-4">
                        <label class="fw-semibold pb-2" for="password" class="form-label">{{ __('Password') }}</label>
                        <input style="border: 1px solid; ;" id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" placeholder="Password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="mb-4">
                        <label class="fw-semibold pb-2" for="password-confirm" class="form-label">{{ __('Konfirmasi Password') }}</label>
                        <input style="border: 1px solid;  id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" placeholder="Konfirmasi Password" required>
                    </div>

                    <!-- Tombol Register -->
                    <div class="d-grid">
                        <button type="submit" class="btn text-white fw-bold" style="background-color: #800000;">
                            {{ __('DAFTAR') }}
                        </button>
                    </div>

                    <!-- Link Login -->
                    <div class="text-center mt-3">
                        <p class="fw-semibold">Sudah mempunyai akun? <a href="{{ route('login') }}" style="color: #800000">Login sekarang!</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
