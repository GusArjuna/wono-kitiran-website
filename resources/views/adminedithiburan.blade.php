@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form action="/admin/entertain/{{ $entertain->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="input-group mb-3">
                <span class="input-group-text" id="nama">Nama Hiburan</span>
                <input type="text" class="form-control" placeholder="Jungkat - Jungkit" aria-label="nama" name="nama" aria-describedby="nama" value="{{ $entertain->nama }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="detail">Detail Hiburan</span>
                <input type="text" class="form-control" placeholder="Untuk umum / Untuk Anak - Anak" aria-label="detail" name="detail" aria-describedby="detail" value="{{ $entertain->detail }}" >
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