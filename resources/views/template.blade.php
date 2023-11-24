<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link href="{{url ('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
    /* Menambahkan gaya kustom untuk footer */
    body {
      margin-bottom: 60px; /* Menyesuaikan margin bawah untuk memberi ruang bagi footer */
    }
    .footer {
        background-color: #f8f9fa;
        padding: 20px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        }
        nav{

        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-social fonts fixed-top">
        <!-- Tautan Logo atau Judul -->
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}" ><h3>Traveling</h3></a>
            <!-- Tombol Toggle (untuk tampilan responsif pada perangkat kecil) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Daftar Navigasi Utama -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/riko.basawara"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/sir_ikoo"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/sir_ikoo/"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ url('wisata') }}" class="nav-link">Data wisata</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br>

<div class="container">
    <h1>@yield("title")</h1>
    <hr>
    @if(session()->has("pesan"))
    <div class="alert alert-info">
        {{ session("pesan") }}
    </div>  
    @endif
    @yield("content")
</div>

    <div class="footer">
        <p>&copy; 2023 Riko, Naufal & Saepudin. All Rights Reserved</p>
    </div>

    <script src="{{url ('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>