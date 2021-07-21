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
                    <h1 class="h3 mb-0 text-gray-800">Khám trong miệng</h1>
                </div>


                <!-- Content Row -->

                <!-- Content Row -->
                <form method="post" action="{{route('store.khamngoaimat',$hosobenhnhan->id)}}"
                      enctype="multipart/form-data">
                @csrf

                <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-4 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div>
                                            <span>Dạng mặt: </span>
                                            <select class="form-control" id="" name="knm_dangmat">
                                                <option value="">-- Chọn dạng mặt --</option>
                                                <option
                                                    value="Dài" <?= !empty($hosobenhnhan->knm_dangmat) && $hosobenhnhan->knm_dangmat  == "Dài" ? "selected" : "" ?>>
                                                    Dài
                                                </option>
                                                <option
                                                    value="Trung bình" <?= !empty($hosobenhnhan->knm_dangmat) && $hosobenhnhan->knm_dangmat == "Trung bình" ? "selected" : "" ?>>
                                                    Trung bình
                                                </option>
                                                <option
                                                    value="Ngắn" <?=  !empty($hosobenhnhan->knm_dangmat) && $hosobenhnhan->knm_dangmat == "Ngắn" ? "selected" : "" ?>>
                                                    Ngắn
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Mặt nghiêng: </span>
                                            <select class="form-control" id="" name="knm_matnghieng">
                                                <option value="">-- Chọn mặt nghiêng --</option>
                                                <option
                                                    value="Mặt lồi" <?= !empty($hosobenhnhan->knm_matnghieng) && $hosobenhnhan->knm_matnghieng == "Mặt lồi" ? "selected" : "" ?>>
                                                    Mặt lồi
                                                </option>
                                                <option
                                                    value="Mặt thẳng" <?= !empty($hosobenhnhan->knm_matnghieng) && $hosobenhnhan->knm_matnghieng == "Mặt thẳng" ? "selected" : "" ?>>
                                                    Mặt thẳng
                                                </option>
                                                <option
                                                    value="Mặt lõm" <?= !empty($hosobenhnhan->knm_matnghieng) &&$hosobenhnhan->knm_matnghieng == "Mặt lõm" ? "selected" : "" ?>>
                                                    Mặt lõm
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Đường giữa hàm trên: </span>
                                            <select class="form-control" id="" name="knm_duonggiuahamtren">
                                                <option value="">-- Chọn --</option>
                                                <option
                                                    value="Không" <?= !empty($hosobenhnhan->knm_duonggiuahamtren) && $hosobenhnhan->knm_duonggiuahamtren == "Không" ? "selected" : "" ?>>
                                                    Không
                                                </option>
                                                <option
                                                    value="Phải" <?= !empty($hosobenhnhan->knm_duonggiuahamtren) &&$hosobenhnhan->knm_duonggiuahamtren == "Phải" ? "selected" : "" ?>>
                                                    Phải
                                                </option>
                                                <option
                                                    value="Trái" <?= !empty($hosobenhnhan->knm_duonggiuahamtren) &&$hosobenhnhan->knm_duonggiuahamtren == "Trái" ? "selected" : "" ?>>
                                                    Trái
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Môi: </span>
                                            <select class="form-control" id="" name="knm_moi">
                                                <option value="">-- Chọn môi --</option>
                                                <option
                                                    value="Mỏng" <?= !empty($hosobenhnhan->knm_moi) &&$hosobenhnhan->knm_moi == "Mỏng" ? "selected" : "" ?>>
                                                    Mỏng
                                                </option>
                                                <option
                                                    value="Trung Bình" <?= !empty($hosobenhnhan->knm_moi) &&$hosobenhnhan->knm_moi == "Trung Bình" ? "selected" : "" ?>>
                                                    Trung Bình
                                                </option>
                                                <option
                                                    value="Dày" <?= !empty($hosobenhnhan->knm_moi) &&$hosobenhnhan->knm_moi == "Dày" ? "selected" : "" ?>>
                                                    Dày
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="col-lg-4 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">

                                        <div>
                                            <span>Góc mũi môi: </span>
                                            <select class="form-control" id="" name="knm_gocmuimoi">
                                                <option value="">-- Chọn góc mũi môi --</option>
                                                <option
                                                    value="< 90" <?= !empty($hosobenhnhan->knm_gocmuimoi) &&$hosobenhnhan->knm_gocmuimoi == "< 90" ? "selected" : "" ?>>
                                                    < 90
                                                </option>
                                                <option
                                                    value="90 - 100" <?= !empty($hosobenhnhan->knm_gocmuimoi) &&$hosobenhnhan->knm_gocmuimoi == "90 - 100" ? "selected" : "" ?>>
                                                    90 - 100
                                                </option>
                                                <option
                                                    value="> 90" <?= !empty($hosobenhnhan->knm_gocmuimoi) &&$hosobenhnhan->knm_gocmuimoi == "> 90" ? "selected" : "" ?>>
                                                    > 90
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Cung cười: </span>
                                            <select class="form-control" id="" name="knm_cungcuoi">
                                                <option value="">-- Chọn cung cười --</option>
                                                <option
                                                    value="Thấp" <?= !empty($hosobenhnhan->knm_cungcuoi) &&$hosobenhnhan->knm_cungcuoi == "Thấp" ? "selected" : "" ?>>
                                                    Thấp
                                                </option>
                                                <option
                                                    value="Trung bình" <?= !empty($hosobenhnhan->knm_cungcuoi) &&$hosobenhnhan->knm_cungcuoi == "Trung bình" ? "selected" : "" ?>>
                                                    Trung bình
                                                </option>
                                                <option
                                                    value="Cao" <?= !empty($hosobenhnhan->knm_cungcuoi) &&$hosobenhnhan->knm_cungcuoi == "Cao" ? "selected" : "" ?>>
                                                    Cao
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Đường cười: </span>
                                            <select class="form-control" id="" name="knm_duongcuoi">
                                                <option value="">-- Chọn đường cười --</option>
                                                <option
                                                    value="Thấp" <?= !empty($hosobenhnhan->knm_duongcuoi) &&$hosobenhnhan->knm_duongcuoi == "Thấp" ? "selected" : "" ?>>
                                                    Thấp
                                                </option>
                                                <option
                                                    value="Trung bình" <?= !empty($hosobenhnhan->knm_duongcuoi) &&$hosobenhnhan->knm_duongcuoi == "Trung bình" ? "selected" : "" ?>>
                                                    Trung bình
                                                </option>
                                                <option
                                                    value="Cao" <?= !empty($hosobenhnhan->knm_duongcuoi) &&$hosobenhnhan->knm_duongcuoi == "Cao" ? "selected" : "" ?>>
                                                    Cao
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div>
                                            <span>Hành lang đen: </span>
                                            <select class="form-control" id="" name="knm_hanhlangden">
                                                <option value="">-- Chọn hành lang đen --</option>
                                                <option
                                                    value="Hẹp" <?= !empty($hosobenhnhan->knm_hanhlangden) &&$hosobenhnhan->knm_hanhlangden == "Hẹp" ? "selected" : "" ?>>
                                                    Hẹp
                                                </option>
                                                <option
                                                    value="Trung bình" <?= !empty($hosobenhnhan->knm_hanhlangden) &&$hosobenhnhan->knm_hanhlangden == "Trung bình" ? "selected" : "" ?>>
                                                    Trung bình
                                                </option>
                                                <option
                                                    value="Rộng" <?= !empty($hosobenhnhan->knm_hanhlangden) &&$hosobenhnhan->knm_hanhlangden == "Rộng" ? "selected" : "" ?>>
                                                    Rộng
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Rãnh cằm: </span>
                                            <select class="form-control" id="" name="knm_hanhlangden">
                                                <option value="">-- Chọn rãnh cằm --</option>
                                                <option
                                                    value="Sâu" <?= !empty($hosobenhnhan->knm_ranhcam) &&$hosobenhnhan->knm_ranhcam == "Sâu" ? "selected" : "" ?>>
                                                    Sâu
                                                </option>
                                                <option
                                                    value="Trung bình" <?= !empty($hosobenhnhan->knm_ranhcam) &&$hosobenhnhan->knm_ranhcam == "Trung bình" ? "selected" : "" ?>>
                                                    Trung bình
                                                </option>
                                                <option
                                                    value="Nông" <?= !empty($hosobenhnhan->knm_ranhcam) &&$hosobenhnhan->knm_ranhcam == "Nông" ? "selected" : "" ?>>
                                                    Nông
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Độ lộ nướu khi cười (mm): </span>

                                            <input type="text" name="knm_dolonuoukhicuoi" class="form-control" id=""
                                                   aria-describedby="" placeholder=""
                                                   value="<?= !empty($hosobenhnhan->knm_dolonuoukhicuoi) ? $hosobenhnhan->knm_dolonuoukhicuoi : "" ?>">
                                        </div>
                                        <br>
                                        <div>
                                            <span>Độ lộ răng cửa lúc nghỉ (mm): </span>
                                            <input type="text" name="knm_dolorangcualucnghi" class="form-control" id=""
                                                   aria-describedby="" placeholder=""
                                                   value="<?= !empty($hosobenhnhan->knm_dolorangcualucnghi) ? $hosobenhnhan->knm_dolorangcualucnghi : "" ?>">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Khám chức năng cơ</h6>
                    </div>
                    <?php !empty($hosobenhnhan->knm_canho) ? $arr_knm_canho = explode(",", $hosobenhnhan->knm_canho) : $arr_knm_canho = []; ?>
                    <?php !empty($hosobenhnhan->knm_cancheo) ? $arr_knm_cancheo = explode(",", $hosobenhnhan->knm_cancheo) : $arr_knm_cancheo = []; ?>
                    <?php !empty($hosobenhnhan->knm_dayluoi) ? $arr_knm_dayluoi = explode(",", $hosobenhnhan->knm_dayluoi) : $arr_knm_dayluoi = []; ?>
                    <?php !empty($hosobenhnhan->knm_khac) ? $arr_knm_khac = explode(",", $hosobenhnhan->knm_khac) : $arr_knm_khac = []; ?>
                    <?php !empty($hosobenhnhan->knm_taitrai) ? $arr_knm_taitrai = explode(",", $hosobenhnhan->knm_taitrai) : $arr_knm_taitrai = []; ?>
                    <?php !empty($hosobenhnhan->knm_taiphai) ? $arr_knm_taiphai = explode(",", $hosobenhnhan->knm_taiphai) : $arr_knm_taiphai = []; ?>
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div>
                                            <span>Cường cơ môi: </span>
                                            <select class="form-control" id="" name="knm_cuongcomoi">
                                                <option value="">-- Chọn cơ môi --</option>
                                                <option
                                                    value="Yếu" <?= !empty($hosobenhnhan->knm_cuongcomoi) &&$hosobenhnhan->knm_cuongcomoi == "Yếu" ? "selected" : "" ?>>
                                                    Yếu
                                                </option>
                                                <option
                                                    value="Bình thường" <?= !empty($hosobenhnhan->knm_cuongcomoi) &&$hosobenhnhan->knm_cuongcomoi == "Bình thường" ? "selected" : "" ?>>
                                                    Bình thường
                                                </option>
                                                <option
                                                    value="Mạnh" <?= !empty($hosobenhnhan->knm_cuongcomoi) &&$hosobenhnhan->knm_cuongcomoi == "Mạnh" ? "selected" : "" ?>>
                                                    Mạnh
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Độ hở môi: </span>
                                            <select class="form-control" id="" name="knm_dohomoi">
                                                <option value="">-- Chọn độ hở môi --</option>
                                                <option
                                                    value="Vừa đủ" <?= !empty($hosobenhnhan->knm_dohomoi) &&$hosobenhnhan->knm_dohomoi == "Vừa đủ" ? "selected" : "" ?>>
                                                    Vừa đủ
                                                </option>
                                                <option
                                                    value="Hở" <?= !empty($hosobenhnhan->knm_dohomoi) &&$hosobenhnhan->knm_dohomoi == "Hở" ? "selected" : "" ?>>
                                                    Hở
                                                </option>

                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Thở: </span>
                                            <select class="form-control" id="" name="knm_tho">
                                                <option value="">-- Chọn --</option>
                                                <option
                                                    value="Mũi" <?= !empty($hosobenhnhan->knm_tho) &&$hosobenhnhan->knm_tho == "Mũi" ? "selected" : "" ?>>
                                                    Mũi
                                                </option>
                                                <option
                                                    value="Miệng" <?= !empty($hosobenhnhan->knm_tho) &&$hosobenhnhan->knm_tho == "Miệng" ? "selected" : "" ?>>
                                                    Miệng
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <span>Cắn hở: </span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Phía trước"
                                                   id="" name="knm_canho[]" <?= in_array("Phía trước", $arr_knm_canho) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Phía trước
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Phía sau" id=""
                                                   name="knm_canho[]" <?= in_array("Phía sau", $arr_knm_canho) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Phía sau
                                            </label>
                                        </div>
                                        <br>
                                        <span>Đẩy lưỡi: </span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Phía trước"
                                                   id="" name="knm_dayluoi[]" <?= in_array("Phía trước", $arr_knm_dayluoi) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Phía trước
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Phía sau" id=""
                                                   name="knm_dayluoi[]" <?= in_array("Phía sau", $arr_knm_dayluoi) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Phía sau
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <span>Cắn chéo: </span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Phía trước"
                                                   id="" name="knm_cancheo[]" <?= in_array("Phía trước", $arr_knm_cancheo) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Phía trước
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Phía sau phải" id=""
                                                   name="knm_cancheo[]" <?= in_array("Phía sau phải", $arr_knm_cancheo) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Phía sau phải
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Phía sau trái" id=""
                                                   name="knm_cancheo[]" <?= in_array("Phía sau trái", $arr_knm_cancheo) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Phía sau trái
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <span>Khác: </span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Thói quen môi"
                                                   id="" name="knm_khac[]" <?= in_array("Thói quen môi", $arr_knm_khac) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thói quen môi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lưỡi lớn" id=""
                                                   name="knm_khac[]" <?= in_array("Lưỡi lớn", $arr_knm_khac) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lưỡi lớn
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Thói quen xấu" id=""
                                                   name="knm_khac[]" <?= in_array("Thói quen xấu", $arr_knm_khac) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thói quen xấu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Khám khớp thái dương hàm</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Bình thường" id=""
                                   name="knm_khamkhopduoiham" <?= !empty($hosobenhnhan->knm_khamkhopduoiham) &&$hosobenhnhan->knm_khamkhopduoiham == "Bình thường" ? "checked" : "" ?>>
                            <label class="form-check-label" for="defaultCheck1">
                                Bình thường
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div>
                                            <span>Clicking phải: </span>
                                            <select class="form-control" id="" name="knm_clicking_phai">
                                                <option value="">-- Chọn clicking --</option>
                                                <option
                                                    value="Sớm" <?= !empty($hosobenhnhan->knm_clicking_phai) &&$hosobenhnhan->knm_clicking_phai == "Sớm" ? "selected" : "" ?>>
                                                    Sớm
                                                </option>
                                                <option
                                                    value="Trễ" <?= !empty($hosobenhnhan->knm_clicking_phai) &&$hosobenhnhan->knm_clicking_phai == "Trễ" ? "selected" : "" ?>>
                                                    Trễ
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Clicking trái: </span>
                                            <select class="form-control" id="" name="knm_clicking_trai">
                                                <option value="">-- Chọn clicking --</option>
                                                <option
                                                    value="Sớm" <?= !empty($hosobenhnhan->knm_clicking_trai) &&$hosobenhnhan->knm_clicking_trai == "Sớm" ? "selected" : "" ?>>
                                                    Sớm
                                                </option>
                                                <option
                                                    value="Trễ" <?= !empty($hosobenhnhan->knm_clicking_trai) &&$hosobenhnhan->knm_clicking_trai == "Trễ" ? "selected" : "" ?>>
                                                    Trễ
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div>
                                            <span>Lệch khi há: </span>
                                            <select class="form-control" id="" name="knm_lechkhiha">
                                                <option value="">-- Chọn --</option>
                                                <option
                                                    value="Không" <?= !empty($hosobenhnhan->knm_lechkhiha) &&$hosobenhnhan->knm_lechkhiha == "Không" ? "selected" : "" ?>>
                                                    Không
                                                </option>
                                                <option
                                                    value="Phải" <?= !empty($hosobenhnhan->knm_lechkhiha) &&$hosobenhnhan->knm_lechkhiha == "Phải" ? "selected" : "" ?>>
                                                    Phải
                                                </option>
                                                <option
                                                    value="Trái" <?= !empty($hosobenhnhan->knm_lechkhiha) &&$hosobenhnhan->knm_lechkhiha == "Trái" ? "selected" : "" ?>>
                                                    Trái
                                                </option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <span>Độ há tối đa (mm): </span>
                                            <input type="text" name="knm_dohatoida" class="form-control" id=""
                                                   aria-describedby="" placeholder=""
                                                   value="<?= !empty($hosobenhnhan->knm_dohatoida) ? $hosobenhnhan->knm_dohatoida : "" ?>">
                                        </div>
                                        <br>
                                        <div>
                                            <span>Đau đầu (x mỗi tuần): </span>
                                            <input type="text" name="knm_daudau" class="form-control" id=""
                                                   aria-describedby="" placeholder=""
                                                   value="<?= !empty($hosobenhnhan->knm_daudau) ? $hosobenhnhan->knm_daudau : "" ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <span>Tai trái: </span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Fullness"
                                               id="" name="knm_taitrai[]" <?= in_array("Fullness", $arr_knm_taitrai) ? "checked" : "" ?>>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Fullness
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Ringing" id=""
                                               name="knm_taitrai[]" <?= in_array("Ringing", $arr_knm_taitrai) ? "checked" : "" ?>>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Ringing
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Đau" id=""
                                               name="knm_taitrai[]" <?= in_array("Đau", $arr_knm_taitrai) ? "checked" : "" ?>>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Đau
                                        </label>
                                    </div>
                                    <br>

                                    <span>Tai phải: </span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Fullness"
                                               id="" name="knm_taiphai[]" <?= in_array("Fullness", $arr_knm_taiphai) ? "checked" : "" ?>>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Fullness
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Ringing" id=""
                                               name="knm_taiphai[]" <?= in_array("Ringing", $arr_knm_taiphai) ? "checked" : "" ?>>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Ringing
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Đau" id=""
                                               name="knm_taiphai[]" <?= in_array("Đau", $arr_knm_taiphai) ? "checked" : "" ?>>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Đau
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <span>Ghi chú: </span>
                                        <textarea name="knm_ghichu" class="form-control" id="" rows="4"
                                                  placeholder=""><?= !empty($hosobenhnhan->knm_ghichu) ? $hosobenhnhan->knm_ghichu : "" ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn" style="background-color: #7e1d0c; color: white"
                            onclick="return confirm('Bạn chắc chắn muốn lưu thông tin?')">Lưu thông tin
                    </button>
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
