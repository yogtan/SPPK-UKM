@extends('layouts.main')

@section('container')
    <section class="home-hero2" style="background-image: url('../img/Hero-BG.svg')">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center" id="popup">
                    <img class="img-hero mb-3 mt-5" src="../img/Logo-Hero.svg" alt="">

                    <h2 class="fw-bold mt-3" id="subtitle">REKOMENDASI UKM</h2>

                </div>
            </div>
        </div>
    </section>

    <section class="rekomendasi">
        <div class="container mt-5 mb-5">
            <div class="card shadow-sm">
                <div class="card-body mx-3">
                    <h5 class="fw-bold">Daftar Bidang UKM</h5>
                    <p class="text-muted">Silahkan Pilih Bidang UKM</p>
                    <hr>

                    <!-- Pilihan Bidang UKM -->
                    <form action="" method="POST">
                        @csrf
                        <div class="d-flex  align-items-center gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="seni-budaya"
                                    value="Seni Budaya">
                                <label class="form-check-label" for="seni-budaya">Seni Budaya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="olahraga"
                                    value="Olahraga" checked>
                                <label class="form-check-label" for="olahraga">Olahraga</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="kaki-tiga"
                                    value="Kaki Tiga">
                                <label class="form-check-label" for="kaki-tiga">Kaki Tiga</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="pengabdian"
                                    value="Pengabdian" checked>
                                <label class="form-check-label" for="pengabdian">Pengabdian</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="jurnalistik"
                                    value="Jurnalistik">
                                <label class="form-check-label" for="jurnalistik">Jurnalistik</label>
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="text-center mt-3">
                            <a href="/daftar_ukm">
                                <p>Selanjutya</p>
                                {{-- <button type="submit" class="btn btn-success px-4">Selanjutnya</button> --}}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
