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
            padding: 10px;
            /* Mengurangi padding pada elemen .p-3 */
        }

        .d-inline-flex .btn {
            display: block;
            width: 100%;
            margin-bottom: 5px;
            /* Mengurangi margin pada tombol */
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
        <p class="col-lg-8 mx-auto fs-90" style="color: #f7a600;">
            Bintarajaya 8 RT 08 RW 09 No. B17 Bekasi Barat 17136</p>

        <!-- Sosial Media -->
        <div class="d-inline-flex flex-wrap gap-2 mb-3">
            <!-- Instagram -->
            <a href="https://instagram.com/ciptaqinsani?igshid=OGQ5ZDc2ODk2ZA==" class="btn btn-outline-secondary btn-lg px-4 rounded-pill custom-btn">
                <i class="fab fa-instagram"></i>
                Instagram
            </a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/company/karunia-cipta-qinsani/" class="btn btn-outline-secondary btn-lg px-4 rounded-pill custom-btn">
                <i class="fab fa-linkedin-in"></i>
                LinkedIn
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/6281330008888" class="btn btn-outline-secondary btn-lg px-4 rounded-pill custom-btn">
                <i class="fa-brands fa-whatsapp"></i>
                WhatsApp
            </a>

            <!-- Email -->
            <!DOCTYPE html>
            <html>

            <head>
                <title>Tautan Email ke Gmail</title>
            </head>

            <body>
                <a href="javascript:void(0);" id="emailButton" class="btn btn-outline-secondary btn-lg px-4 rounded-pill custom-btn">
                    <i class="far fa-envelope"></i>
                    Email
                </a>

                <script>
                    document.getElementById('emailButton').addEventListener('click', function() {
                        var emailTo = 'info.qinsani@gmail.com';
                        var emailSubject = 'Tanya Karunia Cipta Qinsani';

                        // Mengecek apakah aplikasi Gmail adalah aplikasi email default di perangkat
                        if (isGmailAppDefault()) {
                            // Jika Gmail adalah aplikasi default, langsung membuka tautan email
                            var emailLink = 'mailto:' + emailTo + '?subject=' + emailSubject;
                            window.location.href = emailLink;
                        } else {
                            // Jika Gmail bukan aplikasi email default, membuka Gmail di browser
                            window.location.href = 'https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=' + emailTo + '&su=' + emailSubject;
                        }
                    });

                    // Fungsi untuk memeriksa apakah Gmail adalah aplikasi email default di perangkat
                    function isGmailAppDefault() {
                        if (typeof navigator.userAgent !== "undefined" && navigator.userAgent.match(/Android/i)) {
                            return true; // Jika perangkat adalah Android, kita anggap Gmail adalah aplikasi default
                        }
                        return false; // Jika perangkat bukan Android, kita anggap Gmail bukan aplikasi default
                    }
                </script>
            </body>

            </html>

        </div>
    </div>
</div>