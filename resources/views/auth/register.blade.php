<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new staff</p>

                <form action="{{ url('register') }}" method="post" id="form-register">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" id="username" name="username" class="form-control"
                            placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <small id="error-username" class="error-text text-danger"></small>
                        @error('username')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <small id="error-name" class="error-text text-danger"></small>
                        @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <small id="error-password" class="error-text text-danger"></small>
                        @error('password')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href="{{ url('login') }}" class="text-center">Sudah punya akun</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

    <script> 
    function modalAction(url = ''){ 
        $('#myModal').load(url,function(){ 
            $('#myModal').modal('show'); 
        }); 
    } 
 
var tableBarang; 
$(document).ready(function(){ 
    tableBarang = $('#table-barang').DataTable({ 
        processing: true, 
        serverSide: true, 
        ajax: { 
            "url": "{{ url('barang/list') }}", 
            "dataType": "json", 
            "type": "POST", 
            "data": function (d) { 
                d.filter_kategori = $('.filter_kategori').val(); 
            } 
        }, 
        columns: [{ 
                data: "No_Urut",  
                className: "text-center", 
                width: "5%", 
                orderable: false, 
                searchable: false 
            },{ 
                data: "barang_kode",  
                className: "", 
                width: "10%", 
                orderable: true, 
                searchable: true 
            },{ 
                data: "barang_nama",  
                className: "", 
                width: "37%", 
                orderable: true, 
                searchable: true, 
            },{ 
                data: "harga_beli",  
                className: "", 
                width: "10%", 
                orderable: true, 
                searchable: false, 
                render: function(data, type, row){ 
                    return new Intl.NumberFormat('id-ID').format(data); 
                } 
            },{ 
                data: "harga_jual",  
                className: "", 
                width: "10%",
                orderable: true, 
                searchable: false, 
                render: function(data, type, row){ 
                    return new Intl.NumberFormat('id-ID').format(data); 
                } 
            },{ 
                data: "kategori.kategori_nama",  
                className: "", 
                width: "14%", 
                orderable: true, 
                searchable: false 
            },{ 
                data: "aksi",  
                className: "text-center", 
                width: "14%", 
                orderable: false, 
                searchable: false 
            } 
        ] 
    }); 
 
    $('#table-barang_filter input').unbind().bind().on('keyup', function(e){ 
        if(e.keyCode == 13){ // enter key 
            tableBarang.search(this.value).draw(); 
        } 
    }); 
 
    $('.filter_kategori').change(function(){ 
        tableBarang.draw(); 
    }); 
}); 
</script> 
</body>

</html>