@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <form action="" >
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="nama">Nama Pengirim</span>
                <input type="text" class="form-control" placeholder="Jungkat - Jungkit" aria-label="nama" name="nama" aria-describedby="nama" value="{{ $pesan->nama }}" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="detail">Email</span>
                <input type="text" class="form-control" placeholder="Untuk Dewasa" aria-label="detail" name="detail" aria-describedby="detail" value="{{ $pesan->email }}" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="notelp">No. Telp</span>
                <input type="text" class="form-control" placeholder="Untuk Dewasa" aria-label="notelp" name="notelp" aria-describedby="notelp" value="{{ $pesan->notelp }}" >
            </div>
            <div class="input-group">
                <span class="input-group-text">Pesan</span>
                <textarea class="form-control" aria-label="Pesan" name="pesan" >{{ $pesan->pesan }}</textarea>
              </div>
            <a href="/admin/message" class="d-none d-sm-inline-block btn btn-sm btn-primary mt-4 shadow-sm">
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> kembali</a>
        </form>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    
@endsection