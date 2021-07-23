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
                            <a class="nav-link active" style="color: #7e1d0c">Tư vấn tài chính</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index.thuvientuvan', $hosobenhnhan->id)}}" style="color: black">Thư viện tư vấn</a>
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
                                <table class="table table-striped">
                                    <thead style="background-color: #7e1d0c; color: white">
                                    <tr>
                                        <th scope="col" style="text-align: center">#</th>
                                        <th scope="col" style="text-align: center">Tên danh mục</th>
                                        <th scope="col" style="text-align: center">Giá</th>
                                        <th scope="col" style="text-align: center">Số lượng</th>
                                        <th scope="col" style="text-align: center">Giảm</th>
                                        <th scope="col" style="text-align: center">Thành tiền</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($tuvantaichinh)): ?>
                                    <?php foreach ($tuvantaichinh as $key => $value): ?>
                                    <tr>
                                        <td style="text-align: center"><?= ++$key ?></td>
                                        <td style="text-align: center"><?= !empty($value->tvtc_tendanhmuc) ? $value->tvtc_tendanhmuc : "" ?></td>
                                        <td style="text-align: center"><?= !empty($value->tvtc_gia) ? $value->tvtc_gia : "" ?></td>
                                        <td style="text-align: center"><?= !empty($value->tvtc_soluong) ? $value->tvtc_soluong : "" ?></td>
                                        <td style="text-align: center"><?= !empty($value->tvtc_giam) ? $value->tvtc_giam : "" ?></td>
                                        <td style="text-align: center"><?= !empty($value->tvtc_thanhtien) ? $value->tvtc_thanhtien : "" ?></td>


                                    </tr>
                                    </tbody>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </table>
                                <button style="background-color: #7e1d0c; color: white"
                                        class="btn show-hide-total-top-ten"
                                        data-toggle="modal"
                                        data-target="#addnewModal_guihoso">
                                    Thêm mới
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Mong muốn điều trị</h6>
                </div>
                <form method="post" action="{{route('update.tuvantaichinh', $hosobenhnhan->id)}}">
                    @csrf
                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">
                        <!-- Project Card Example -->
                        <?php !empty($hosobenhnhan->tvtc_mongmuondieutri) ? $arr_tvtc_mongmuondieutri = explode(",", $hosobenhnhan->tvtc_mongmuondieutri) : $arr_tvtc_mongmuondieutri = []; ?>
                        <div class="card shadow mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Không nhổ răng"
                                                   id=""
                                                   name="tvtc_mongmuondieutri[]" <?= in_array("Không nhổ răng", $arr_tvtc_mongmuondieutri) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Không nhổ răng
                                            </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Phẫu thuật chỉnh nha"
                                                   id=""
                                                   name="tvtc_mongmuondieutri[]" <?= in_array("Phẫu thuật chỉnh nha", $arr_tvtc_mongmuondieutri) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Phẫu thuật chỉnh nha
                                            </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Nhổ răng"
                                                   id=""
                                                   name="tvtc_mongmuondieutri[]" <?= in_array("Nhổ răng", $arr_tvtc_mongmuondieutri) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Nhổ răng
                                            </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Cắt vỏ xương" id=""
                                                   name="tvtc_mongmuondieutri[]" <?= in_array("Cắt vỏ xương", $arr_tvtc_mongmuondieutri) ? "checked" : "" ?>>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Cắt vỏ xương
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <span>Thời gian tối đa: </span>
                                        <input type="text" name="tvtc_thoigiantoida" class="form-control" id=""
                                               aria-describedby="" placeholder=""
                                               value="<?= !empty($hosobenhnhan->tvtc_thoigiantoida) ? $hosobenhnhan->tvtc_thoigiantoida : "" ?>">
                                        <br>
                                        <span>Chi phí dự trù: </span>
                                        <input type="text" name="tvtc_chiphidutru" class="form-control" id=""
                                               aria-describedby="" placeholder=""
                                               value="<?= !empty($hosobenhnhan->tvtc_chiphidutru) ? $hosobenhnhan->tvtc_chiphidutru : "" ?>">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <span>Ghi chú: </span>
                                    <textarea name="tvtc_ghichu" class="form-control" id="" rows="4"
                                              placeholder=""><?= !empty($hosobenhnhan->tvtc_ghichu) ? $hosobenhnhan->tvtc_ghichu : "" ?></textarea>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <!-- Approach -->
                        <div class="card shadow mb-4">
                            <div class="col-md-12">
                                <div class="card-body">


                                    <span>Số lần thanh toán:</span>
                                    <input type="text" name="tvtc_solanthanhtoan" class="form-control" id=""
                                           aria-describedby="" placeholder=""
                                           value="<?= !empty($hosobenhnhan->tvtc_solanthanhtoan) ? $hosobenhnhan->tvtc_solanthanhtoan : "" ?>">
                                    <br>
                                    <span>Các đợt thanh toán: </span>
                                    <textarea name="tvtc_cacdotthanhtoann" class="form-control" id="" rows="4"
                                              placeholder=""><?= !empty($hosobenhnhan->tvtc_cacdotthanhtoann) ? $hosobenhnhan->tvtc_cacdotthanhtoann : "" ?></textarea>

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


    <div id="addnewModal_guihoso" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm danh mục tài chính</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('store.tuvantaichinh')}}">
                    @csrf
                    <div class="modal-body">
                        <div>
                            <span>Tên danh mục: </span>
                            <input type="text" name="tvtc_tendanhmuc" class="form-control" id=""
                                   aria-describedby="" placeholder=""
                                   value="">
                            <br>
                            <span>Giá: </span>
                            <input type="text" name="tvtc_gia" class="form-control" id=""
                                   aria-describedby="" placeholder=""
                                   value="">
                            <br>
                            <span>Số lượng: </span>
                            <input type="number" name="tvtc_soluong" class="form-control" id=""
                                   aria-describedby="" placeholder=""
                                   value="">
                            <br>
                            <span>Giảm: </span>
                            <input type="text" name="tvtc_giam" class="form-control" id=""
                                   aria-describedby="" placeholder=""
                                   value="">
                            <br>
                            <span>Thành tiền: </span>
                            <input type="text" name="tvtc_thanhtien" class="form-control" id=""
                                   aria-describedby="" placeholder=""
                                   value="">
                            <input type="hidden" name="hosobenhnhan_id"
                                   value="<?= !empty($hosobenhnhan->id) ? $hosobenhnhan->id : "" ?>">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <?php if (\Illuminate\Support\Facades\Session::get('loginAuth') == 'drvietthang@gmail.com'): ?>
                        <button type="submit" class="btn " style="background-color: #7e1d0c; color: white">Thêm mới
                        </button>
                            <?php endif; ?>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection





