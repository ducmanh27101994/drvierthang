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
                            <a class="nav-link active" style="color: #7e1d0c">VTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: black" href="{{route('index.phantichmauham', $hosobenhnhan->id)}}">Phân tích mẫu hàm</a>
                        </li>
                    </ul>
                </div>


                <!-- Content Row -->

                <!-- Content Row -->

                <!-- Content Row -->
                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-12 mb-4">
                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <table class="table">
                                    <thead style="background-color: #7e1d0c; color: white">
                                    <tr>
                                        <th rowspan="3" style="text-align: center"></th>
                                        <th colspan="4" style="text-align: center">Hàm dưới</th>
                                        <th colspan="4" style="text-align: center">Hàm trên</th>
                                    </tr>
                                    <tr>

                                        <th colspan="2" style="text-align: center">Cung 3-3</th>
                                        <th colspan="2" style="text-align: center">Cung 7-7</th>
                                        <th colspan="2" style="text-align: center">Cung 3-3</th>
                                        <th colspan="2" style="text-align: center">Cung 7-7</th>
                                    </tr>
                                    <tr>

                                        <th style="text-align: center">Phải</th>
                                        <th style="text-align: center">Trái</th>
                                        <th style="text-align: center">Phải</th>
                                        <th style="text-align: center">Trái</th>
                                        <th style="text-align: center">Phải</th>
                                        <th style="text-align: center">Trái</th>
                                        <th style="text-align: center">Phải</th>
                                        <th style="text-align: center">Trái</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php !empty($phantichphim->chenchucrang) ? $arr_chenchucrang = explode(",", $phantichphim->chenchucrang) : $arr_chenchucrang = []; ?>
                                    <?php !empty($phantichphim->duongcongspee) ? $arr_duongcongspee = explode(",", $phantichphim->duongcongspee) : $arr_duongcongspee = []; ?>
                                    <?php !empty($phantichphim->duonggiuahieuchinh) ? $arr_duonggiuahieuchinh = explode(",", $phantichphim->duonggiuahieuchinh) : $arr_duonggiuahieuchinh = []; ?>
                                    <?php !empty($phantichphim->piprangcua) ? $arr_piprangcua = explode(",", $phantichphim->piprangcua) : $arr_piprangcua = []; ?>
                                    <?php !empty($phantichphim->nhorang) ? $arr_nhorang = explode(",", $phantichphim->nhorang) : $arr_nhorang = []; ?>
                                    <?php !empty($phantichphim->dixa) ? $arr_dixa = explode(",", $phantichphim->dixa) : $arr_dixa = []; ?>
                                    <?php !empty($phantichphim->nongham) ? $arr_nongham = explode(",", $phantichphim->nongham) : $arr_nongham = []; ?>
                                    <?php !empty($phantichphim->maike) ? $arr_maike = explode(",", $phantichphim->maike) : $arr_maike = []; ?>

                                    <form method="post" action="{{route('store.vto',$hosobenhnhan->id)}}" >
                                        @csrf

                                    <tr>
                                        <th style="text-align: center">Chen chúc răng</th>
                                        <td style="text-align: center">
                                            <input name="chenchucrang[]" class="form-control" value="<?= !empty($arr_chenchucrang[0]) ? $arr_chenchucrang[0] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="chenchucrang[]" class="form-control" value="<?= !empty($arr_chenchucrang[1]) ? $arr_chenchucrang[1] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="chenchucrang[]" class="form-control" value="<?= !empty($arr_chenchucrang[2]) ? $arr_chenchucrang[2] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="chenchucrang[]" class="form-control" value="<?= !empty($arr_chenchucrang[3]) ? $arr_chenchucrang[3] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="chenchucrang[]" class="form-control" value="<?= !empty($arr_chenchucrang[4]) ? $arr_chenchucrang[4] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="chenchucrang[]" class="form-control" value="<?= !empty($arr_chenchucrang[5]) ? $arr_chenchucrang[5] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="chenchucrang[]" class="form-control" value="<?= !empty($arr_chenchucrang[6]) ? $arr_chenchucrang[6] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="chenchucrang[]" class="form-control" value="<?= !empty($arr_chenchucrang[7]) ? $arr_chenchucrang[7] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center">Đường cong Spee</th>
                                        <td style="text-align: center">
                                            <input name="duongcongspee[]" class="form-control" value="<?= !empty($arr_duongcongspee[0]) ? $arr_duongcongspee[0] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="duongcongspee[]" class="form-control" value="<?= !empty($arr_duongcongspee[1]) ? $arr_duongcongspee[1] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="duongcongspee[]" class="form-control" value="<?= !empty($arr_duongcongspee[2]) ? $arr_duongcongspee[2] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="duongcongspee[]" class="form-control" value="<?= !empty($arr_duongcongspee[3]) ? $arr_duongcongspee[3] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="duongcongspee[]" class="form-control" value="<?= !empty($arr_duongcongspee[4]) ? $arr_duongcongspee[4] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="duongcongspee[]" class="form-control" value="<?= !empty($arr_duongcongspee[5]) ? $arr_duongcongspee[5] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="duongcongspee[]" class="form-control" value="<?= !empty($arr_duongcongspee[6]) ? $arr_duongcongspee[6] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                        <td style="text-align: center">
                                            <input name="duongcongspee[]" class="form-control" value="<?= !empty($arr_duongcongspee[7]) ? $arr_duongcongspee[7] : '0' ?>" type="number" required style="text-align: center">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center">Đường giữa hiệu chỉnh</th>
                                        <?php for ($i=0; $i<8;$i++): ?>
                                        <td style="text-align: center">
                                            <input type="number" style="text-align: center" name="duonggiuahieuchinh[]" class="form-control" value="<?= !empty($arr_duonggiuahieuchinh[$i]) ? $arr_duonggiuahieuchinh[$i] : '0' ?>" required>
                                        </td>
                                        <?php endfor; ?>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center">PIP răng cửa</th>
                                        <?php for ($i=0; $i<8;$i++): ?>
                                        <td style="text-align: center">
                                            <input type="number" style="text-align: center" name="piprangcua[]" class="form-control" value="<?= !empty($arr_piprangcua[$i]) ? $arr_piprangcua[$i] : '0' ?>" required>
                                        </td>
                                        <?php endfor; ?>
                                    </tr>
                                    <tr style="background-color: #f2f2f2; color: black">
                                        <th style="text-align: center">Khoảng cần</th>
                                        <?php for ($i=0; $i<8;$i++): ?>
                                        <?php $total_khoangcan  = (!empty($arr_chenchucrang[$i]) ? $arr_chenchucrang[$i] : 0) + (!empty($arr_duongcongspee[$i]) ? $arr_duongcongspee[$i] : 0) + (!empty($arr_duonggiuahieuchinh[$i]) ? $arr_duonggiuahieuchinh[$i] : 0) + (!empty($arr_piprangcua[$i]) ? $arr_piprangcua[$i] : 0) ?>
                                        <td style="text-align: center">
                                            <input type="number" style="text-align: center" class="form-control" value="<?= $total_khoangcan ?>" disabled>
                                        </td>
                                        <?php endfor; ?>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center">Nhổ răng</th>
                                        <?php for ($i=0; $i<8;$i++): ?>
                                        <td style="text-align: center">
                                            <input type="number" style="text-align: center" name="nhorang[]" class="form-control" value="<?= !empty($arr_nhorang[$i]) ? $arr_nhorang[$i] : '0' ?>" required>
                                        </td>
                                        <?php endfor; ?>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center">Di xa</th>
                                        <?php for ($i=0; $i<8;$i++): ?>
                                        <td style="text-align: center">
                                            <input type="number" style="text-align: center" name="dixa[]" class="form-control" value="<?= !empty($arr_dixa[$i]) ? $arr_dixa[$i] : '0' ?>" required>
                                        </td>
                                        <?php endfor; ?>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center">Nong hàm</th>
                                        <?php for ($i=0; $i<8;$i++): ?>
                                        <td style="text-align: center">
                                            <input type="number" style="text-align: center" name="nongham[]" class="form-control" value="<?= !empty($arr_nongham[$i]) ? $arr_nongham[$i] : '0' ?>" required>
                                        </td>
                                        <?php endfor; ?>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center">Mài kẽ</th>
                                        <?php for ($i=0; $i<8;$i++): ?>
                                        <td style="text-align: center">
                                            <input type="number" style="text-align: center" name="maike[]" class="form-control" value="<?= !empty($arr_maike[$i]) ? $arr_maike[$i] : '0' ?>" required>
                                        </td>
                                        <?php endfor; ?>
                                    </tr>
                                    <tr style="background-color: #f2f2f2; color: black">
                                        <th style="text-align: center">Kết quả</th>
                                        <?php for ($i=0; $i<8;$i++): ?>
                                        <?php $total_ketqua  = (!empty($arr_nhorang[$i]) ? $arr_nhorang[$i] : 0) + (!empty($arr_dixa[$i]) ? $arr_dixa[$i] : 0) + (!empty($arr_nongham[$i]) ? $arr_nongham[$i] : 0) + (!empty($arr_maike[$i]) ? $arr_maike[$i] : 0) ?>
                                        <td style="text-align: center">
                                            <input type="number" style="text-align: center" class="form-control" value="<?= $total_ketqua + (int)$total_khoangcan ?>" disabled>
                                        </td>
                                        <?php endfor; ?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">VTO răng cửa hàm dưới</h6>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 style="text-align: center">Kết quả Ceph</h5>
                                            <br>
                                            <span>Độ nghiêng (độ):</span>
                                            <input type="text" name="hamduoi_1" class="form-control" id=""
                                                   aria-describedby="" placeholder=""
                                                   value="<?= !empty($phantichphim->hamduoi_1) ? $phantichphim->hamduoi_1 : '' ?>">
                                            <br>
                                            <span>Độ nhô (mm)</span>
                                            <input type="text" name="hamduoi_2" class="form-control" id=""
                                                   aria-describedby="" placeholder=""
                                                   value="<?= !empty($phantichphim->hamduoi_2) ? $phantichphim->hamduoi_2 : '' ?>">

                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: center">Kế hoạch</h5>
                                            <br>
                                            <span>Độ nghiêng (độ):</span>
                                            <input type="text" name="hamduoi_3" class="form-control" id=""
                                                   aria-describedby="" placeholder=""
                                                   value="<?= !empty($phantichphim->hamduoi_3) ? $phantichphim->hamduoi_3 : '' ?>">
                                            <br>
                                            <span>Độ nhô (mm)</span>
                                            <input type="text" name="hamduoi_4" class="form-control" id=""
                                                   aria-describedby="" placeholder=""
                                                   value="<?= !empty($phantichphim->hamduoi_4) ? $phantichphim->hamduoi_4 : '' ?>">
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
                                <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">VTO răng cửa hàm trên</h6>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="text-align: center">Kết quả Ceph</h5>
                                                <br>
                                                <span>Độ nghiêng (độ):</span>
                                                <input type="text" name="hamtren_1" class="form-control" id=""
                                                       aria-describedby="" placeholder=""
                                                       value="<?= !empty($phantichphim->hamtren_1) ? $phantichphim->hamtren_1 : '' ?>">
                                                <br>
                                                <span>Độ nhô (mm)</span>
                                                <input type="text" name="hamtren_2" class="form-control" id=""
                                                       aria-describedby="" placeholder=""
                                                       value="<?= !empty($phantichphim->hamtren_2) ? $phantichphim->hamtren_2 : '' ?>">

                                            </div>
                                            <div class="col-md-6">
                                                <h5 style="text-align: center">Kế hoạch</h5>
                                                <br>
                                                <span>Độ nghiêng (độ):</span>
                                                <input type="text" name="hamtren_3" class="form-control" id=""
                                                       aria-describedby="" placeholder=""
                                                       value="<?= !empty($phantichphim->hamtren_3) ? $phantichphim->hamtren_3 : '' ?>">
                                                <br>
                                                <span>Độ nhô (mm)</span>
                                                <input type="text" name="hamtren_4" class="form-control" id=""
                                                       aria-describedby="" placeholder=""
                                                       value="<?= !empty($phantichphim->hamtren_4) ? $phantichphim->hamtren_4 : '' ?>">
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Kế hoạch di chuyển răng</h6>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                    <style>
                                        .di-chuyen-rang {
                                            position: relative;
                                        }

                                        .di-chuyen-rang .title {
                                            text-align: center;
                                        }

                                        .di-chuyen-rang .title span {
                                            display: inline-block;
                                            margin-top: 15px;
                                            padding: 4px 15px;
                                            border-radius: 15px;
                                            background-color: #d9ce00;
                                            color: #fff;
                                            font-size: 13px;
                                            font-weight: bold;
                                        }

                                        .di-chuyen-rang .image {
                                            margin-top: 25px;
                                            width: 100%;
                                        }

                                        .di-chuyen-rang input {
                                            position: absolute;
                                            width: 30px;
                                            text-align: center;
                                            border: 1px #ccc solid;
                                            border-radius: 5px;
                                        }
                                    </style>
                                        <?php !empty($phantichphim->di_chuyen_rang) ? $arr_di_chuyen_rang = explode(",", $phantichphim->di_chuyen_rang) : $arr_di_chuyen_rang = []; ?>
                                        <div class="di-chuyen-rang" style="position:relative;">
                                            <input name="di_chuyen_rang[]" type="text" class="" style="left:20%;" value="<?= !empty($arr_di_chuyen_rang[0]) ? $arr_di_chuyen_rang[0] : '0' ?>" required>
                                            <input name="di_chuyen_rang[]" type="text" class="" style="left:35%;" value="<?= !empty($arr_di_chuyen_rang[1]) ? $arr_di_chuyen_rang[1] : '0' ?>" required>
                                            <input name="di_chuyen_rang[]" type="text" class="" style="right:20%;" value="<?= !empty($arr_di_chuyen_rang[2]) ? $arr_di_chuyen_rang[2] : '0' ?>" required>
                                            <input name="di_chuyen_rang[]" type="text" class="" style="right:35%;" value="<?= !empty($arr_di_chuyen_rang[3]) ? $arr_di_chuyen_rang[3] : '0' ?>" required>
                                            <img src="https://service.egate.global/uploads/avatar/1627100007-30f31982305acb0ab05837d4d4490577.png" class="image">&nbsp;
                                            <input name="di_chuyen_rang[]" type="text" class="" style="left:20%;" value="<?= !empty($arr_di_chuyen_rang[4]) ? $arr_di_chuyen_rang[4] : '0' ?>" required>
                                            <input name="di_chuyen_rang[]" type="text" class="" style="left:35%;" value="<?= !empty($arr_di_chuyen_rang[5]) ? $arr_di_chuyen_rang[5] : '0' ?>" required>
                                            <input name="di_chuyen_rang[]" type="text" class="" style="right:20%;" value="<?= !empty($arr_di_chuyen_rang[6]) ? $arr_di_chuyen_rang[6] : '0' ?>" required>
                                            <input name="di_chuyen_rang[]" type="text" class="" style="right:35%;" value="<?= !empty($arr_di_chuyen_rang[7]) ? $arr_di_chuyen_rang[7] : '0' ?>" required>
                                        </div>


                                    </div>
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





