@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="namamakan">Nama Pemesan</span>
                <input type="text" class="form-control" placeholder="Agus" aria-label="namamakan" name="namamakan" aria-describedby="namamakan">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="detailmakan">Dewasa</span>
                <input type="number" class="form-control" placeholder="3" aria-label="detailmakan" name="detailmakan" aria-describedby="detailmakan">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="hargamakan">Kecil</span>
                <input type="number" class="form-control" placeholder="2" aria-label="hargamakan" name="hargamakan" aria-describedby="hargamakan">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="hargamakan">harga</span>
                <input type="number" class="form-control" placeholder="12000" aria-label="hargamakan" name="hargamakan" aria-describedby="hargamakan">
            </div>
            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                <i class="fa fa-pencil" aria-hidden="true"></i> Ubah Data</button>
        </form>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    
@endsection