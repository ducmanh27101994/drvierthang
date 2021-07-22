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

                <ul class="navbar-nav ml-auto">

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
                <!-- Content Row -->

                <!-- Content Row -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Hình ảnh</h1>
                    <button style="background-color: #7e1d0c; color: white"
                            class="btn show-hide-total-top-ten text-right"
                            data-toggle="modal"
                            data-target="#addnewModal_guihoso">
                        Thêm hình ảnh
                    </button>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Content Column -->
                    <?php if (!empty($images)): ?>
                    <?php foreach ($images as $value): ?>
                    <div class="col-lg-4 mb-4">

                        <div class="card shadow mb-4">
                             <div class="card-body">
                                    <a  target="_blank" href="{{asset('storage/'.$value->image)}}" class="img-16-9 mfp-image gallery-item" style="background-image:url({{asset('storage/'.$value->image)}}); text-align: center">
                                        <img width="90%" height="250px" src="{{asset('storage/'.$value->image)}}">
                                    </a>
                                     <div style="text-align: center"><?= $value->created_at ?></div>
                                </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
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
                    <h5 class="modal-title">Thêm hình ảnh</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('store.image')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div>
                            <div>
                                <label for="exampleFormControlFile1">Ảnh bệnh nhân</label>
                                <input name="image" type="file" class="form-control-file" id="">
                            </div>
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





