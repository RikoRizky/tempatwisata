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
        <h1>Data Wisata</h1>
        <hr>    
    <a href="{{ url('tambah') }}" class="btn btn-primary mb-3">
        Tambah Data
</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Lokasi</th>
            <th class="text-center">Keterangan</th>
            <th class="text-center">Hari buka</th>
            <th class="text-center">Jam buka</th>
            <th class="text-center">HTM</th>
            <th class="text-center">Fitur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        ?>
        @foreach($wisata as $data)
        <?php $no++; ?>
        <tr>
        <td class="text-center">{{ $no }}</td>
            <td class="text-center">{{ $data->name }}</td>
            <td class="text-center">{{ $data->location }}</td>
            <td class="text-center">{{ $data->details }}</td>
            <td class="text-center">{{ $data->day_open }}</td>
            <td class="text-center">{{ $data->time_open }}</td>
            <td class="text-center">{{ $data->price }}</td>
            <td class="text-center">
                <a href="{{ url('wisata/'.$data->id.'/edit') }}" class="btn btn-success btn-sm">
                    Edit
                </a>
                <a href="{{ url('wisata/'.$data->id.'/hapus') }}" 
                onclick="return confirm('Yakin Hapus {{ $data->nama }}.?')" 
                class="btn btn-sm btn-danger">
                Hapus
            </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>    
</body>
</html>
@endsection