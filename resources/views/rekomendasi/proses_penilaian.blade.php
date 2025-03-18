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
                    <p class="text-muted">Silahkan Silahkan Pilih Skor</p>
                    <hr>

                    <!-- Formulir untuk memilih skor -->
                    <form action="/proses_penilaian" method="POST">
                        @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>UKM</th>
                                    <th>Minat</th>
                                    <th>Bakat</th>
                                    <th>Prestasi UKM</th>
                                    <th>Program Kerja</th>
                                    <th>Jumlah Anggota</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $ukms = ['Bola Basket', 'Sepak Bola', 'Mapasadha', 'Pengabdian Masyarakat', 'Kerohanian'];
                                    $skorOptions = ['Sangat Minat', 'Minat', 'Cukup Minat', 'Kurang Minat', 'Tidak Minat'];
                                @endphp

                                @foreach ($ukms as $ukm)
                                    <tr>
                                        <td>{{ $ukm }}</td>
                                        @for ($i = 0; $i < 5; $i++)
                                            <td>
                                                <select class="form-select" name="skor[{{ $ukm }}][]">
                                                    @foreach ($skorOptions as $option)
                                                        <option value="{{ $option }}">{{ $option }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Tombol Submit -->
                        <div class="text-center mt-3">
                            <a href="/hasil_rekomendasi">Selanjutnya</a>
                            {{-- <button type="submit" class="btn btn-success px-4">Selanjutnya</button> --}}
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
