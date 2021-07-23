<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <base href="{{asset('')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="https://service.egate.global/uploads/avatar/1626947384-c748b32f42adb8b1c59ba992ee88544b1.png"/>
    <title>Dashboard - Dr.VietThang</title>

    <!-- Custom fonts for this template-->
    <script src="jquery-3.5.1.min.js"></script>
    <link href="{{asset('/sb_admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <style>
        body {
            font-family: "Gill Sans", sans-serif !important;
        }
    </style>
    <!-- Custom styles for this template-->
    <link href="{{asset('/sb_admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    @toastr_css
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('hosobenhnhan.list')}}" style="background-color: #7e1d0c">
            <div class="sidebar-brand-text mx-3">Dr.VietThang </div>
        </a>
        <style>
            .sidebar .nav-item {
                background-color: #7e1d0c
            }
            .sidebar-dark .sidebar-heading{
                background-color: #7e1d0c
            }
            .bg-gradient-primary {
                background-image: linear-gradient(180deg,#7e1d0c 10%,#7e1d0c 100%);
            }
        </style>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" style="background-color: white">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('hosobenhnhan.list')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" style="background-color: white">

        <!-- Heading -->
        <div class="sidebar-heading">
            Quản lý
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Hồ sơ bệnh nhân</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu:</h6>
                    <a class="collapse-item" href="{{route('hosobenhnhan.detail', $hosobenhnhan->id)}}">Hành chính</a>
                    <a class="collapse-item" href="{{route('edit.khamtrongmieng', $hosobenhnhan->id)}}">Khám trong miệng</a>
                    <a class="collapse-item" href="{{route('edit.khamngoaimat', $hosobenhnhan->id)}}">Khám ngoài mặt</a>
                    <a class="collapse-item" href="{{route('edit.tuvantaichinh', $hosobenhnhan->id)}}">Tư vấn</a>
                    <a class="collapse-item" href="{{route('index.phantichphim', $hosobenhnhan->id)}}">Phân tích</a>
                    <a class="collapse-item" href="{{route('index.kehoachdieutri', $hosobenhnhan->id)}}">Kế hoạch điều trị</a>
                    <a class="collapse-item" href="{{route('index.quatrinhdieutri', $hosobenhnhan->id)}}">Quá trình điều trị</a>
                    <a class="collapse-item" href="{{route('index.image', $hosobenhnhan->id)}}">Hình ảnh</a>

                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->

        <!-- Divider -->
        <hr class="sidebar-divider" style="background-color: white">

        <!-- Heading -->
        <?php if (\Illuminate\Support\Facades\Session::get('loginAuth') == 'drvietthang@gmail.com'): ?>
        <div class="sidebar-heading">
            Users
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('index.user')}}"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Quản lý users</span>
            </a>

        </li>
    <?php endif; ?>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
@yield('content_detail')
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('/sb_admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('/sb_admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/sb_admin/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('/sb_admin/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('/sb_admin/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('/sb_admin/js/demo/chart-pie-demo.js')}}"></script>

</body>
@jquery
@toastr_js
@toastr_render
</html>
