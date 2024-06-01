<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>supplier</title>

        <!-- Favicon -->
        <link href="{{asset('img/favicon.ico')}}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

    </head>
    <body>

        <div id="wrapper">
                {{-- AWAL NAVBAR --}}
                @include('layouts.navbar')
                {{-- AKHIR NAVBAR --}}

                {{-- AWAL SIDEBAR --}}
                @include('layouts.sidebar')
                {{-- AKHIR SIDEBAR --}}

            {{-- CONTENT --}}
            <div id="page-wrapper">
                <div class="container-fluid mx-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <h4 class="panel-heading mt-3 mb-2 text-center">
                                    Tambah Data Supplier
                                </h4>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="mt-4 mb-2 mx-2">Nama supplier</label>
                                                    <input type="text" class="form-control" name="nama_supplier" value="{{ $supplier->nama_supplier }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-4 mb-2 mx-2">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" value="{{ $supplier->alamat }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-4 mb-2 mx-2">Nama Brand</label>
                                                    <input type="text" class="form-control mb-4" name="nama brand" value="{{ $supplier->nama_brand }}" disabled>
                                                </div>
                                                <a href="{{route('supplier.index')}}"class="btn-secondary btn btn-default">Kembali</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- jQuery -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('admin/js/raphael.min.js') }}"></script>
<script src="{{ asset('admin/js/morris.min.js') }}"></script>
<script src="{{ asset('admin/js/morris-data.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('admin/js/startmin.js') }}"></script>

    </body>
</html>
