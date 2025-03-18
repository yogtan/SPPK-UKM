@extends('layouts.main')

@section('container')
    <section class="home-hero2" style="background-image: url('../img/Hero-BG.svg')">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center" id="popup">
                    <img class="img-hero mb-3 mt-5" src="../img/Logo-Hero.svg" alt="">

                    <h2 class="fw-bold mt-3" id="subtitle">INFORMASI</h2>

                </div>
            </div>
        </div>
    </section>
    <section class="cara-penggunaan">
        <div class="container mt-5 mb-5">
            <div class="card shadow-sm">
                <div class="card-body mx-4">
                    <h5 class="fw-bold ">Cara Menggunakan Sistem Pendukung Keputusan (SPPK) UKM</h5>
                    <p class="text-muted">Ikuti langkah-langkah berikut untuk mendapatkan rekomendasi UKM terbaik sesuai minat dan bakat Anda.</p>
                    <hr>

                    <div class="mt-4">
                        <h6 class="fw-bold">1. Pilih Bidang UKM</h6>
                        <p>Anda akan diminta untuk memilih bidang UKM yang diminati, seperti <strong>Seni Budaya, Olahraga, Pengabdian, Jurnalistik</strong>, dan lainnya.</p>
                    </div>
                    <div class="mt-4">
                        <h6 class="fw-bold">2. Pilih Daftar UKM</h6>
                        <p>Anda akan diminta untuk memilih daftar UKM yang diminati</p>
                    </div>

                    <div class="mt-3">
                        <h6 class="fw-bold">3. Isi Kriteria Penilaian</h6>
                        <p>Setelah memilih bidang UKM, Anda perlu memberikan skor pada beberapa kriteria berikut:</p>
                        <ul>
                            <li><strong>Minat</strong> – Seberapa tertarik Anda terhadap UKM tersebut.</li>
                            <li><strong>Bakat</strong> – Kemampuan yang Anda miliki di bidang tersebut.</li>
                            <li><strong>Prestasi UKM</strong> – Reputasi dan pencapaian UKM.</li>
                            <li><strong>Program Kerja</strong> – Kegiatan dan rencana UKM.</li>
                            <li><strong>Jumlah Anggota</strong> – Besarnya komunitas dalam UKM.</li>
                        </ul>
                    </div>

                    <div class="mt-3">
                        <h6 class="fw-bold">4. Proses Perhitungan</h6>
                        <p>Sistem akan menghitung skor berdasarkan metode <strong>SMART</strong> dan <strong>VIKOR</strong> untuk menentukan UKM yang paling sesuai dengan preferensi Anda.</p>
                    </div>

                    <div class="mt-3">
                        <h6 class="fw-bold">5. Lihat Hasil Rekomendasi</h6>
                        <p>Setelah perhitungan selesai, Anda akan melihat daftar UKM yang direkomendasikan berdasarkan ranking dan indeks <strong>VIKOR (Q)</strong>.</p>
                    </div>

                   

                    <!-- Tombol Kembali -->
                    <div class="text-center mt-4">
                        <a href="/" class="btn btn-primary px-4">Kembali</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
