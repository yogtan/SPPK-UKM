@extends('layouts.main')

@section('container')
    <section class="home-hero" style="background-image: url('../img/Hero-BG.svg')">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center" id="popup">
                    <img class="img-hero mb-3 mt-5" src="../img/Logo-Hero.svg" alt="">

                    <h2 class="fw-bold mt-5" id="title">SELAMAT DATANG</h2>
                    <h2 class="fw-bold mt-3" id="subtitle">SPPK PEMILIHAN UKM MENGGUNAKAN METODE VIKOR</h2>
                    <a href="/daftar_bidang">
                        <button type="button" class="btn mt-3"
                            style="background-color: #800000; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                            Rekomendasi UKM
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Kategori Bidang -->
    <section class="bidang mt-5">
        <div class="container">
            <div class="row justify-content-center">
                @php
                    $categories = ['Seni Budaya', 'Olahraga', 'Kaki Tiga', 'Pengabdian', 'Jurnalistik'];
                @endphp

                @foreach ($categories as $index => $category)
                    <div class="col-lg-2 text-center">
                        <button type="button" class="btn category-btn border border-dark fw-semibold"
                            style="background-color: {{ $index == 0 ? 'white' : '#800000' }};
                                   color: {{ $index == 0 ? '#800000' : 'white' }};
                                   border: none; padding: 10px 30px; 
                                   border-radius: 5px; cursor: pointer;"
                            onclick="filterUKM('{{ $category }}', this)"
                            id="{{ str_replace(' ', '-', strtolower($category)) }}-btn">
                            {{ $category }}
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Daftar UKM -->
    <section class="ukm mt-3 pt-3 mb-5">
        <div class="container">
            <div class="row mt-1" id="ukm-list">
                <!-- Data UKM akan di-load otomatis untuk kategori Seni Budaya -->

                <a href=""></a>
            </div>
        </div>
    </section>

    <script>
        // Data UKM berdasarkan kategori
        const ukmData = {
            "Seni Budaya": [{
                    name: "Grisadha",
                    image: "img/Grisadha.png"
                },
                {
                    name: "Tutu Club",
                    image: "img/Grisadha.png"
                },
                {
                    name: "Karawitan",
                    image: "img/Grisadha.png"
                }
            ],
            "Olahraga": [{
                    name: "Futsal Club",
                    image: "img/Futsal.png"
                },
                {
                    name: "Badminton",
                    image: "img/Badminton.png"
                },
                {
                    name: "Basket",
                    image: "img/Basket.png"
                }
            ],
            "Kaki Tiga": [{
                    name: "Robo Club",
                    image: "img/Robo.png"
                },
                {
                    name: "Programmer",
                    image: "img/Programmer.png"
                }
            ],
            "Pengabdian": [{
                    name: "KSR PMI",
                    image: "img/KSR.png"
                },
                {
                    name: "BEM",
                    image: "img/BEM.png"
                }
            ],
            "Jurnalistik": [{
                    name: "Media Kreatif",
                    image: "img/Media.png"
                },
                {
                    name: "Pers Mahasiswa",
                    image: "img/Pers.png"
                }
            ]
        };

        function filterUKM(category, button) {
            const ukmList = document.getElementById("ukm-list");

            // Menghapus data lama
            ukmList.innerHTML = "";

            // Menambahkan data baru
            ukmData[category].forEach(ukm => {
                let ukmCard = `
                    <div class="col-lg-4 col-md-6 mt-3">
                        <a href="/detail_ukm" class="text-decoration-none text-dark">
                        <div class="card h-100 w-100 rounded-0">
                            <img src="${ukm.image}" class="card-img-top rounded-0" style="object-fit: cover; height:200px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">${ukm.name}</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                `;
                ukmList.innerHTML += ukmCard;
            });

            // Mengubah warna tombol yang diklik
            document.querySelectorAll(".category-btn").forEach(btn => {
                btn.style.backgroundColor = "#800000";
                btn.style.color = "white";
            });

            button.style.backgroundColor = "white";
            button.style.color = "black";
        }

        // Saat halaman dimuat pertama kali, otomatis pilih "Seni Budaya"
        window.onload = function() {
            let defaultCategory = "Seni Budaya";
            let defaultButton = document.getElementById("seni-budaya-btn");
            filterUKM(defaultCategory, defaultButton);
        };
    </script>
@endsection
