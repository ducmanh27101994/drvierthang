@extends('admin.detail.master_2')
@section('content_detail')


    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <?php if (\Illuminate\Support\Facades\Session::get('loginAuth') == 'drvietthang@gmail.com'): ?>
                <a href="{{route('hosobenhnhan')}}" type="button" class="btn btn-danger"
                   style="background-color: #7e1d0c">Tạo hồ sơ mới</a>
            <?php endif; ?>
            <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                    <!-- Nav Item - Alerts -->


                    <!-- Nav Item - Messages -->


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo \Illuminate\Support\Facades\Session::get('loginAuth')  ?></span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">

                            <a class="dropdown-item" href="{{route('logout.store')}}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " style="color: black" href="{{route('index.phantichphim', $hosobenhnhan->id)}}">Phân tích phim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: black" href="{{route('index.vto', $hosobenhnhan->id)}}">VTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: #7e1d0c" href="{{route('index.phantichmauham', $hosobenhnhan->id)}}">Phân tích mẫu hàm</a>
                        </li>

                    </ul>
                </div>


                <!-- Content Row -->

                <!-- Content Row -->

                <!-- Content Row -->
                <form method="post" action="{{route('store.phantichmauham',$hosobenhnhan->id)}}">
                    @csrf
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Bolton (mm)</h6>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span>Bolton 6/Hàm trên:</span>
                                                <input type="text" name="ptmh_bolton6_tren" class="form-control" id=""
                                                       aria-describedby="" placeholder=""
                                                       value="<?= !empty($phantichphim->ptmh_bolton6_tren) ? $phantichphim->ptmh_bolton6_tren : '' ?>">
                                                <br>
                                                <span>Bolton 12/Hàm trên:</span>
                                                <input type="text" name="ptmh_bolton12_tren" class="form-control" id=""
                                                       aria-describedby="" placeholder=""
                                                       value="<?= !empty($phantichphim->ptmh_bolton12_tren) ? $phantichphim->ptmh_bolton12_tren : '' ?>">

                                            </div>
                                            <div class="col-md-6">
                                                <span>Bolton 6/Hàm dưới:</span>
                                                <input type="text" name="ptmh_bolton6_duoi" class="form-control" id=""
                                                       aria-describedby="" placeholder=""
                                                       value="<?= !empty($phantichphim->ptmh_bolton6_duoi) ? $phantichphim->ptmh_bolton6_duoi : '' ?>">
                                                <br>
                                                <span>Bolton 12/Hàm dưới:</span>
                                                <input type="text" name="ptmh_bolton12_duoi" class="form-control" id=""
                                                       aria-describedby="" placeholder=""
                                                       value="<?= !empty($phantichphim->ptmh_bolton12_duoi) ? $phantichphim->ptmh_bolton12_duoi : '' ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-6 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Phân tích hàm mẫu (mm)</h6>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <span>Chiều ngang hàm dưới:</span>
                                        <input type="text" name="ptmh_chieunganghamduoi" class="form-control" id=""
                                               aria-describedby="" placeholder=""
                                               value="<?= !empty($phantichphim->ptmh_chieunganghamduoi) ? $phantichphim->ptmh_chieunganghamduoi : '' ?>">
                                        <br>
                                        <span>Chiều ngang hàm trên:</span>
                                        <input type="text" name="ptmh_chieunganghamtren" class="form-control" id=""
                                               aria-describedby="" placeholder=""
                                               value="<?= !empty($phantichphim->ptmh_chieunganghamtren) ? $phantichphim->ptmh_chieunganghamtren : '' ?>">
                                        <br>
                                        <span>Nong rộng:</span>
                                        <input type="text" name="ptmh_nongrong" class="form-control" id=""
                                               aria-describedby="" placeholder=""
                                               value="<?= !empty($phantichphim->ptmh_nongrong) ? $phantichphim->ptmh_nongrong : '' ?>">
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <?php if (\Illuminate\Support\Facades\Session::get('loginAuth') == 'drvietthang@gmail.com'): ?>
                    <button type="submit" class="btn" style="background-color: #7e1d0c; color: white"
                            onclick="return confirm('Bạn chắc chắn muốn lưu thông tin?')">Lưu thông tin
                    </button>
                    <?php endif; ?>
                </form>

                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
        </div>
    </div>

@endsection





