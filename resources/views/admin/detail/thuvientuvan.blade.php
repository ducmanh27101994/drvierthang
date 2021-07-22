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
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="{{route('edit.tuvantaichinh', $hosobenhnhan->id)}}">Tư vấn tài chính</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: #7e1d0c">Thư viện tư vấn</a>
                        </li>

                    </ul>
                </div>

                <style>
                    img{
                        width: 90%;
                        height: 220px;

                    }
                </style>
                <!-- Content Row -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h4>Hình ảnh tư vấn</h4>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 item">
                                        <a target="_blank" href="https://service.egate.global/uploads/avatar/1626929020-bb51cf6aec03e6025d2de670ab72ef7a.jpg" class="img-16-9 mfp-image gallery-item" style="background-image:url(https://service.egate.global/uploads/avatar/1626929020-bb51cf6aec03e6025d2de670ab72ef7a.jpg);">
                                            <img src="https://service.egate.global/uploads/avatar/1626929020-bb51cf6aec03e6025d2de670ab72ef7a.jpg">
                                        </a>
                                        <div>Mắc cài kim loại</div>
                                    </div>
                                    <div class="col-md-6 item">
                                        <a target="_blank" href="https://service.egate.global/uploads/avatar/1626929949-1f5467f2b6fe4ba2bdf81e9c013340e6.jpg" class="img-16-9 mfp-image gallery-item" style="background-image:url(https://service.egate.global/uploads/avatar/1626929949-1f5467f2b6fe4ba2bdf81e9c013340e6.jpg);">
                                            <img src="https://service.egate.global/uploads/avatar/1626929949-1f5467f2b6fe4ba2bdf81e9c013340e6.jpg">
                                        </a>
                                        <div>Mắc cài kim loại có nắp</div>
                                    </div>
                                    <div class="col-md-6 item">
                                        <a target="_blank" href="https://service.egate.global/uploads/avatar/1626929999-e1bd5c238b7e68fa2293a1be48d2255a.jpg" class="img-16-9 mfp-image gallery-item" style="background-image:url(https://service.egate.global/uploads/avatar/1626929999-e1bd5c238b7e68fa2293a1be48d2255a.jpg);">
                                            <img src="https://service.egate.global/uploads/avatar/1626929999-e1bd5c238b7e68fa2293a1be48d2255a.jpg">
                                        </a>
                                        <div>Mắc cài mặt lưỡi</div>
                                    </div>
                                    <div class="col-md-6 item">
                                        <a target="_blank" href="https://service.egate.global/uploads/avatar/1626930047-994bb40807cd53a3dd1ffaa558882769.jpg" class="img-16-9 mfp-image gallery-item" style="background-image:url(https://service.egate.global/uploads/avatar/1626930047-994bb40807cd53a3dd1ffaa558882769.jpg);">
                                            <img src="https://service.egate.global/uploads/avatar/1626930047-994bb40807cd53a3dd1ffaa558882769.jpg">
                                        </a>
                                        <div>Mắc cài sứ</div>
                                    </div>
                                    <div class="col-md-6 item">
                                        <a target="_blank" href="https://service.egate.global/uploads/avatar/1626930178-8cd4e87394a81d4cbd75ce4bbbf948fb.jpg" class="img-16-9 mfp-image gallery-item" style="background-image:url(https://service.egate.global/uploads/avatar/1626930178-8cd4e87394a81d4cbd75ce4bbbf948fb.jpg);">
                                            <img src="https://service.egate.global/uploads/avatar/1626930178-8cd4e87394a81d4cbd75ce4bbbf948fb.jpg">
                                        </a>
                                        <div>Mắc cài sứ có nắp</div>
                                    </div>
                                    <div class="col-md-6 item">
                                        <a target="_blank" href="https://service.egate.global/uploads/avatar/1626930117-56d0b13d8bc0df484e1554af1f9ffb8b.jpg" class="img-16-9 mfp-image gallery-item" style="background-image:url(https://service.egate.global/uploads/avatar/1626930117-56d0b13d8bc0df484e1554af1f9ffb8b.jpg);">
                                            <img src="https://service.egate.global/uploads/avatar/1626930117-56d0b13d8bc0df484e1554af1f9ffb8b.jpg">
                                        </a>
                                        <div>Mắc cài tự khoá</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                    <h4>Video tư vấn</h4>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 item">
                                        <iframe width="90%" height="220px" src="https://www.youtube.com/embed/vy0LQnb48LE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <span>Bionator</span>
                                    </div>
                                    <div class="col-md-6 item">
                                        <iframe width="90%" height="220px" src="https://www.youtube.com/embed/hhBgDTOHjy8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <div>Cách chải răng</div>
                                    </div>
                                    <div class="col-md-6 item">
                                        <iframe width="90%" height="220px" src="https://www.youtube.com/embed/wlUVEP5AtsY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <div>Cách dán sáp nha khoa</div>
                                    </div>
                                    <div class="col-md-6 item">
                                        <iframe width="90%" height="220px" src="https://www.youtube.com/embed/zAZPuSZDnEM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <div>Cách dùng chỉ nha khoa</div>
                                    </div>
                                    <div class="col-md-6 item">
                                        <iframe width="90%" height="220px" src="https://www.youtube.com/embed/VbMl76l7b6I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <div>Gắn mắc cài</div>
                                    </div>
                                    <div class="col-md-6 item">
                                        <iframe width="90%" height="220px" src="https://www.youtube.com/embed/TgAVuhDjMA4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <div>Mắc thun chéo</div>
                                    </div>
                                </div>
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
                        <button type="submit" class="btn " style="background-color: #7e1d0c; color: white">Thêm mới
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection





