@extends("template")

@section("title")
Data wisata
@endsection

@section("content")
<a href="{{ url('tambah-wisata') }}" class="btn btn-primary mb-3">
    Data wisata
</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center"></th>
            <th class="text-center"></th>
            <th class="text-center"></th>
            <th class="text-center"></th>
            <th class="text-center"></th>
            <th class="text-center"></th>
            <th class="text-center"></th>
            <th class="text-center"></th>
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
            <td class="text-center">{{ $data->id }}</td>
            <td class="text-center">{{ $data->name }}</td>
            <td class="text-center">{{ $data->location }}</td>
            <td class="text-center">{{ $data->details }}</td>
            <td class="text-center">
                {{ $data->day-open }}, 
                {{ date("d-m-Y",strtotime($data->time-open)) }}
            </td>
            <td class="text-center">{{ $data->pricing }}</td>
            <td class="text-center">
            <td class="text-center">
                <a href="{{ url('data-pegawai/'.$data->id.'/edit') }}" class="btn btn-success btn-sm">
                    Edit
                </a>
                <a href="{{ url('data-pegawai/'.$data->id.'/hapus') }}" 
                onclick="return confirm('Yakin Hapus {{ $data->nama }}.?')" 
                class="btn btn-sm btn-danger">
                Hapus
            </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection