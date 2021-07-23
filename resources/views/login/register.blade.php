<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="https://service.egate.global/uploads/avatar/1626947384-c748b32f42adb8b1c59ba992ee88544b1.png"/>
    <title>Đăng ký - Dr.VietThang</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/sb_admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/sb_admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    @toastr_css
</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image" id="thumb" style="background: url(http://bsdinhvietthang.com/wp-content/uploads/2021/07/111.jpg)"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tạo Tài Khoản!</h1>
                        </div>
                        <form method="post" class="user" action="{{route('store.register')}}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name="first_name" type="text" class="form-control form-control-user" id="exampleFirstName"
                                           placeholder="First Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input name="last_name" type="text" class="form-control form-control-user" id="exampleLastName"
                                           placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                       placeholder="Email Address" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name="password" type="password" class="form-control form-control-user"
                                           id="exampleInputPassword" placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input name="repeat_password" type="password" class="form-control form-control-user"
                                           id="exampleRepeatPassword" placeholder="Repeat Password" required>
                                </div>
                            </div>
                            <button type="submit"  class="btn btn-primary btn-user btn-block">
                                Đăng ký tài khoản
                            </button>
                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small" href="{{route('login.index')}}">Bạn có sẵn sàng để tạo một tài khoản? Đăng nhập!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('/sb_admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('/sb_admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/sb_admin/js/sb-admin-2.min.js')}}"></script>

</body>
@jquery
@toastr_js
@toastr_render
</html>
