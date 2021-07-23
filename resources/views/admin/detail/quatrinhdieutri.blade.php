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
                            <a class="nav-link active" style="color: #7e1d0c">Quá trình điều trị</a>
                        </li>
                    </ul>
                </div>

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
                                        <th scope="col" style="text-align: center">Ngày</th>
                                        <th scope="col" style="text-align: center">Bác sĩ</th>
                                        <th scope="col" style="text-align: center">Nhận xét điều trị lần trước</th>
                                        <th scope="col" style="text-align: center">Công việc điều trị lần này</th>
                                        <th scope="col" style="text-align: center">Công việc dự kiến lần tới</th>
                                        <th scope="col" style="text-align: center">Thanh toán</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($quatrinhdieutri)): ?>
                                    <?php foreach ($quatrinhdieutri as $key => $value): ?>
                                    <tr>
                                        <td style="text-align: center"><?= ++$key ?></td>
                                        <td style="text-align: center"><?= !empty($value->ngay) ? date('d/m/Y',strtotime($value->ngay)) : "" ?></td>
                                        <td style="text-align: center"><?= !empty($value->bacsi) ? $value->bacsi : "" ?></td>
                                        <td style="text-align: center"><?= !empty($value->dieutrilantruoc) ? $value->dieutrilantruoc : "" ?></td>
                                        <td style="text-align: center"><?= !empty($value->congviecdieutrilannay) ? $value->congviecdieutrilannay : "" ?></td>
                                        <td style="text-align: center"><?= !empty($value->congviecdukienlantoi) ? $value->congviecdukienlantoi : "" ?></td>
                                        <td style="text-align: center"><?= !empty($value->thanhtoan) ? $value->thanhtoan : "" ?></td>
                                    </tr>
                                    </tbody>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </table>
                                <button style="background-color: #7e1d0c; color: white"
                                        class="btn show-hide-total-top-ten"
                                        data-toggle="modal"
                                        data-target="#addnewModal_guihoso">
                                    Thêm đợt
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

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
                    <h5 class="modal-title">Thêm quá trình điều trị</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('store.quatrinhdieutri')}}">
                    @csrf
                    <div class="modal-body">
                        <div>
                            <span>Ngày: </span>
                            <input type="date" name="ngay" class="form-control" id=""
                                   aria-describedby="" placeholder=""
                                   value="">
                            <br>
                            <span>Bác sĩ: </span>
                            <input type="text" name="bacsi" class="form-control" id=""
                                   aria-describedby="" placeholder=""
                                   value="">
                            <br>
                            <span>Nhận xét điều trị lần trước: </span>
                            <textarea class="form-control" name="dieutrilantruoc"></textarea>
                            <br>
                            <span>Công việc điều trị lần này: </span>
                            <textarea class="form-control" name="congviecdieutrilannay"></textarea>
                            <br>
                            <span>Công việc dự kiến lần tới: </span>
                            <textarea class="form-control" name="congviecdukienlantoi"></textarea>
                            <br>
                            <span>Thanh toán: </span>
                            <input type="text" name="thanhtoan" class="form-control" id=""
                                   aria-describedby="" placeholder=""
                                   value="">
                            <input type="hidden" name="hosobenhnhan_id"
                                   value="<?= !empty($hosobenhnhan->id) ? $hosobenhnhan->id : "" ?>">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <?php if (\Illuminate\Support\Facades\Session::get('loginAuth') == 'drvietthang@gmail.com'): ?>
                        <button type="submit" class="btn " style="background-color: #7e1d0c; color: white" onclick="return confirm('Bạn có chắc chắn muốn thêm đợt điều trị')">Thêm mới
                        </button>
                            <?php endif; ?>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection





