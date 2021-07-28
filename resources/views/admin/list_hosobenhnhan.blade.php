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
                <?php if (\Illuminate\Support\Facades\Session::get('loginAuth') == 'drvietthang@gmail.com'): ?>
                <a href="{{route('hosobenhnhan')}}" type="button" class="btn btn-danger" style="background-color: #7e1d0c">Tạo hồ sơ mới</a>
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
<?php
                $customer_name_search = !empty($_GET['customer_name_search']) ? $_GET['customer_name_search'] : "";
                $status = !empty($_GET['status']) ? $_GET['status'] : "";
                ?>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Danh sách hồ sơ bệnh nhân</h1>

{{--                    <button class="show-hide-total-all btn btn-success dropdown-toggle"--}}
{{--                            onclick="$('#lockdulieu').toggleClass('show');">--}}
{{--                        <span class="fa fa-filter"></span>--}}
{{--                        Lọc dữ liệu--}}
{{--                    </button>--}}
                    <div class="dropdown show">
                        <button class="show-hide-total-all btn btn-success dropdown-toggle"
                                onclick="$('#lockdulieu').toggleClass('show');">
                            <span class="fa fa-filter"></span>
                            &nbsp;Tìm kiếm
                        </button>
                        <div id="lockdulieu" class="dropdown-menu dropdown-menu-right" style="padding:15px;min-width:400px;">
                            <form method="get" action="{{route('search.hosobenhnhan')}}">
                                @csrf
                            <label>Họ và tên: </label>
                            <input type="text" name="customer_name_search" class="form-control"
                                       value="<?= !empty($customer_name_search) ? $customer_name_search : "" ?>">

                            <br>
                            <label>Trạng thái: </label>
                            <select class="form-control" id="" name="status">
                                <option value="" style="font-weight: bold" >-- Trạng thái bệnh nhân --</option>
                                <option value="Khám" style="font-weight: bold" <?= !empty($status) && $status == "Khám" ? "selected" : '' ?> >Khám</option>

                                <option value="Chỉnh nha" style="font-weight: bold" <?= !empty($status) && $status == "Chỉnh nha" ? "selected" : '' ?>>Chỉnh nha</option>
                                <option value="Chỉnh nha - Thu thập dữ liệu" <?= !empty($status) && $status == "Chỉnh nha - Thu thập dữ liệu" ? "selected" : '' ?>>-- Thu thập dữ liệu</option>
                                <option value="Chỉnh nha - Gửi kế hoạch điều trị" <?= !empty($status) && $status == "Chỉnh nha - Gửi kế hoạch điều trị" ? "selected" : '' ?>>-- Gửi kế hoạch điều trị</option>
                                <option value="Chỉnh nha - Đã gán mắc cài" <?= !empty($status) && $status == "Chỉnh nha - Đã gán mắc cài" ? "selected" : '' ?>>-- Đã gán mắc cài</option>
                                <option value="Chỉnh nha - Hoàn tất" <?= !empty($status) && $status == "Chỉnh nha - Hoàn tất" ? "selected" : '' ?>>-- Hoàn tất</option>
                                <option value="Chỉnh nha - Hủy điều trị" <?= !empty($status) && $status == "Chỉnh nha - Hủy điều trị" ? "selected" : '' ?>>-- Hủy điều trị</option>

                                <option value="Phục hình" style="font-weight: bold" <?= !empty($status) && $status == "Phục hình" ? "selected" : '' ?>>Phục hình</option>
                                <option value="Phục hình - Đang làm" <?= !empty($status) && $status == "Phục hình - Đang làm" ? "selected" : '' ?>>-- Đang làm</option>
                                <option value="Phục hình - Hoàn tất" <?= !empty($status) && $status == "Phục hình - Hoàn tất" ? "selected" : '' ?>>-- Hoàn tất</option>

                                <option value="Tổng quát" style="font-weight: bold"<?= !empty($status) && $status == "Tổng quát" ? "selected" : '' ?>>Tổng quát</option>
                                <option value="Tẩy trắng" <?= !empty($status) && $status == "Tẩy trắng" ? "selected" : '' ?>>-- Tẩy trắng</option>
                                <option value="Trám răng" <?= !empty($status) && $status == "Trám răng" ? "selected" : '' ?>>-- Trám răng</option>
                                <option value="Nhổ răng" <?= !empty($status) && $status == "Nhổ răng" ? "selected" : '' ?>>-- Nhổ răng</option>
                                <option value="Cạo vôi răng" <?= !empty($status) && $status == "Cạo vôi răng" ? "selected" : '' ?>>-- Cạo vôi răng</option>
                                <option value="Khác" <?= !empty($status) && $status == "Khác" ? "selected" : '' ?>>-- Khác</option>
                            </select>
                            <br>
                            <button class="btn btn-info" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Tìm Kiếm
                            </button>
                            </form>
                        </div>
                    </div>
                </div>

                <style>
                    img {
                        width: 70px;
                        height: 70px;
                        object-fit: cover;
                    }
                </style>

                <!-- Content Row -->
                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-12">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">Tổng: @if(!empty($count_hosobenhnhan)) {{$count_hosobenhnhan}} @else 0 @endif</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead class="" style="background-color: #7e1d0c; color: white" >
                                            <tr>
                                                <th scope="col" style="text-align: center">#</th>
                                                <th scope="col" style="text-align: center">Ảnh</th>
                                                <th scope="col" style="text-align: center">Tên bệnh nhân</th>
                                                <th scope="col" style="text-align: center">Giới tính</th>
                                                <th scope="col" style="text-align: center">Ngày sinh</th>
                                                <th scope="col" style="text-align: center">Số điện thoại</th>
                                                <th scope="col" style="text-align: center">Ngày khám</th>
                                                <th scope="col" style="text-align: center">Trạng thái</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($hosobenhnhan))
                                                @foreach($hosobenhnhan as $key => $value)
                                            <tr>
                                                <td style="text-align: center">{{++$key}}</td>
                                                <td style="text-align: center">
                                                    <a href="{{asset('storage/'.$value->image)}}" target="_blank">
                                                    <img src="{{asset('storage/'.$value->image)}}" alt="">
                                                    </a>
                                                </td>
                                                <td style="text-align: center; ">
                                                    <a href="{{route('hosobenhnhan.detail',$value->id)}}" style="color: #7e1d0c ">
                                                        {{$value->customer_name}}
                                                    </a>
                                                </td>
                                                <td style="text-align: center">{{$value->gioi_tinh}}</td>
                                                <td style="text-align: center">{{date("d/m/Y", strtotime($value->date_of_birth))}}</td>
                                                <td style="text-align: center">{{$value->phone}}</td>
                                                <td style="text-align: center">{{date('d/m/Y', strtotime($value->date_start))}}</td>
                                                <td style="text-align: center">{{$value->status}}</td>
                                            </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        <br>
                                        {{ $hosobenhnhan->links() }}
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Pie Chart -->
                </div>
                <br>
                <!-- Content Row -->
            </div>

            <!-- /.container-fluid -->
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


@endsection
