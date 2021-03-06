@extends('admin.master')
@section('content')


    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

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
                    <h1 class="h3 mb-0 text-gray-800">T???o h??? s??</h1>
                </div>

                <!-- Content Row -->

                <!-- Content Row -->
                <form method="post" action="{{route('hosobenhnhan.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <!-- Area Chart -->

                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-12">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Th??ng tin h??nh ch??nh</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div>
                                            <span>Ng??y b???t ?????u: </span>
                                            <input type="date" name="date_start" class="form-control" id=""
                                                   aria-describedby="" placeholder="">
                                            <br>
                                        </div>

                                        <div>
                                            <span>H??? v?? t??n: </span>
                                            <input type="text" name="customer_name" class="form-control" id=""
                                                   aria-describedby="" placeholder="" required>
                                            <br>
                                        </div>

                                        <div>
                                            <span>Ng??y sinh: </span>
                                            <input type="date" name="date_of_birth" class="form-control" id=""
                                                   aria-describedby="" placeholder="">
                                            <br>
                                        </div>

                                        <div>
                                            <span>?????a ch???: </span>
                                            <input type="text" name="address" class="form-control" id=""
                                                   aria-describedby="" placeholder="?????a ch???">
                                            <br>
                                        </div>

                                        <div>
                                            <span>T???nh th??nh: </span>
                                            <input type="text" name="area" class="form-control" id=""
                                                   aria-describedby="" placeholder="">
                                            <br>
                                        </div>

                                        <div>
                                            <span>S??? ??i???n tho???i: </span>
                                            <input type="text" name="phone" class="form-control" id=""
                                                   aria-describedby="" placeholder="" required>
                                            <br>
                                        </div>

                                        <div>
                                            <span>Email: </span>
                                            <input type="email" name="email" class="form-control" id=""
                                                   aria-describedby="" placeholder="" required>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div>
                                            <span>T??n b??c s??: </span>
                                            <input type="text" name="bacsi" class="form-control" id=""
                                                   aria-describedby="" placeholder="">
                                            <br>
                                        </div>

                                        <div>
                                            <span>Gi???i t??nh: </span>
                                            <select class="form-control" id="" name="gioi_tinh">
                                                <option value="">-- Ch???n gi???i t??nh --</option>
                                                <option value="Nam">Nam</option>
                                                <option value="N???">N???</option>
                                            </select>
                                            <br>
                                        </div>

                                        <div>
                                            <span>Qu???n: </span>
                                            <input type="text" name="quan" class="form-control" id=""
                                                   aria-describedby="" placeholder="Qu???n">
                                            <br>
                                        </div>

                                        <div>
                                            <span>Qu???c gia: </span>
                                            <input type="text" name="quoc_gia" class="form-control" id=""
                                                   aria-describedby="" placeholder="">
                                            <br>
                                        </div>

                                        <div>
                                            <span>S??? ??i???n tho???i b??n: </span>
                                            <input type="text" name="so_dien_thoai_ban" class="form-control" id=""
                                                   aria-describedby="" placeholder="">
                                            <br>
                                        </div>

                                        <div>
                                            <span>D??n t???c: </span>
                                            <input type="text" name="dan_toc" class="form-control" id=""
                                                   aria-describedby="" placeholder="">
                                            <br>
                                        </div>

                                        <div>
                                            <label for="exampleFormControlFile1">???nh c?? nh??n</label>
                                            <input name="image" type="file" class="form-control-file" id="">
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

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Ti???u s??? y khoa</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="???? ph???u thu???t" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                ???? ph???u thu???t
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="U???ng thu???c ng???a thai"
                                                   id="" name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                U???ng thu???c ng???a thai
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Hen suy???n" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Hen suy???n
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="M??u kh?? ????ng" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                M??u kh?? ????ng
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="H??a tr??? li???u" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                H??a tr??? li???u
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="X??? tr???" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                X??? tr???
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="B???nh l?? h?? h???p" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                B???nh l?? h?? h???p
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="B???nh l?? ti??u h??a"
                                                   id="" name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                B???nh l?? ti??u h??a
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lao" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lao
                                            </label>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Cho con b??" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Cho con b??
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="C?? thai" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                C?? thai
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ti???u ???????ng" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ti???u ???????ng
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="?????ng kinh" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                ?????ng kinh
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Huy???t h???u" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Huy???t h???u
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Cao huy???t ??p" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Cao huy???t ??p
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="B???nh l?? tu???n ho??n"
                                                   id="" name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                B???nh l?? tu???n ho??n
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="HIV/AIDS" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                HIV/AIDS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="D??? ???ng" id=""
                                                   name="tieu_su_y_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                D??? ???ng
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <select class="form-control" id="" name="status">
                                    <option value="" style="font-weight: bold">-- Tr???ng th??i b???nh nh??n --</option>
                                    <option value="Kh??m" style="font-weight: bold">Kh??m</option>

                                    <option value="Ch???nh nha" style="font-weight: bold">Ch???nh nha</option>
                                    <option value="Ch???nh nha - Thu th???p d??? li???u" >-- Thu th???p d??? li???u</option>
                                    <option value="Ch???nh nha - G???i k??? ho???ch ??i???u tr???" >-- G???i k??? ho???ch ??i???u tr???</option>
                                    <option value="Ch???nh nha - ???? g??n m???c c??i" >-- ???? g??n m???c c??i</option>
                                    <option value="Ch???nh nha - Ho??n t???t" >-- Ho??n t???t</option>
                                    <option value="Ch???nh nha - H???y ??i???u tr???" >-- H???y ??i???u tr???</option>

                                    <option value="Ph???c h??nh" style="font-weight: bold">Ph???c h??nh</option>
                                    <option value="Ph???c h??nh - ??ang l??m" >-- ??ang l??m</option>
                                    <option value="Ph???c h??nh - Ho??n t???t" >-- Ho??n t???t</option>
                                    <option value="Implant" style="font-weight: bold">Implant</option>
                                    <option value="N???i nha" style="font-weight: bold">N???i nha</option>
                                    <option value="Nha chu" style="font-weight: bold">Nha chu</option>
                                    <option value="T???ng qu??t" style="font-weight: bold">T???ng qu??t</option>
                                    <option value="T???y tr???ng" >-- T???y tr???ng</option>
                                    <option value="Tr??m r??ng" >-- Tr??m r??ng</option>
                                    <option value="Nh??? r??ng" >-- Nh??? r??ng</option>
                                    <option value="C???o v??i r??ng" >-- C???o v??i r??ng</option>
                                    <option value="Kh??c" >-- Kh??c</option>
                                </select>
                            </div>

                        </div>
                        <?php if (\Illuminate\Support\Facades\Session::get('loginAuth') == 'drvietthang@gmail.com'): ?>
                        <button type="submit" class="btn" style="background-color: #7e1d0c; color: white">T???o h??? s??</button>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <!-- Approach -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold" style="color: #7e1d0c">Ti???u s??? nha khoa</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="H??i mi???ng" id=""
                                                   name="tieu_su_nha_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                H??i mi???ng
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ch???y m??u n?????u" id=""
                                                   name="tieu_su_nha_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ch???y m??u n?????u
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="R??ng nh???y c???m" id=""
                                                   name="tieu_su_nha_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                R??ng nh???y c???m
                                            </label>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="B???nh l?? nha chu"
                                                   id="" name="tieu_su_nha_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                B???nh l?? nha chu
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Nghi???n r??ng" id=""
                                                   name="tieu_su_nha_khoa[]">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Nghi???n r??ng
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div>
                                            <span>L?? do ?????n kh??m: </span>
                                            <input type="text" name="ly_do_den_kham" class="form-control" id=""
                                                   aria-describedby="" placeholder="">
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <span>Thu???c ??ang s??? d???ng: </span>
                                            <textarea name="thuoc_dang_su_dung" class="form-control" id="" rows="4"
                                                      placeholder=""></textarea>
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
