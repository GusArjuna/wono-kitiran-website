@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="namamakan">Nama Makan</span>
                <input type="text" class="form-control" placeholder="Jungkat - Jungkit" aria-label="namamakan" name="namamakan" aria-describedby="namamakan">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="detailmakan">Detail Makan</span>
                <input type="text" class="form-control" placeholder="Terbuat Dari" aria-label="detailmakan" name="detailmakan" aria-describedby="detailmakan">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="hargamakan">Harga Makan</span>
                <input type="number" class="form-control" placeholder="12000" aria-label="hargamakan" name="hargamakan" aria-describedby="hargamakan">
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="gambarmakan" name="gambarmakan">
                <label class="input-group-text" for="gambarmakan">Upload Gambar</label>
            </div>
            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
        </form>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    
@endsection