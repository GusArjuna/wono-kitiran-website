@extends('layout')
@section('content')
        <!-- Header -->
        <header id="header" class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Hiburan</h1>
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
                            <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><span>Entertainment</span>
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
                            @foreach ($entertains as $entertain)    
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/'.$entertain->gambar) }}" class="img-fluid rounded-start" alt="{{ $entertain->nama }}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $entertain->nama }}</h5>
                                                <p class="card-text">{{ $entertain->detail }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                            <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><span>Entertainment</span>
                        </div> <!-- end of breadcrumbs -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of breadcrumbs -->
    
        
@endsection