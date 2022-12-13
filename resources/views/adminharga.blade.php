@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        
        <form action="/admin/harga/{{ $harga->id }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="dewasa">Dewasa</span>
                <input type="number" class="form-control" placeholder="3" aria-label="dewasa" name="dewasa" aria-describedby="dewasa" value="{{ $harga->dewasa }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="kecil">Kecil</span>
                <input type="number" class="form-control" placeholder="2" aria-label="kecil" name="kecil" aria-describedby="kecil" value="{{ $harga->kecil }}">
            </div>
            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                <i class="fa fa-pencil" aria-hidden="true"></i> Ubah Data</button>
        </form>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    
@endsection