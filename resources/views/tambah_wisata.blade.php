@extends("template")

@section("title")
Tambah wisata
@endsection

@section("content")
<form method="post" action="{{ url('tambah-wisata') }}">
    @csrf
    <div class="mb-2">
        <label class="form-label">ID</label>
        <input type="text" name="ID" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-check">
        <label>
                <input type="radio" class="form-check-input" name="jk" value="P">
                Prempuan
            </label>
        </div>
    <div class="mb-2">
        <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" required>
    </div>
    
    <div class="mb-2">
        <label class="form-label">No. Hp</label>
        <input type="text" name="hp" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" required></textarea>
    </div>
    <div class="mb-2">
        <label class="form-label">Jenis Kelamin
            </label>
        </div>
        <div class="form-label">
            <label>
            <input type="radio" class="form-check-input" name="jk" value="L" checked>
            Laki-Laki
        </label>
    </div>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">
            Tambah
        </button>
        <a href="{{url('data-pegawai')}}" class="btn btn-danger">
            Kembali
        </a>
    </div>
</form>
@endsection