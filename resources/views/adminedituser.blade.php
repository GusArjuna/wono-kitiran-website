@extends('adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <form action="/admin/users/{{ $user->id }}" method="post">
            @csrf
            @method('patch')
            <div class="input-group mb-3">
                <span class="input-group-text" id="username">Nama</span>
                <input type="text" class="form-control" placeholder="agus" aria-label="username" name="username" aria-describedby="username" required autofocus value="{{ $user->username }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="password">password</span>
                <input type="password" class="form-control" placeholder="123" aria-label="password" name="password" aria-describedby="password" required value="{{ $user->passwordnormal }}">
            </div>
            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa fa-pencil" aria-hidden="true"></i> Update Data</button>
        </form>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    
@endsection