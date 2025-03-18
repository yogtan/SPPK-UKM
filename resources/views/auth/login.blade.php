@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mb-4 pb-3 fw-semibold" style="color: #800000">SPPK PEMILIHAN UKM MENGGUNAKAN METODE
                    VIKOR</h1>

                <form method="POST" action="{{ route('login') }}">
                    @csrf


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


                    <div class="mb-4">
                        <label class="fw-semibold pb-2" for="password" class="form-label">{{ __('Password') }}</label>
                        <input style="border: 1px solid;" id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Tombol Login -->
                    <div class="d-grid">
                        <button type="submit" class="btn text-white fw-bold" style="background-color: #800000;">
                            {{ __('LOGIN') }}
                        </button>
                    </div>
                    <!-- Link Daftar -->
                    <div class="text-center mt-3">
                        <p class="fw-semibold" >Belum mempunyai akun?  <a href="{{ route('register') }}" style="color: #800000">Daftar sekarang! </a>
                        </p>
                    </div>



                </form>
            </div>
        </div>
    </div>
@endsection
