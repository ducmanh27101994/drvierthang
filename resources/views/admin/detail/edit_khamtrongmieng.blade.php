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
                <a href="{{route('hosobenhnhan')}}" type="button" class="btn btn-danger"
                   style="background-color: #7e1d0c">Tạo hồ sơ mới</a>

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
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo \Illuminate\Support\Facades\Session::get('loginAuth')  ?></span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">

                            <a class="dropdown-item" href="{{route('logout.store')}}" >
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
                    <h1 class="h3 mb-0 text-gray-800">Khám trong miệng</h1>
                </div>


                <!-- Content Row -->

                <!-- Content Row -->
                <form method="post" action="{{route('store.khamtrongmieng', $hosobenhnhan->id)}}"
                      enctype="multipart/form-data">
                    @csrf

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div>
                                            <span>Hạng: </span>
                                            <select class="form-control" id="" name="ktm_hang">
                                                <option value="">-- Chọn hạng --</option>
                                                <option
                                                    value="Hạng I" <?= $hosobenhnhan->ktm_hang == "Hạng I" ? "selected" : "" ?>>
                                                    Hạng I
                                                </option>
                                                <option
                                                    value="Hạng II" <?= $hosobenhnhan->ktm_hang == "Hạng II" ? "selected" : "" ?>>
                                                    Hạng II
                                                </option>
                                                <option
                                                    value="Hạng III" <?= $hosobenhnhan->ktm_hang == "Hạng III" ? "selected" : "" ?>>
                                                    Hạng III
                                                </option>
                                            </select>
                                            <br>
                                        </div>
                                        <div>
                                            <span>Chi: </span>
                                            <select class="form-control" id="" name="ktm_chi">
                                                <option value="">-- Chọn chi --</option>
                                                <option
                                                    value="Chi I" <?= $hosobenhnhan->ktm_chi == "Chi I" ? "selected" : "" ?>>
                                                    Chi I
                                                </option>
                                                <option
                                                    value="Chi II" <?= $hosobenhnhan->ktm_chi == "Chi II" ? "selected" : "" ?>>
                                                    Chi II
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <span>Răng cối trái (mm): </span>
                                            <input type="text" name="ktm_rangcoi_trai" class="form-control" id=""
                                                   aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_rangcoi_trai) ? $hosobenhnhan->ktm_rangcoi_trai : "" ?>">
                                            <br>
                                            <span>Răng nanh trái (mm): </span>
                                            <input type="text" name="ktm_rangnanh_trai" class="form-control" id=""
                                                   aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_rangnanh_trai) ? $hosobenhnhan->ktm_rangnanh_trai : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <span>Răng cối phải (mm): </span>
                                            <input type="text" name="ktm_rangcoi_phai" class="form-control" id=""
                                                   aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_rangcoi_phai) ? $hosobenhnhan->ktm_rangcoi_phai : "" ?>">
                                            <br>
                                            <span>Răng nanh phải (mm): </span>
                                            <input type="text" name="ktm_rangnanh_phai" class="form-control" id=""
                                                   aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_rangnanh_phai) ? $hosobenhnhan->ktm_rangnanh_phai : "" ?>">

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="col-lg-6 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div>
                                            <span>Lệnh chức năng: </span>
                                            <select class="form-control" id="" name="ktm_lenhchucnang">
                                                <option value="">-- Chọn lệnh chức năng --</option>
                                                <option
                                                    value="Không" <?= $hosobenhnhan->ktm_lenhchucnang == "Không" ? "selected" : "" ?>>
                                                    Không
                                                </option>
                                                <option
                                                    value="Trước" <?= $hosobenhnhan->ktm_lenhchucnang == "Trước" ? "selected" : "" ?>>
                                                    Trước
                                                </option>
                                                <option
                                                    value="Trái" <?= $hosobenhnhan->ktm_lenhchucnang == "Trái" ? "selected" : "" ?>>
                                                    Trái
                                                </option>
                                                <option
                                                    value="Phải" <?= $hosobenhnhan->ktm_lenhchucnang == "Phải" ? "selected" : "" ?>>
                                                    Phải
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <span>Hàm trên trái (mm):</span>
                                            <input type="text" name="ktm_hamtren_trai" class="form-control" id=""
                                                   aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_hamtren_trai) ? $hosobenhnhan->ktm_hamtren_trai : "" ?>">
                                            <br>
                                            <span>Hàm dưới trái (mm):</span>
                                            <input type="text" name="ktm_hamduoi_trai" class="form-control" id=""
                                                   aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_hamduoi_trai) ? $hosobenhnhan->ktm_hamduoi_trai : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <span>Hàm trên phải (mm):</span>
                                            <input type="text" name="ktm_hamtren_phai" class="form-control" id=""
                                                   aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_hamtren_phai) ? $hosobenhnhan->ktm_hamtren_phai : "" ?>">
                                            <br>
                                            <span>Hàm dưới phải (mm):</span>
                                            <input type="text" name="ktm_hamduoi_phai" class="form-control" id=""
                                                   aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_hamduoi_phai) ? $hosobenhnhan->ktm_hamduoi_phai : "" ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div>
                                                <span>Khoảng hàm trên (mm):</span>
                                                <input type="text" name="ktm_khoanghamtren" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_khoanghamtren) ? $hosobenhnhan->ktm_khoanghamtren : "" ?>">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div>
                                                <span>Khoảng hàm dưới (mm):</span>
                                                <input type="text" name="ktm_khoanghamduoi" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_khoanghamduoi) ? $hosobenhnhan->ktm_khoanghamduoi : "" ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <span>Cắn phủ:</span>
                                            <select class="form-control" id="" name="ktm_canphu">
                                                <option value="">-- Chọn cắn phủ --</option>
                                                <option
                                                    value="Hở" <?= $hosobenhnhan->ktm_canphu == "Hở" ? "selected" : "" ?>>
                                                    Hở
                                                </option>
                                                <option
                                                    value="Trung bình" <?= $hosobenhnhan->ktm_canphu == "Trung bình" ? "selected" : "" ?>>
                                                    Trung bình
                                                </option>
                                                <option
                                                    value="Sâu" <?= $hosobenhnhan->ktm_canphu == "Sâu" ? "selected" : "" ?>>
                                                    Sâu
                                                </option>
                                            </select>
                                            <br>
                                            <div>
                                                <span>Cắn chìa:</span>
                                                <input type="text" name="ktm_canphu_chia" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ktm_canphu_chia) ? $hosobenhnhan->ktm_canphu_chia : "" ?>">
                                            </div>
                                            <br>
                                            <span>Đường cong Spee:</span>
                                            <select class="form-control" id="" name="ktm_duongcongSpee">
                                                <option value="">-- Chọn đường cong Spee --</option>
                                                <option
                                                    value="Sâu" <?= $hosobenhnhan->ktm_duongcongSpee == "Sâu" ? "selected" : "" ?>>
                                                    Sâu
                                                </option>
                                                <option
                                                    value="Trung bình" <?= $hosobenhnhan->ktm_duongcongSpee == "Trung bình" ? "selected" : "" ?>>
                                                    Trung bình
                                                </option>
                                                <option
                                                    value="Phẳng" <?= $hosobenhnhan->ktm_duongcongSpee == "Phẳng" ? "selected" : "" ?>>
                                                    Phẳng
                                                </option>
                                            </select>
                                            <br>
                                            <span>Nướu vùng RC dưới:</span>
                                            <select class="form-control" id="" name="ktm_nuouvunggRCduoi">
                                                <option value="">-- Chọn nướu vùng RC dưới --</option>
                                                <option
                                                    value="Mỏng" <?= $hosobenhnhan->ktm_nuouvunggRCduoi == "Mỏng" ? "selected" : "" ?>>
                                                    Mỏng
                                                </option>
                                                <option
                                                    value="Trung bình" <?= $hosobenhnhan->ktm_nuouvunggRCduoi == "Trung bình" ? "selected" : "" ?>>
                                                    Trung bình
                                                </option>
                                                <option
                                                    value="Dày" <?= $hosobenhnhan->ktm_nuouvunggRCduoi == "Dày" ? "selected" : "" ?>>
                                                    Dày
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div>
                                                <span>(mm)</span>
                                                <input type="text" name="ktm_canphu_number" class="form-control" id=""
                                                       aria-describedby="" placeholder="(mm)" value="<?= !empty($hosobenhnhan->ktm_canphu_number) ? $hosobenhnhan->ktm_canphu_number : "" ?>">
                                            </div>
                                            <br>
                                            <span>Nướu răng nanh HD:</span>
                                            <select class="form-control" id="" name="ktm_nuourangnanhhd">
                                                <option value="">-- Chọn nướu răng nanh HD --</option>
                                                <option
                                                    value="Mỏng" <?= $hosobenhnhan->ktm_nuourangnanhhd == "Mỏng" ? "selected" : "" ?>>
                                                    Mỏng
                                                </option>
                                                <option
                                                    value="Trung bình" <?= $hosobenhnhan->ktm_nuourangnanhhd == "Trung bình" ? "selected" : "" ?>>
                                                    Trung bình
                                                </option>
                                                <option
                                                    value="Dày" <?= $hosobenhnhan->ktm_nuourangnanhhd == "Dày" ? "selected" : "" ?>>
                                                    Dày
                                                </option>
                                            </select>
                                            <br>
                                            <span>Cung răng:</span>
                                            <select class="form-control" id="" name="ktm_cungrang">
                                                <option value="">-- Chọn cung răng --</option>
                                                <option
                                                    value="Hình tam giác" <?= $hosobenhnhan->ktm_cungrang == "Hình tam giác" ? "selected" : "" ?>>
                                                    Hình tam giác
                                                </option>
                                                <option
                                                    value="Hình trứng" <?= $hosobenhnhan->ktm_cungrang == "Hình trứng" ? "selected" : "" ?>>
                                                    Hình trứng
                                                </option>
                                                <option
                                                    value="Hình vuông" <?= $hosobenhnhan->ktm_cungrang == "Hình vuông" ? "selected" : "" ?>>
                                                    Hình vuông
                                                </option>
                                            </select>
                                            <br>
                                            <span>Giai đoạn răng: </span>
                                            <select class="form-control" id="" name="ktm_giaidoanrang">
                                                <option value="">-- Chọn giai đoạn răng --</option>
                                                <option
                                                    value="Sữa" <?= $hosobenhnhan->ktm_giaidoanrang == "Sữa" ? "selected" : "" ?>>
                                                    Sữa
                                                </option>
                                                <option
                                                    value="Hỗn hợp" <?= $hosobenhnhan->ktm_giaidoanrang == "Hỗn hợp" ? "selected" : "" ?>>
                                                    Hỗn hợp
                                                </option>
                                                <option
                                                    value="Vĩnh viễn" <?= $hosobenhnhan->ktm_giaidoanrang == "Vĩnh viễn" ? "selected" : "" ?>>
                                                    Vĩnh viễn
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn" style="background-color: #7e1d0c; color: white"
                                    onclick="return confirm('Bạn chắc chắn muốn lưu thông tin?')">Lưu thông tin
                            </button>
                        </div>

                    </div>

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
@endsection
