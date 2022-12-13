@extends('adminlayout')
@section('content')
<!-- Button trigger modal -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="/admin/harga/{{ $harga->id }}" class="btn btn-warning">
                <i class="fa fa-pencil"></i>
                Ubah Harga
            </a>
        </div>
        <div class="card shadow mb-4 border-left-success">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary ">Data Ticket</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pemesan</th>
                                <th>Jumlah Ticket</th>
                                <th>harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pemesan</th>
                                <th>Jumlah Ticket</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($tickets as $ticket)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $ticket->nama }}</th>
                                <th>{{ $ticket->dewasa }} Dewasa {{ $ticket->kecil }} Anak</th>
                                <th>{{ ($ticket->dewasa*$harga->dewasa+$ticket->kecil*$harga->kecil) }}</th>
                                <th><a href="{{ url('/admin/ticket/'.$ticket->id.'/edit') }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                    <form action="/admin/ticket/{{ $ticket->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button  class="btn btn-danger border-0" onclick="return confirm('Hapus?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form></th>
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