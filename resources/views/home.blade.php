@extends("template")

@section("title")

@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
    <style>

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
        <img src="{{ url('/assets/bandaneira.jpg') }}" />
        <p>Banda Neira</p>
      </div>
      <div class="carousel-card">
        <img
          src="{{ url('/assets/rajaampat.jpg') }}"
        />
        <p>Raja Ampat</p>
      </div>
      <div class="carousel-card">
        <img
          src="{{ url('/assets/bali.jpeg') }}"
        />
        <p>Bali</p>
      </div>
      <div class="carousel-card">
        <img src="{{ url('/assets/borobudur.jpeg') }}" />
        <p>Candi Borobudur</p>
      </div>
      <div class="carousel-card">
        <img src="{{ url('/assets/malioboro.jpeg') }}" />
        <p>Malioboro</p>
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