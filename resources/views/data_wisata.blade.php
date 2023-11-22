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
            <td class="text-center">{{ $ }}</td>
            <td class="text-center">{{ $data-> }}</td>
            <td>{{ $data-> }}</td>
            <td class="text-center">{{ $data-> }}</td>
            <td>
                {{ $data-> }},
                {{ date("d-m-Y",strtotime($data-> )) }}
            </td>
            <td>
                {{ $data-> }}
            </td>
            <td>
                {{ $data-> }}
            </td>
            <td class="text-center">
                <a href="{{ url('data-wisata/'.$data->id.'/hapus') }}" onelick="return confirm ('Yakin hapus {{ $data->nama }}.?')" class="btn btn-sm btn-danger">
                    Hapus
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection