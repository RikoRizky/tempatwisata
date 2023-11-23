@extends("template")

@section("title")

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
=======
@section("content")
<!DOCTYPE html>
<html lang="en">
    <style>
        body{
            margin: 70px;
        }
.lahan{
  font-family: sans-serif;
  background-color: black;
  box-sizing: border-box;
  display: flex;
}

.carousel {
  width: 100%;
  padding: 20px;
  background-color: rgb(48, 48, 48);
  border-radius: 25px;
}
.carousel-card {
  width: 400px;
  padding: 20px;
  margin: 0 10px;
  border: 2px solid white;
  border-radius: 25px;
  background-color: rgb(255, 255, 255, 0.3);
  color: white;
}
.slick-slide img {
  width: 100%;
  height: 300px;
}
>>>>>>> 944b327e15a1fd0165a50bbd933028ac998148bd

/* Customize the dots container */
.slick-dots {
  display: flex;
  justify-content: center;
  margin: 20px 0;
}

/* Customize the individual dots */
.slick-dots li {
  margin: 0 5px;
  list-style: none;
}

.slick-dots li button {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: black;
  border: none;
  outline: none;
  cursor: pointer;
}
/* Remove the numbers next to the dots */
.slick-dots li button {
  font-size: 0;
  line-height: 0;
}

/* Style the active dot */
.slick-dots li.slick-active button {
  background-color: white;
}
    </style>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bangers&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/70c682a6d6.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <h1>
        Tempat Wisata
    </h1>
    <hr>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"
    />
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <script src="new.js"></script>

    <div class="carousel lahan">
      <div class="carousel-card">
        <img src="https://media0.giphy.com/media/amrNGnZUeWhZC/giphy.gif" />
        <p>ASH</p>
      </div>
      <div class="carousel-card">
        <img
          src="https://thumbs.gfycat.com/AdorableCreamyHarvestmouse-size_restricted.gif"
        />
        <p>PIKACHU</p>
      </div>
      <div class="carousel-card">
        <img
          src="https://i.kym-cdn.com/photos/images/original/001/158/600/5f9.gif"
        />
        <p>CHARIZARD</p>
      </div>
      <div class="carousel-card">
        <img src="https://media1.giphy.com/media/6yjUEOHxZCev6/giphy.gif" />
        <p>GREENINJA</p>
      </div>
      <div class="carousel-card">
        <img src="https://i.imgur.com/SqcuMLU.gif" />
        <p>ASH</p>
      </div>
    </div>
  </body>
  <script>
    $(document).ready(function () {
  $(".carousel").slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1367,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
  </script>
</html>

@endsection