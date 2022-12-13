@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <form action="/admin/food/{{ $food->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="input-group mb-3">
                <span class="input-group-text" id="nama">Nama Makan</span>
                <input type="text" class="form-control" placeholder="lalapan" aria-label="nama" name="nama" aria-describedby="nama" value="{{ $food->nama }}" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="detail">Detail Makan</span>
                <input type="text" class="form-control" placeholder="Terbuat Dari" aria-label="detail" name="detail" aria-describedby="detail" value="{{ $food->detail }}" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="harga">Harga Makan</span>
                <input type="number" class="form-control" placeholder="12000" aria-label="harga" name="harga" aria-describedby="harga" value="{{ $food->harga }}" >
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="gambar" name="gambar">
                <label class="input-group-text" for="gambar">Upload Gambar</label>
            </div>
            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa fa-pencil" aria-hidden="true"></i> Update Data</button>
        </form>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    
@endsection