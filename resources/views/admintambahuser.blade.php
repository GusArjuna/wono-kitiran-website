@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <form action="" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="namamakan">Nama</span>
                <input type="text" class="form-control" placeholder="agus" aria-label="namamakan" name="namamakan" aria-describedby="namamakan">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="detailmakan">password</span>
                <input type="text" class="form-control" placeholder="123" aria-label="detailmakan" name="detailmakan" aria-describedby="detailmakan">
            </div>
            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
        </form>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    
@endsection