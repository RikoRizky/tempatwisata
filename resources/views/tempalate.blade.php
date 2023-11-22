<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link href="{{url ('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <ul class="nav">
    <li class="nav-item">
        <a href="{{ url('/') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('profil') }}" class="nav-link">Profil</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('kontak') }}" class="nav-link">Kontak</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('data-pegawai') }}" class="nav-link">Data Pegawai</a>
    </li>
</ul>
<hr>
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
    <script src="{{url ('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>