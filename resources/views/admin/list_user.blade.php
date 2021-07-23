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
                                class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo \Illuminate\Support\Facades\Session::get('loginAuth')   ?></span>
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
                    <h1 class="h3 mb-0 text-gray-800">Quản lý danh sách users</h1>
                </div>
                <!-- Content Row -->
                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-12">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold " style="color: #7e1d0c">
                                    Tổng: @if(!empty($count_user)) {{$count_user}} @else 0 @endif</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead class="" style="background-color: #7e1d0c; color: white">
                                            <tr>
                                                <th scope="col" style="text-align: center">#</th>
                                                <th scope="col" style="text-align: center">First Name</th>
                                                <th scope="col" style="text-align: center">Last Name</th>
                                                <th scope="col" style="text-align: center">Email</th>
                                                <th scope="col" style="text-align: center">Ngày đăng ký</th>
                                                <th scope="col" style="text-align: center">Trạng thái</th>
                                                <th scope="col" style="text-align: center"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($users))
                                                @foreach($users as $key => $value)
                                                    <tr>
                                                        <td style="text-align: center"><?= ++$key ?></td>
                                                        <td style="text-align: center"><?= $value->first_name ?></td>
                                                        <td style="text-align: center"><?= $value->last_name ?></td>
                                                        <td style="text-align: center"><?= $value->email ?></td>
                                                        <td style="text-align: center"><?= $value->created_at ?></td>
                                                        <td style="text-align: center">
                                                            <?php if ($value->status == 1): ?>
                                                            <a type="" class="btn btn-secondary">Not activated</a>
                                                            <?php else: ?>
                                                            <a type="" class="btn btn-success">Active</a>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td style="text-align: center">
                                                            <?php if ($value->status == 1): ?>
                                                            <form method="post" action="{{route('update.user', $value->id)}}">
                                                                @csrf
                                                            <button type="submit"
                                                               class="btn btn-info">
                                                                Xác thực tài khoản
                                                            </button>
                                                            </form>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        <br>
                                        {{ $users->links() }}
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
