@extends('layouts.main')

@section('container')
    <section class="home-hero2" style="background-image: url('../img/Hero-BG.svg')">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center" id="popup">
                    <img class="img-hero mb-3 mt-5" src="../img/Logo-Hero.svg" alt="">

                    <h2 class="fw-bold mt-3" id="subtitle">UKM</h2>

                </div>
            </div>
        </div>
    </section>

    <section class="rekomendasi">
        <div class="container">
            <h1 class="alternaitf-tittle mt-5 fw-bold">Grisadha</h1>
            <div class="deskripsi">
                <p class="fw-bold mb-1 mt-5">Deskripsi</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius explicabo vel enim a officiis
                    reprehenderit debitis ducimus fugiat praesentium tempora saepe labore, odio id eum commodi reiciendis
                    culpa cumque distinctio.</p>
            </div>
            <div class="program_kerja">
                <p class="fw-bold mb-1">Program Kerja</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius explicabo vel enim a officiis
                    reprehenderit debitis ducimus fugiat praesentium tempora saepe labore, odio id eum commodi reiciendis
                    culpa cumque distinctio.</p>
            </div>
            <div class="prestasi">
                <p class="fw-bold mb-1">Prestasi</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius explicabo vel enim a officiis
                    reprehenderit debitis ducimus fugiat praesentium tempora saepe labore, odio id eum commodi reiciendis
                    culpa cumque distinctio.</p>
            </div>
            <div class="jumlah_anggota">
                <p class="fw-bold mb-1">Jumlah Anggota</p>
                <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius explicabo vel enim a officiis
                    reprehenderit debitis ducimus fugiat praesentium tempora saepe labore, odio id eum commodi reiciendis
                    culpa cumque distinctio.</p>
            </div>
        </div>

    </section>
@endsection
