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

<body class="hold-transition register-page" style="background-image: url('https://www.dbs.id/id/iwov-resources/flp/images/Perbedaan-Transaksi-Online-dan-Transaksi-Digital-1404x630.jpg'); background-size: cover; background-position: center;">
    <div class="register-box">
        <div class="card card-outline card-primary" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 10px; padding: 20px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1" style="color: black;"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg" style="color: black;">Register a new staff</p>

                <form action="{{ url('register') }}" method="post" id="form-register">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" id="username" name="username" class="form-control"
                            placeholder="Username" style="background-color: rgba(255, 255, 255, 0.2); color: black; border: none;">
                        <div class="input-group-append">
                            <div class="input-group-text" style="background-color: rgba(255, 255, 255, 0.2);">
                                <span class="fas fa-envelope" style="color: black;"></span>
                            </div>
                        </div>
                        <small id="error-username" class="error-text text-danger"></small>
                        @error('username')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama" style="background-color: rgba(255, 255, 255, 0.2); color: black; border: none;">
                        <div class="input-group-append">
                            <div class="input-group-text" style="background-color: rgba(255, 255, 255, 0.2);">
                                <span class="fas fa-user" style="color: black;"></span>
                            </div>
                        </div>
                        <small id="error-name" class="error-text text-danger"></small>
                        @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Password" style="background-color: rgba(255, 255, 255, 0.2); color: black; border: none;">
                        <div class="input-group-append">
                            <div class="input-group-text" style="background-color: rgba(255, 255, 255, 0.2);">
                                <span class="fas fa-lock" style="color: black;"></span>
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
                            <!-- Mengubah warna tombol menjadi emas -->
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #FFD700; color: white; border: none;">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- Mengubah warna link menjadi emas -->
                <a href="{{ url('login') }}" class="text-center" style="color: #FFD700;">Sudah punya akun?</a>
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

</body>

</html>
