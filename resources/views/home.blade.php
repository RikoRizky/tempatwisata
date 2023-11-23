@extends("tempalate")

@section("title")
Home
@endsection

@section("title")
.header-jumbotron {
            min-height: 655px;
            background-image: url(hade.png);
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .socialButton {
            display: flex;
            align-items: center;
            gap: 25px;
            cursor: pointer;
        }

        .socialButton i {
            font-size: 1.9em;
            text-decoration: none;
            color: rgb(255, 255, 255);
            transition: 0.3s;
            opacity: 0.5;
            transform: translateY(0);
        }

        .socialButton i:hover {
            opacity: 1;
            transform: translateY(-4px);
        }

        .navbar-social .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-social .navbar-brand:hover {
            color: #fff;
        }

        .navbar-social .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-social .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        footer {
            min-height: 300px;
        }
.fonts{
            font-family: "Passion One", cursive;
        }
        .bg-dark{
            background-color:black !important;
        }

        .typing-text {
            overflow: hidden;
            border-right: 1px solid #000;
            white-space: nowrap;
            margin: 0 auto;
            letter-spacing: 2px;
            animation: typing 3s steps(35, end), blink-caret 1s step-end infinite;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #000 }
        }

        .typewriter {
        overflow: hidden;
        white-space: nowrap;
        margin: 0 auto;
        letter-spacing: .15em;
        font-size: 2em;
        }
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-social bg-transparent bg-light fonts fixed-top">
        <!-- Tautan Logo atau Judul -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h3>Rekomendasi Tempat Wisata</h3></a>
            <!-- Tombol Toggle (untuk tampilan responsif pada perangkat kecil) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Daftar Navigasi Utama -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/palrei07"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/itil_kuda1234"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/nplrhnsyh/"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<h1>
    Tempat Wisata
</h1>
<h3>
    Banda Neira
</h3>
<img src="{{ url('/assets/bandaneira.jpg') }}" class="img-fluid">
<p>
Banda Tangah atau Banda Naira adalah salah satu pulau di Kepulauan Banda, 
dan merupakan pusat administratif Kecamatan Banda, Kabupaten Maluku Tengah, Maluku, Indonesia.    Kerajaan Mataram Kuno 
rajaan Mataram Kuno 
</h3>
<img src="{{ url('/assets/mataramkuno.jpg') }}" class="img-fluid">
<p>
Kerajaan Mataram Kuno memiliki dua periode berdasarkan lokasi atau ibu kota pemerintahannya. 
Pertama adalah periode awal Kerajaan Medang yaitu di Jawa Tengah di bawah Wangsa Sanjaya dan 
Sailendra (732-929 M), serta yang kedua ketika pindah ke Jawa Timur dan dikuasai oleh 
Wangsa Isyana (929-1016 M). Pada 929 M, Kerajaan Mataram Kuno dipindahkan ke Jawa Timur oleh Mpu Sindok. 
Menurut George Coedes dalam The Indianized states of Southeast Asia (1968).
</p>
<br>

<h3>
    Raja Ampat
</h3>
<img src="{{ url('/assets/rajaampat.jpg') }}" class="img-fluid">
<p>
Kepulauan Raja Ampat adalah gugusan kepulauan yang berlokasi di 
barat bagian Semenanjung Kepala Burung (Vogelkoop) Pulau Papua.
</p>
<br>

<br>
<p>
    Haloo Kunyuk
</p>
@endsection