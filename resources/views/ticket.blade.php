@extends('layout')
@section('content')
        <!-- Header -->
        <header id="header" class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Pemesanan Tiket</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
    
    
        <!-- Breadcrumbs -->
        <div class="ex-basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs">
                            <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><span>Ticket</span>
                        </div> <!-- end of breadcrumbs -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of breadcrumbs -->
    
    
        <!-- Privacy Content -->
        <div class="ex-basic-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <form action="" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="namapemesan">Nama Pemesan</span>
                                    <input type="text" class="form-control" placeholder="Agus" aria-label="namapemesan" name="namapemesan" aria-describedby="namapemesan">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="dewasa">Dewasa</span>
                                    <input type="number" class="form-control" placeholder="2" aria-label="dewasa" name="dewasa" aria-describedby="dewasa">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="kecil">Kecil</span>
                                    <input type="number" class="form-control" placeholder="2" aria-label="kecil" name="kecil" aria-describedby="kecil">
                                </div>
                                <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Submit</button>
                            </form>
                        </div> <!-- end of text-container-->
                    </div> <!-- end of col-->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-2 -->
        <!-- end of privacy content -->
    
    
        <!-- Breadcrumbs -->
        <div class="ex-basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs">
                            <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><span>Ticket</span>
                        </div> <!-- end of breadcrumbs -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of breadcrumbs -->
    
        
@endsection