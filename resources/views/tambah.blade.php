@extends("template")

@section("title")

@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
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
        <h1>Tambah Data</h1>
        <hr>
<form action="{{url('tambah') }}" method="post">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <label for="Name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Nama tempat" id="Name">
        </div>
        <div class="col">
            <label for="Day Open" class="form-label">Hari buka</label>
            <input type="text" name="day_open" class="form-control" placeholder="Hari buka" id="Day Open">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="Location" class="form-label">Lokasi</label>
            <input type="text"  name="location" class="form-control" placeholder="Lokasi" id="Location">
        </div>
        <div class="col">
            <label for="Time Open" class="form-label">Waktu buka</label>
            <input type="text" name="time_open" class="form-control" placeholder="Waktu buka" id="Waktu buka">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="Details" class="form-label">Keterangan</label>
            <textarea name="details" class="form-control" id="Details" rows="2"  placeholder="Keterangan lebih lanjut"></textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">HTM</label>
            <div class="form-check">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="price" id="paid" value="Bayar" checked>
                    <label class="form-check-label" for="paid">Bayar</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="price" id="free" value="Gratis">
                    <label class="form-check-label" for="free">Gratis</label>
                </div>
            </div>
        </div>
    </div>
    <div class="btn float-end">
    <button type="submit" class="btn btn-success">Tambah</button>
    <a class="btn btn-danger" href="{{ url ('wisata')}}">Cancel</a>
</div>
</form>
</body>
</html>
@endsection