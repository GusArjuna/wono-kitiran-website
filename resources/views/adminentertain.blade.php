@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="{{ url('/admin/entertain/tambah') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
        </div>
        <div class="card shadow mb-4 border-left-success">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary ">Data Entertain</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama hiburan</th>
                                <th>Detail hiburan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama hiburan</th>
                                <th>Detail hiburan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($entertains as $entertain)
                                <tr>
                                    <th>{{ $entertain->id }}</th>
                                    <th>{{ $entertain->nama }}</th>
                                    <th>{{ $entertain->detail }}</th>
                                    <th><a href="{{ url('/admin/entertain/edit/'.$entertain->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <form action="/admin/entertain/{{ $entertain->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button  class="btn btn-danger border-0" onclick="return confirm('Hapus?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    
@endsection