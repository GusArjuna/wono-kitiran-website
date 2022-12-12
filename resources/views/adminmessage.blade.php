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
        <div class="card shadow mb-4 border-left-success">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary ">Data message</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pengirim</th>
                                <th>Email</th>
                                <th>No. Hp</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pengirim</th>
                                <th>Email</th>
                                <th>No. Hp</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($pesans as $pesan)
                                <tr>
                                    <th>{{ $pesan->id }}</th>
                                    <th>{{ $pesan->nama }}</th>
                                    <th>{{ $pesan->email }}</th>
                                    <th>{{ $pesan->notelp }}</th>
                                    <th>{{ $pesan->pesan }}</th>
                                    <th><a href="{{ url('/admin/view/message/'.$pesan->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <form action="/admin/message/{{ $pesan->id }}" method="post" class="d-inline">
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