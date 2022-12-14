@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <form action="/admin/food" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="nama">Nama Makan</span>
                <input type="text" class="form-control" placeholder="bakso" aria-label="nama" name="nama" aria-describedby="nama">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="detail">Detail Makan</span>
                <input type="text" class="form-control" placeholder="Detail Makanan" aria-label="detail" name="detail" aria-describedby="detail">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="harga">Harga Makan</span>
                <input type="number" class="form-control" placeholder="12000" aria-label="harga" name="harga" aria-describedby="harga">
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="gambar" name="gambar" required>
                <label class="input-group-text" for="gambar">Upload Gambar</label>
            </div>
            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
        </form>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    
@endsection