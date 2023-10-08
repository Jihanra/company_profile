<style>
    .center-image {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 150px;
        margin-bottom: 10px;
    }

    .center-image img {
        max-width: 100%;
        max-height: 100%;
        height: auto;
    }

    .custom-btn {
        color: #253264;
        background-color: #f7a600;
        transition: background-color 0.3s, color 0.3s;
    }

    .custom-btn:hover {
        background-color: #253264;
        color: #f7a600;
    }

    /* Responsif pada layar seluler */
    @media (max-width: 768px) {
        .center-image {
            height: 200px;
        }

        .p-3 {
            padding: 10px; /* Mengurangi padding pada elemen .p-3 */
        }

        .d-inline-flex .btn {
            display: block;
            width: 100%;
            margin-bottom: 5px; /* Mengurangi margin pada tombol */
        }
    }
</style>

<div class="container d-flex flex-column justify-content-center align-items-center" style="background-color: #253264; max-width: 1400px; min-height: 100vh;">
    <!-- Header -->
    <div class="p-3 text-center bg-body-tertiary rounded-3" style="margin-bottom: 20px;">
        <div class="center-image">
            <img src="{{ asset('images/location.png') }}" alt="Deskripsi Gambar">
        </div>
        <div class="container-transparent he" style="height: 15px;">
    </div>
        <h1 class="text-body-emphasis" style="color: #f7a600;">PT. Karunia Cipta Qinsani</h1>
        <p class="col-lg-8 mx-auto fs-5" style="color: #f7a600;">
            Sentra Niaga Blok D4. Jl. Bintara No.61, RT.001/RW.012, Kranji, Kec. Bekasi Barat., Kota Bekasi, Jawa Barat 17135
        </p>
        
        <!-- Sosial Media -->
        <div class="d-inline-flex flex-wrap gap-2 mb-3">
            <!-- Instagram -->
            <a href="https://example.com" class="btn btn-outline-secondary btn-lg px-4 rounded-pill custom-btn">
                <i class="fab fa-instagram"></i>
                Instagram
            </a>

            <!-- LinkedIn -->
            <a href="https://example.com" class="btn btn-outline-secondary btn-lg px-4 rounded-pill custom-btn">
                <i class="fab fa-linkedin-in"></i>
                LinkedIn
            </a>

            <!-- Phone -->
            <a href="https://example.com" class="btn btn-outline-secondary btn-lg px-4 rounded-pill custom-btn">
                <i class="fas fa-phone"></i>
                Phone
            </a>

            <!-- Email -->
            <a href="https://example.com" class="btn btn-outline-secondary btn-lg px-4 rounded-pill custom-btn">
                <i class="far fa-envelope"></i>
                Email
            </a>
        </div>
    </div>
</div>
