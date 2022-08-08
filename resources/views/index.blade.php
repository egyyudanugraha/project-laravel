<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
    
<link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        
                        <li
                            class="sidebar-item active ">
                            <a href="/" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/mahasiswa" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Mahasiswa</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/matakuliah" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Matakuliah</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/absen" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Absen</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/kontrak" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Kontrak</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/jadwal" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Jadwal</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/logout" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Keluar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            <div class="page-heading">
                <h3>Hallo, {{ auth()->user()->name }}!</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    @yield('content')
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    
<!-- Need: Apexcharts -->
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

</body>

</html>
