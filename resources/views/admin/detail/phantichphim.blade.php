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
                            <a class="nav-link active" style="color: #7e1d0c">Phân tích phim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: black" href="{{route('index.vto', $hosobenhnhan->id)}}">VTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: black" href="{{route('index.phantichmauham', $hosobenhnhan->id)}}">Phân tích mẫu hàm</a>
                        </li>

                    </ul>
                </div>

                <form method="post" action="{{route('store.phantichphim', $hosobenhnhan->id)}}" enctype="multipart/form-data">
                    @csrf

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
                                        <th scope="col" style="text-align: center">Thông số</th>
                                        <th scope="col" style="text-align: center">Giới hạn</th>
                                        <th scope="col" style="text-align: center">Trung bình</th>
                                        <th scope="col" style="text-align: center">Kết quả</th>
                                        <th scope="col" style="text-align: center">Đánh giá</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="text-align: center">1</td>
                                        <td>Palatal Plane-Mandibular plane</td>
                                        <td>24 (Closed) to 33 (Open)</td>
                                        <td style="text-align: center">28</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_1" value="<?= !empty($phantichphim->number_1) ? $phantichphim->number_1 : '' ?>">
                                        </td>
                                        <td  rowspan="2" style="padding-top: 33px;background-color: white">
                                            <span>Theo chiều ngang: </span><br>
                                            <select class="form-control" name="ptp_theochieungang">
                                                <option value=""></option>
                                                <option value="Đóng" <?= !empty($phantichphim->ptp_theochieungang) && $phantichphim->ptp_theochieungang == "Đóng" ? "selected" : "" ?>>Đóng</option>
                                                <option value="Trung bình" <?= !empty($phantichphim->ptp_theochieungang) && $phantichphim->ptp_theochieungang == "Trung bình" ? "selected" : "" ?>>Trung bình</option>
                                                <option value="Mở" <?= !empty($phantichphim->ptp_theochieungang) && $phantichphim->ptp_theochieungang == "Mở" ? "selected" : "" ?>>Mở</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">2</td>
                                        <td>Mandibular Plane Angle (FMA)</td>
                                        <td>20 (Closed) to 30 (Open) 18 (Closed) to 28 (Open)</td>
                                        <td style="text-align: center">26</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_2" value="<?= !empty($phantichphim->number_2) ? $phantichphim->number_2 : '' ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">3</td>
                                        <td>Y-Axis</td>
                                        <td>57 (Horizontal) to 62 (Vetical)</td>
                                        <td style="text-align: center">59</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_3" value="<?= !empty($phantichphim->number_3) ? $phantichphim->number_3 : '' ?>">
                                        </td>
                                        <td>
                                            <span>Hướng tăng trưởng: </span><br>
                                            <select class="form-control" name="ptp_huongtangtruong">
                                                <option value=""></option>
                                                <option value="Theo chiều ngang" <?= !empty($phantichphim->ptp_huongtangtruong) && $phantichphim->ptp_huongtangtruong == "Theo chiều ngang" ? "selected" : "" ?>>Theo chiều ngang</option>
                                                <option value="Trung bình" <?= !empty($phantichphim->ptp_huongtangtruong) && $phantichphim->ptp_huongtangtruong == "Trung bình" ? "selected" : "" ?>>Trung bình</option>
                                                <option value="Theo chiều đứng" <?= !empty($phantichphim->ptp_huongtangtruong) && $phantichphim->ptp_huongtangtruong == "Theo chiều đứng" ? "selected" : "" ?>>Theo chiều đứng</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">4</td>
                                        <td>Nasion Perpendicular to A point</td>
                                        <td>-1 (Retruded) to +3 (Protruded)</td>
                                        <td style="text-align: center">+1mm</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_4" value="<?= !empty($phantichphim->number_4) ? $phantichphim->number_4 : '' ?>">
                                        </td>
                                        <td  rowspan="2" style="padding-top: 33px">
                                            <span>Hàm trên: </span><br>
                                            <select class="form-control" name="ptp_hamtren">
                                                <option value=""></option>
                                                <option value="Lùi" <?= !empty($phantichphim->ptp_hamtren) && $phantichphim->ptp_hamtren == "Lùi" ? "selected" : "" ?>>Lùi</option>
                                                <option value="Trung bình" <?= !empty($phantichphim->ptp_hamtren) && $phantichphim->ptp_hamtren == "Trung bình" ? "selected" : "" ?>>Trung bình</option>
                                                <option value="Nhô" <?= !empty($phantichphim->ptp_hamtren) && $phantichphim->ptp_hamtren == "Nhô" ? "selected" : "" ?>>Nhô</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">5</td>
                                        <td>SNA</td>
                                        <td>76 (Retruded) to 83 (Protruded)</td>
                                        <td style="text-align: center">81</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_5" value="<?= !empty($phantichphim->number_5) ? $phantichphim->number_5 : '' ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">6</td>
                                        <td>Nasion Perpendicular to Pogonion</td>
                                        <td>-10 (Retruded) to -4 (Protruded) -4(Retruded) to 1 (Protruded)</td>
                                        <td style="text-align: center">9yr - 7mmAdult - 1mm</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_6" value="<?= !empty($phantichphim->number_6) ? $phantichphim->number_6 : '' ?>">
                                        </td>
                                        <td  rowspan="2" style="padding-top: 33px; background-color: #f2f2f2">
                                            <span>Hàm dưới: </span><br>
                                            <select class="form-control" name="ptp_hamduoi">
                                                <option value=""></option>
                                                <option value="Lùi" <?= !empty($phantichphim->ptp_hamduoi) && $phantichphim->ptp_hamduoi == "Lùi" ? "selected" : "" ?>>Lùi</option>
                                                <option value="Trung bình" <?= !empty($phantichphim->ptp_hamduoi) && $phantichphim->ptp_hamduoi == "Trung bình" ? "selected" : "" ?>>Trung bình</option>
                                                <option value="Nhô" <?= !empty($phantichphim->ptp_hamduoi) && $phantichphim->ptp_hamduoi == "Nhô" ? "selected" : "" ?>>Nhô</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">7</td>
                                        <td>SNB</td>
                                        <td>75 (Retruded) to 83 (Protruded)</td>
                                        <td style="text-align: center">80</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_7" value="<?= !empty($phantichphim->number_7) ? $phantichphim->number_7 : '' ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">8</td>
                                        <td>ANB</td>
                                        <td>CI +2 to +4.5CIII tendency 0.5 to 1.5</td>
                                        <td style="text-align: center">2</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_8" value="<?= !empty($phantichphim->number_8) ? $phantichphim->number_8 : '' ?>">
                                        </td>
                                        <td  rowspan="2" style="padding-top: 33px">
                                            <span>Hạng: </span><br>
                                            <select class="form-control" name="ptp_hang">
                                                <option value=""></option>
                                                <option value="Hạng I" <?= !empty($phantichphim->ptp_hang) && $phantichphim->ptp_hang == "Hạng I" ? "selected" : "" ?>>Hạng I</option>
                                                <option value="Hạng II" <?= !empty($phantichphim->ptp_hang) && $phantichphim->ptp_hang == "Hạng II" ? "selected" : "" ?>>Hạng II</option>
                                                <option value="Hạng III" <?= !empty($phantichphim->ptp_hang) && $phantichphim->ptp_hang == "Hạng III" ? "selected" : "" ?>>Hạng III</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">9</td>
                                        <td>Wits</td>
                                        <td>Class I -1 to +2</td>
                                        <td style="text-align: center">0</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_9" value="<?= !empty($phantichphim->number_9) ? $phantichphim->number_9 : '' ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">10</td>
                                        <td>Interincisal Angle</td>
                                        <td>Best Finish 125 to 130</td>
                                        <td style="text-align: center">130</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_10" value="<?= !empty($phantichphim->number_10) ? $phantichphim->number_10 : '' ?>">
                                        </td>
                                        <td style="background-color: #f2f2f2"></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">11</td>
                                        <td>Lower 1MP</td>
                                        <td>89 (Retroclined) to 98 (Proclined)</td>
                                        <td style="text-align: center">92</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_11" value="<?= !empty($phantichphim->number_11) ? $phantichphim->number_11 : '' ?>">
                                        </td>
                                        <td style="background-color: white">
                                            <span>Độ nghiêng răng cửa dưới: </span><br>
                                            <select class="form-control" name="ptp_donghiengrangcuaduoi">
                                                <option value=""></option>
                                                <option value="Lùi" <?= !empty($phantichphim->ptp_donghiengrangcuaduoi) && $phantichphim->ptp_donghiengrangcuaduoi == "Lùi" ? "selected" : "" ?>>Lùi</option>
                                                <option value="Trung bình" <?= !empty($phantichphim->ptp_donghiengrangcuaduoi) && $phantichphim->ptp_donghiengrangcuaduoi == "Trung bình" ? "selected" : "" ?>>Trung bình</option>
                                                <option value="Nhô" <?= !empty($phantichphim->ptp_donghiengrangcuaduoi) && $phantichphim->ptp_donghiengrangcuaduoi == "Nhô" ? "selected" : "" ?>>Nhô</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">12</td>
                                        <td>Lower 1NB</td>
                                        <td>+1 (Retruded) to +6 (Protruded)</td>
                                        <td style="text-align: center">+4mm</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_12" value="<?= !empty($phantichphim->number_12) ? $phantichphim->number_12 : '' ?>">
                                        </td>
                                        <td  rowspan="2" style="padding-top: 33px; background-color: #f2f2f2">
                                            <span>Độ nhô răng cửa hàm dưới: </span><br>
                                            <select class="form-control" name="ptp_donhorangcuahamduoi">
                                                <option value=""></option>
                                                <option value="Lùi" <?= !empty($phantichphim->ptp_donhorangcuahamduoi) && $phantichphim->ptp_donhorangcuahamduoi == "Lùi" ? "selected" : "" ?>>Lùi</option>
                                                <option value="Trung bình" <?= !empty($phantichphim->ptp_donhorangcuahamduoi) && $phantichphim->ptp_donhorangcuahamduoi == "Trung bình" ? "selected" : "" ?>>Trung bình</option>
                                                <option value="Nhô" <?= !empty($phantichphim->ptp_donhorangcuahamduoi) && $phantichphim->ptp_donhorangcuahamduoi == "Nhô" ? "selected" : "" ?>>Nhô</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">13</td>
                                        <td>Lower 1APo</td>
                                        <td>0 (Retruded) to +4 (Protruded)</td>
                                        <td style="text-align: center">+2mm</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_13" value="<?= !empty($phantichphim->number_13) ? $phantichphim->number_13 : '' ?>">
                                        </td>

                                    </tr>

                                    <tr>
                                        <td style="text-align: center">14</td>
                                        <td>Upper 1SN</td>
                                        <td>99 (Retroclined) to 106 (Proclined)</td>
                                        <td style="text-align: center">103</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_14" value="<?= !empty($phantichphim->number_14) ? $phantichphim->number_14 : '' ?>">
                                        </td>
                                        <td >
                                            <span>Độ nghiêng răng cửa trên: </span><br>
                                            <select class="form-control" name="ptp_donghiengrangcuatren">
                                                <option value=""></option>
                                                <option value="Lùi" <?= !empty($phantichphim->ptp_donghiengrangcuatren) && $phantichphim->ptp_donghiengrangcuatren == "Lùi" ? "selected" : "" ?>>Lùi</option>
                                                <option value="Trung bình" <?= !empty($phantichphim->ptp_donghiengrangcuatren) && $phantichphim->ptp_donghiengrangcuatren == "Trung bình" ? "selected" : "" ?>>Trung bình</option>
                                                <option value="Nhô" <?= !empty($phantichphim->ptp_donghiengrangcuatren) && $phantichphim->ptp_donghiengrangcuatren == "Nhô" ? "selected" : "" ?>>Nhô</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">15</td>
                                        <td>Upper 1APo</td>
                                        <td>+2 (Retruded) to +7 (Protruded)</td>
                                        <td style="text-align: center">	+5mm</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_15" value="<?= !empty($phantichphim->number_15) ? $phantichphim->number_15 : '' ?>">
                                        </td>
                                        <td  rowspan="2" style="padding-top: 33px">
                                            <span>Độ nhô răng cửa hàm trên: </span><br>
                                            <select class="form-control" name="ptp_donhorangcuahamtren">
                                                <option value=""></option>
                                                <option value="Lùi" <?= !empty($phantichphim->ptp_donhorangcuahamtren) && $phantichphim->ptp_donhorangcuahamtren == "Lùi" ? "selected" : "" ?>>Lùi</option>
                                                <option value="Trung bình" <?= !empty($phantichphim->ptp_donhorangcuahamtren) && $phantichphim->ptp_donhorangcuahamtren == "Trung bình" ? "selected" : "" ?>>Trung bình</option>
                                                <option value="Nhô" <?= !empty($phantichphim->ptp_donhorangcuahamtren) && $phantichphim->ptp_donhorangcuahamtren == "Nhô" ? "selected" : "" ?>>Nhô</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">16</td>
                                        <td>Upper 1 to A Vertical</td>
                                        <td>+2 (Retruded) to +6 (Protruded)</td>
                                        <td style="text-align: center">+4mm</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_16" value="<?= !empty($phantichphim->number_16) ? $phantichphim->number_16 : '' ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">17</td>
                                        <td>Nasiolabial Angle</td>
                                        <td>90 - 110</td>
                                        <td style="text-align: center">100</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_17" value="<?= !empty($phantichphim->number_17) ? $phantichphim->number_17 : '' ?>">
                                        </td>
                                        <td style="background-color: white"></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">18</td>
                                        <td>EPlane Upper</td>
                                        <td>+1 to -4</td>
                                        <td style="text-align: center">-2mm</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_18" value="<?= !empty($phantichphim->number_18) ? $phantichphim->number_18 : '' ?>">
                                        </td>
                                        <td style="background-color: #f2f2f2"></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center">19</td>
                                        <td>EPlane Lower</td>
                                        <td>+1 to -4</td>
                                        <td style="text-align: center">-2mm</td>
                                        <td style="text-align: center">
                                            <input class="form-group" type="number" name="number_19" value="<?= !empty($phantichphim->number_19) ? $phantichphim->number_19 : '' ?>">
                                        </td>
                                        <td style="background-color: white"></td>
                                    </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-4 mb-4">
                        <h5>Khác</h5>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <a target="_blank" href="{{asset('storage/'.$phantichphim->khac)}}" class="img-16-9 mfp-image gallery-item" style=" text-align: center">
                                    <img width="90%" height="300px"
                                         <?php if (!empty($phantichphim->khac)): ?>
                                         src="{{asset('storage/'.$phantichphim->khac)}}"
                                         <?php else: ?>
                                         src="https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-2.jpg"
                                        <?php endif; ?>
                                    >
                                </a>
                            </div>
                                <input name="khac" type="file" class="form-control-file" id="">
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <h5>Xương bàn tay</h5>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <a target="_blank" href="{{asset('storage/'.$phantichphim->xuongbantay)}}" class="img-16-9 mfp-image gallery-item" style="text-align: center">
                                    <img width="90%" height="300px"
                                         <?php if (!empty($phantichphim->xuongbantay)): ?>
                                         src="{{asset('storage/'.$phantichphim->xuongbantay)}}"
                                         <?php else: ?>
                                         src="https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-2.jpg"
                                    <?php endif; ?>
                                    >
                                </a>
                            </div>
                            <input name="xuongbantay" type="file" class="form-control-file" id="">
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <h5>Phân tích phim</h5>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <a  target="_blank" href="{{asset('storage/'.$phantichphim->phantichphim)}}" class="img-16-9 mfp-image gallery-item" style="background-image:url(); text-align: center">
                                    <img width="90%" height="300px"
                                         <?php if (!empty($phantichphim->phantichphim)): ?>
                                         src="{{asset('storage/'.$phantichphim->phantichphim)}}"
                                         <?php else: ?>
                                         src="https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-2.jpg"
                                    <?php endif; ?>
                                    >
                                </a>
                            </div>
                            <input name="phantichphim" type="file" class="form-control-file" id="">
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <h5>Phân tích mẫu hàm</h5>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <a  target="_blank" href="{{asset('storage/'.$phantichphim->phantichmauham)}}" class="img-16-9 mfp-image gallery-item" style="background-image:url(); text-align: center">
                                    <img width="90%" height="300px"
                                         <?php if (!empty($phantichphim->phantichmauham)): ?>
                                         src="{{asset('storage/'.$phantichphim->phantichmauham)}}"
                                         <?php else: ?>
                                         src="https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-2.jpg"
                                    <?php endif; ?>
                                    >
                                </a>
                            </div>
                            <input name="phantichmauham" type="file" class="form-control-file" id="">
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <h5>VTO</h5>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <a  target="_blank" href="{{asset('storage/'.$phantichphim->vto)}}" class="img-16-9 mfp-image gallery-item" style="background-image:url(); text-align: center">
                                    <img width="90%" height="300px"
                                         <?php if (!empty($phantichphim->vto)): ?>
                                         src="{{asset('storage/'.$phantichphim->vto)}}"
                                         <?php else: ?>
                                         src="https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-2.jpg"
                                    <?php endif; ?>
                                    >
                                </a>
                            </div>
                            <input name="vto" type="file" class="form-control-file" id="">
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <h5>Cản trở xương</h5>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <a  target="_blank" href="{{asset('storage/'.$phantichphim->cantroxuong)}}" class="img-16-9 mfp-image gallery-item" style="background-image:url(); text-align: center">
                                    <img width="90%" height="300px"
                                         <?php if (!empty($phantichphim->cantroxuong)): ?>
                                         src="{{asset('storage/'.$phantichphim->cantroxuong)}}"
                                         <?php else: ?>
                                         src="https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-2.jpg"
                                    <?php endif; ?>
                                    >
                                </a>
                            </div>
                            <input name="cantroxuong" type="file" class="form-control-file" id="">
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



@endsection





