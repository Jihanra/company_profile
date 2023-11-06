<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your meta tags, CSS, and other head elements here -->
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <style>
        .menu-active {
            color: #f7a600 !important;
            font-weight: bold;
        }

        .navbar {
            background-color: #253264;
        }

        .navbar .navbar-brand img {
            width: 70px;
            height: auto;
        }

        .navbar-toggler {
            border-color: #fff;
        }

        .navbar-collapse {
            text-align: center;
        }

        .navbar-nav {
            margin-top: 10px;
        }

        .navbar-nav .nav-item {
            margin: 5px;
        }

        .btn-login {
            background-color: #253264;
            border-color: #253264;
        }

        .btn-login i {
            color: #ffffff;
        }

        /* Pusatkan tombol login secara horizontal */
        .center-horizontal {
            display: flex;
            justify-content: center;
        }

        /* Menyembunyikan tombol login di perangkat seluler */
        @media (max-width: 768px) {
            .hide-on-mobile {
                display: none;
            }
        }
    </style>

    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
            <div class="container">
                <!-- Logo Perusahaan -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/KCQ.png') }}" alt="Company Logo">
                </a>

                <!-- Tombol Toggler untuk Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu Header -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('Home') ? 'menu-active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('About Us') ? 'menu-active' : '' }}" href="/AboutUs">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('Our Service') ? 'menu-active' : '' }}" href="/OurService">Our Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('Contact Us') ? 'menu-active' : '' }}" href="/ContactUs">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>
</html>
