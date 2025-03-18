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
                    <h5 class="fw-bold">Daftar UKM</h5>
                    <p class="text-muted">Silahkan Pilih UKM</p>
                    <hr>

                    <!-- Pilihan Bidang UKM -->
                    <form action="" >
                        @csrf
                        <p class="fw-bold">Olahraga</p>
                        <div class="d-flex  align-items-center gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="seni-budaya"
                                    value="Seni Budaya">
                                <label class="form-check-label" for="seni-budaya">Bola Basket</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="olahraga"
                                    value="Olahraga" checked>
                                <label class="form-check-label" for="olahraga">Sepak Bola</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="kaki-tiga"
                                    value="Kaki Tiga">
                                <label class="form-check-label" for="kaki-tiga">TaekWondo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="pengabdian"
                                    value="Pengabdian" checked>
                                <label class="form-check-label" for="pengabdian">Inkai</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="jurnalistik"
                                    value="Jurnalistik">
                                <label class="form-check-label" for="jurnalistik">Kempo</label>
                            </div>
                        </div>

                        <p class="fw-bold mt-3">Pengabdian</p>
                        <div class="d-flex  align-items-center gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="seni-budaya"
                                    value="Seni Budaya">
                                <label class="form-check-label" for="seni-budaya">Pengabdian Masyarakat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bidang" id="olahraga"
                                    value="Olahraga" checked>
                                <label class="form-check-label" for="olahraga">Kerohanian</label>
                            </div>
                            
                        </div>

                        <!-- Tombol Submit -->
                        <a href="/daftar_kriteria">
                            <div class="text-center mt-3">
                                <p>Selanjutnya</p>
                                {{-- <button type="submit" class="btn btn-success px-4">Selanjutnya</button> --}}
                            </div>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
