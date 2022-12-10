@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="namahiburan">Nama Hiburan</span>
                <input type="text" class="form-control" placeholder="Jungkat - Jungkit" aria-label="namahiburan" name="namahiburan" aria-describedby="namahiburan">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="detailhiburan">Detail Hiburan</span>
                <input type="text" class="form-control" placeholder="Untuk Dewasa" aria-label="detailhiburan" name="detailhiburan" aria-describedby="detailhiburan">
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="gambarhiburan" name="gambarhiburan">
                <label class="input-group-text" for="gambarhiburan">Upload Gambar</label>
            </div>
            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
        </form>
          
        </div>
        <!-- /.container-fluid -->
        
    </div>
    <!-- End of Main Content -->
    
    @endsection