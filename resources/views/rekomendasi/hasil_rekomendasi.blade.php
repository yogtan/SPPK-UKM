@extends('layouts.main')

@section('container')
    <section class="home-hero2" style="background-image: url('../img/Hero-BG.svg')">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center" id="popup">
                    <img class="img-hero mb-3 mt-5" src="../img/Logo-Hero.svg" alt="">

                    <h2 class="fw-bold mt-3" id="subtitle">HASIL REKOMENDASI</h2>

                </div>
            </div>
        </div>
    </section>
    <section class="hasil-rekomendasi">
        <div class="container mt-5 mb-5">
            <div class="card shadow-sm">
                <div class="card-body mx-3">
                    <h5 class="fw-bold">Hasil Rekomendasi UKM</h5>
                    <p class="text-muted">Berikut adalah hasil perhitungan metode VIKOR berdasarkan kriteria yang telah Anda pilih.</p>
                    <hr>

                    <!-- Tabel Ranking UKM -->
                    <table class="table table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Ranking</th>
                                <th>Nama UKM</th>
                                <th>Indeks VIKOR (Q)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                // Contoh data ranking UKM dengan indeks VIKOR (dummy data)
                                $hasilRekomendasi = [
                                    ['ranking' => 1, 'ukm' => 'Bola Basket', 'qi' => 0.15],
                                    ['ranking' => 2, 'ukm' => 'Sepak Bola', 'qi' => 0.21],
                                    ['ranking' => 3, 'ukm' => 'Mapasadha', 'qi' => 0.36],
                                    ['ranking' => 4, 'ukm' => 'Pengabdian Masyarakat', 'qi' => 0.42],
                                    ['ranking' => 5, 'ukm' => 'Kerohanian', 'qi' => 0.53],
                                ];
                            @endphp

                            @foreach ($hasilRekomendasi as $hasil)
                                <tr>
                                    <td class="fw-bold">{{ $hasil['ranking'] }}</td>
                                    <td>{{ $hasil['ukm'] }}</td>
                                    <td>{{ number_format($hasil['qi'], 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Tombol Home -->
                    <div class="text-center mt-4">
                        <a href="/" class="btn btn-success px-4">Home</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
