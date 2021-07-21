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
                <a href="{{route('hosobenhnhan')}}" type="button" class="btn btn-danger" style="background-color: #7e1d0c">Tạo hồ sơ mới</a>

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
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo \Illuminate\Support\Facades\Session::get('loginAuth')   ?></span>
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
                    <h1 class="h3 mb-0 text-gray-800">Hành chính</h1>

                    <a href="{{asset('storage/'.$hosobenhnhan->image)}}" target="_blank">
                        <img style="height: 100px" src="{{asset('storage/'.$hosobenhnhan->image)}}" alt="">
                    </a>
                </div>


                <!-- Content Row -->

                <!-- Content Row -->
                <form method="post" action="{{route('edit.hanhchinh', $hosobenhnhan->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <!-- Area Chart -->

                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-12">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Thông tin hành chính</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div>
                                                <span>Ngày bắt đầu: </span>
                                                <input type="date" name="date_start" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->date_start) ? $hosobenhnhan->date_start : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Họ và tên: </span>
                                                <input type="text" name="customer_name" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->customer_name) ? $hosobenhnhan->customer_name : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Ngày sinh: </span>
                                                <input type="date" name="date_of_birth" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->date_of_birth) ? $hosobenhnhan->date_of_birth : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Địa chỉ: </span>
                                                <input type="text" name="address" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->address) ? $hosobenhnhan->address : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Tỉnh thành: </span>
                                                <input type="text" name="area" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->area) ? $hosobenhnhan->area : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Số điện thoại: </span>
                                                <input type="text" name="phone" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->phone) ? $hosobenhnhan->phone : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Email: </span>
                                                <input type="email" name="email" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->email) ? $hosobenhnhan->email : "" ?>">
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div>
                                                <span>Tên bác sĩ: </span>
                                                <input type="text" name="bacsi" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->bacsi) ? $hosobenhnhan->bacsi : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Giới tính: </span>
                                                <select class="form-control" id="" name="gioi_tinh">
                                                    <option value="">-- Chọn giới tính --</option>
                                                    <option value="Nam" <?= $hosobenhnhan->gioi_tinh == "Nam" ? "selected" : "" ?>>Nam</option>
                                                    <option value="Nữ" <?= $hosobenhnhan->gioi_tinh == "Nữ" ? "selected" : "" ?>>Nữ</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div>
                                                <span>Quận: </span>
                                                <input type="text" name="quan" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->quan) ? $hosobenhnhan->quan : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Quốc gia: </span>
                                                <input type="text" name="quoc_gia" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->quoc_gia) ? $hosobenhnhan->quoc_gia : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Số điện thoại bàn: </span>
                                                <input type="text" name="so_dien_thoai_ban" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->so_dien_thoai_ban) ? $hosobenhnhan->so_dien_thoai_ban : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <span>Dân tộc: </span>
                                                <input type="text" name="dan_toc" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->dan_toc) ? $hosobenhnhan->dan_toc : "" ?>">
                                                <br>
                                            </div>

                                            <div>
                                                <label for="exampleFormControlFile1">Ảnh cá nhân</label>
                                                <input name="image" type="file" class="form-control-file" id="" value="<?= !empty($hosobenhnhan->image) ? $hosobenhnhan->image : "" ?>">
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Pie Chart -->
                    </div>
                    <br>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <?php !empty($hosobenhnhan->tieu_su_y_khoa) ? $arr_tsyk = explode(",", $hosobenhnhan->tieu_su_y_khoa) : $arr_tsyk = []; ?>
                            <?php !empty($hosobenhnhan->tieu_su_nha_khoa) ? $arr_tsnk = explode(",", $hosobenhnhan->tieu_su_nha_khoa) : $arr_tsnk = []; ?>

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Tiểu sử y khoa</h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Đã phẫu thuật" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Đã phẫu thuật", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Đã phẫu thuật
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Uống thuốc ngừa thai"
                                                       id="" name="tieu_su_y_khoa[]" <?= in_array("Uống thuốc ngừa thai", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Uống thuốc ngừa thai
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Hen suyễn" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Hen suyễn", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Hen suyễn
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Máu khó đông" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Máu khó đông", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Máu khó đông
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Hóa trị liệu" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Hóa trị liệu", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Hóa trị liệu
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Xạ trị" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Xạ trị", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Xạ trị
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Bệnh lý hô hấp" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Bệnh lý hô hấp", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Bệnh lý hô hấp
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Bệnh lý tiêu hóa"
                                                       id="" name="tieu_su_y_khoa[]" <?= in_array("Bệnh lý tiêu hóa", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Bệnh lý tiêu hóa
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Lao" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Lao", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Lao
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Cho con bú" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Cho con bú", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Cho con bú
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Có thai" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Có thai", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Có thai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Tiểu đường" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Tiểu đường", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tiểu đường
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Động kinh" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Động kinh", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Động kinh
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Huyết hữu" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Huyết hữu", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Huyết hữu
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Cao huyết áp" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Cao huyết áp", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Cao huyết áp
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Bệnh lý tuần hoàn"
                                                       id="" name="tieu_su_y_khoa[]" <?= in_array("Bệnh lý tuần hoàn", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Bệnh lý tuần hoàn
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="HIV/AIDS" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("HIV/AIDS", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    HIV/AIDS
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Dị ứng" id=""
                                                       name="tieu_su_y_khoa[]" <?= in_array("Dị ứng", $arr_tsyk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Dị ứng
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <select class="form-control" id="" name="status">
                                        <option value="" style="font-weight: bold">-- Trạng thái bệnh nhân --</option>
                                        <option value="Khám" style="font-weight: bold" <?= $hosobenhnhan->status == "Khám" ? "selected" : "" ?>>Khám</option>

                                        <option value="Chỉnh nha" style="font-weight: bold" <?= $hosobenhnhan->status == "Chỉnh nha" ? "selected" : "" ?>>Chỉnh nha</option>
                                        <option value="Chỉnh nha - Thu thập dữ liệu" <?= $hosobenhnhan->status == "Chỉnh nha - Thu thập dữ liệu" ? "selected" : "" ?>>-- Thu thập dữ liệu</option>
                                        <option value="Chỉnh nha - Gửi kế hoạch điều trị" <?= $hosobenhnhan->status == "Chỉnh nha - Gửi kế hoạch điều trị" ? "selected" : "" ?>>-- Gửi kế hoạch điều trị</option>
                                        <option value="Chỉnh nha - Đã gán mắc cài" <?= $hosobenhnhan->status == "Chỉnh nha - Đã gán mắc cài" ? "selected" : "" ?>>-- Đã gán mắc cài</option>
                                        <option value="Chỉnh nha - Hoàn tất" <?= $hosobenhnhan->status == "Chỉnh nha - Hoàn tất" ? "selected" : "" ?>>-- Hoàn tất</option>
                                        <option value="Chỉnh nha - Hủy điều trị" <?= $hosobenhnhan->status == "Chỉnh nha - Hủy điều trị" ? "selected" : "" ?>>-- Hủy điều trị</option>

                                        <option value="Phục hình" style="font-weight: bold" <?= $hosobenhnhan->status == "Phục hình" ? "selected" : "" ?>>Phục hình</option>
                                        <option value="Phục hình - Đang làm" <?= $hosobenhnhan->status == "Phục hình - Đang làm" ? "selected" : "" ?>>-- Đang làm</option>
                                        <option value="Phục hình - Hoàn tất" <?= $hosobenhnhan->status == "Phục hình - Hoàn tất" ? "selected" : "" ?>>-- Hoàn tất</option>

                                        <option value="Tổng quát" style="font-weight: bold" <?= $hosobenhnhan->status == "Tổng quát" ? "selected" : "" ?>>Tổng quát</option>
                                        <option value="Tẩy trắng" <?= $hosobenhnhan->status == "Tẩy trắng" ? "selected" : "" ?>>-- Tẩy trắng</option>
                                        <option value="Trám răng" <?= $hosobenhnhan->status == "Trám răng" ? "selected" : "" ?>>-- Trám răng</option>
                                        <option value="Nhổ răng" <?= $hosobenhnhan->status == "Nhổ răng" ? "selected" : "" ?>>-- Nhổ răng</option>
                                        <option value="Cạo vôi răng" <?= $hosobenhnhan->status == "Cạo vôi răng" ? "selected" : "" ?>>-- Cạo vôi răng</option>
                                        <option value="Khác" <?= $hosobenhnhan->status == "Khác" ? "selected" : "" ?>>-- Khác</option>
                                    </select>
                                </div>

                            </div>
                            <button type="submit" class="btn" style="background-color: #7e1d0c; color: white" onclick="return confirm('Bạn có chắc chắn thay đổi thông tin?')">Lưu thay đổi</button>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold" style="color: #7e1d0c">Tiểu sử nha khoa</h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Hôi miệng" id=""
                                                       name="tieu_su_nha_khoa[]" <?= in_array("Hôi miệng", $arr_tsnk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Hôi miệng
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Chảy máu nướu" id=""
                                                       name="tieu_su_nha_khoa[]" <?= in_array("Chảy máu nướu", $arr_tsnk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Chảy máu nướu
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Răng nhạy cảm" id=""
                                                       name="tieu_su_nha_khoa[]" <?= in_array("Răng nhạy cảm", $arr_tsnk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Răng nhạy cảm
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Bệnh lý nha chu"
                                                       id="" name="tieu_su_nha_khoa[]" <?= in_array("Bệnh lý nha chu", $arr_tsnk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Bệnh lý nha chu
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Nghiến răng" id=""
                                                       name="tieu_su_nha_khoa[]" <?= in_array("Nghiến răng", $arr_tsnk) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Nghiến răng
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <div>
                                                <span>Lý do đến khám: </span>
                                                <input type="text" name="ly_do_den_kham" class="form-control" id=""
                                                       aria-describedby="" placeholder="" value="<?= !empty($hosobenhnhan->ly_do_den_kham) ? $hosobenhnhan->ly_do_den_kham : "" ?>">
                                                <br>
                                            </div>
                                            <div class="form-group">
                                                <span>Các thuốc đang sử dụng: </span>
                                            <textarea name="thuoc_dang_su_dung" class="form-control" id="" rows="4"
                                                      placeholder=""><?= !empty($hosobenhnhan->thuoc_dang_su_dung) ? $hosobenhnhan->thuoc_dang_su_dung : "" ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- /.container-fluid -->
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
