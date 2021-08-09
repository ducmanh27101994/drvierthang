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
                        Thêm albums
                    </button>
                </div>
                <style>
                    img {
                        width: 461px;
                        height: 370px;
                        object-fit: cover;
                        padding: 20px;
                    }

                </style>
                <!-- Content Row -->
                <div class="row">
                    <!-- Content Column -->
                    <?php if (!empty($albums)): ?>
                    <div class="col-lg-12 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <?php foreach ($albums as $key => $value): ?>
                                            <form ></form>
                                            <a class="list-group-item list-group-item-action " id=""
                                               href="{{route('list.image',[$hosobenhnhan->id, $value->id])}}" role="tab"
                                            >{{$value->name}}</a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <?php if (!empty($image)): ?>

                                    <div class="col-10" style="text-align: center;background-color: #f2f2f2">
                                        <?php foreach ($image as $item): ?>
                                        <a target="_blank" href="{{asset('storage/'.$item->image)}}">
                                            <img src="{{asset('storage/'.$item->image)}}">
                                        </a>
                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa ảnh này?')" href="{{route('delete.image', $item->id)}}" class="position-absolute" style="color: red; margin-left: -46px; margin-top: 27px; font-weight: bold"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <?php endforeach; ?>

                                    </div>
                                    <?php endif; ?>


                                </div>

                            </div>
                        </div>

                    </div>
                    <?php endif; ?>

                </div>

                <button style="background-color: #7e1d0c; color: white"
                        class="btn show-hide-total-top-ten text-right"
                        data-toggle="modal"
                        data-target="#addnewModal_update">
                    Uploads Ảnh
                </button>
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
                    <h5 class="modal-title">Thêm albums</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('store.albums')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div>
                            <div>
                                <label for="exampleFormControlFile1">Tên albums</label>
                                <input name="name" type="text" class="form-control" id="" required>
                            </div>
                            <br>
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

    <div id="addnewModal_update" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm albums</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('store.image')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div>
                            <div>
                                <label for="exampleFormControlFile1">Chọn albums</label>
                                <select class="form-control" name="album_id" required>
                                    <?php if (!empty($albums)): ?>
                                    <?php foreach ($albums as $item): ?>
                                    <option value="<?= $item->id ?>"><?= $item->name ?></option>
                                    <?php endforeach; ?><?php endif; ?>
                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="exampleFormControlFile1">Upload ảnh</label>
                                <input name="images[]" class="form-control-file" multiple="multiple" type="file"
                                       required>

                            </div>
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





