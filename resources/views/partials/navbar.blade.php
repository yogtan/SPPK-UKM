<nav class="navbar navbar-expand-lg fixed-top bg-transparent" id="navbar">
    <div class="container d-flex justify-content-center align-items-center">
        <!-- Menu sebelah kiri -->
        <ul class="navbar-nav d-flex flex-row gap-3">
            <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="/daftar_bidang">Rekomendasi UKM</a>
            </li>
        </ul>

        <!-- Logo di tengah -->
        <a class="navbar-brand mx-3" href="/">
           
            <img src="../img/Logo.png" id="navbar-log" height="80" width="80">
        </a>
   
        <!-- Menu sebelah kanan -->
        <ul class="navbar-nav d-flex flex-row gap-3">
            <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="/hasil_rekomendasi">Hasil Rekomendasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="/informasi">Informasi</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    // Menampilkan dropdown menu saat mouse berada di atas item navbar yang memiliki dropdown
    document.addEventListener("DOMContentLoaded", function () {
        var dropdowns = document.querySelectorAll('.nav-item.dropdown');

        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('mouseover', function () {
                this.querySelector('.dropdown-menu').classList.add('show');
            });

            dropdown.addEventListener('mouseleave', function () {
                this.querySelector('.dropdown-menu').classList.remove('show');
            });
        });
    });

</script>