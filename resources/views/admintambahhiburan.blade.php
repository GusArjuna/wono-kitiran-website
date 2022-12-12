@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form action="/admin/entertain" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="nama">Nama Hiburan</span>
                <input type="text" class="form-control" placeholder="Jungkat - Jungkit" aria-label="nama" name="nama" aria-describedby="nama">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="detail">Detail Hiburan</span>
                <input type="text" class="form-control" placeholder="Untuk Dewasa" aria-label="detail" name="detail" aria-describedby="detail">
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="gambar" name="gambar">
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