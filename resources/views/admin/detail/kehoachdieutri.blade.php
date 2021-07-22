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
                    <h1 class="h3 mb-0 text-gray-800">Kế hoạch điều trị</h1>

                    <button style="background-color: #7e1d0c; color: white"
                            class="btn show-hide-total-top-ten"
                            data-toggle="modal"
                            data-target="#addnewModal_guihoso">
                        Xem kế hoạch mẫu
                    </button>
                </div>


                <form method="post" action="{{route('store.kehoachdieutri',$hosobenhnhan->id)}}">
                    @csrf
                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-12 mb-4">
                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <textarea name=kehoachdieutri id="text" cols="50" rows="30"><?= !empty($hosobenhnhan->kehoachdieutri) ? $hosobenhnhan->kehoachdieutri : "" ?></textarea>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <span>Vấn đề quan tâm chính: </span>
                        <textarea name="khdt_vandequantamchinh" class="form-control" id="" rows="4"
                                  placeholder=""><?= !empty($hosobenhnhan->khdt_vandequantamchinh) ? $hosobenhnhan->khdt_vandequantamchinh : "" ?></textarea>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <span>Vấn đề điều trị: </span>
                        <textarea name="khdt_vandedieutri" class="form-control" id="" rows="4"
                                  placeholder=""><?= !empty($hosobenhnhan->khdt_vandedieutri) ? $hosobenhnhan->khdt_vandedieutri : "" ?></textarea>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <span>Chuẩn đoán: </span>
                        <textarea name="khdt_chuandoan" class="form-control" id="" rows="4"
                                  placeholder=""><?= !empty($hosobenhnhan->khdt_chuandoan) ? $hosobenhnhan->khdt_chuandoan : "" ?></textarea>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <span>Mục tiêu điều trị: </span>
                        <textarea name="khdt_muctieudieutri" class="form-control" id="" rows="4"
                                  placeholder=""><?= !empty($hosobenhnhan->khdt_muctieudieutri) ? $hosobenhnhan->khdt_muctieudieutri : "" ?></textarea>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <span>Giới hạn điều trị: </span>
                        <textarea name="khdt_gioihandieutri" class="form-control" id="" rows="4"
                                  placeholder=""><?= !empty($hosobenhnhan->khdt_gioihandieutri) ? $hosobenhnhan->khdt_gioihandieutri : "" ?></textarea>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <span>Ghi chú: </span>
                        <textarea name="khdt_ghichu" class="form-control" id="" rows="4"
                                  placeholder=""><?= !empty($hosobenhnhan->khdt_ghichu) ? $hosobenhnhan->khdt_ghichu : "" ?></textarea>
                    </div>
                </div>
                    <button type="submit" class="btn" style="background-color: #7e1d0c; color: white" onclick="return confirm('Bạn có chắc chắn thay đổi thông tin?')">Lưu thông tin</button>

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

<style>
    .modal-dialog1{
        max-width: 80%;
        margin: 1.75rem auto;
    }
</style>

    <div id="addnewModal_guihoso" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog1" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kế hoạch mẫu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row" style="margin: 20px">
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                Hạng 1 - Không nhổ răng - Hạn chế răng cửa dưới di chuyển ra trước, kỹ thuật một dây
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                Hạng 1 - Không nhổ răng - Hạn chế răng cửa hàm dưới di ra trước, qui trình dây cung tiêu chuẩn
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
                                Hạng 1 - Không nhổ răng - Hạn chế răng cửa hàm dưới di ra trước, cho phép răng cửa nhô ra trước, kỹ thuật 1 dây cung
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">
                                Hạng 1 - Không nhổ răng - cho phép răng cửa nhô ra trước, quy trình dây cung tiêu chuẩn
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list_1" data-toggle="list" href="#list-settings_1" role="tab" aria-controls="settings">
                                Hạng 1 - Không nhổ răng - Không nhổ răng có thừa khoảng, neo chặn trung bình để đóng khoảng bằng cách di gần răng cối
                            </a>
                        </div>
                    </div>
                    <div class="col-8" >
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <div ng-if="treatmentPlanTemplateSelect != null &amp;&amp; treatmentPlanTemplateSelect[5].Value" ng-bind-html="treatmentPlanTemplateSelect[5].Value" class="treatment-detail ng-binding ng-scope"><p><span style="color: #ff6600;"><u>Kế hoạch mẫu:</u></span></p>
                                    <ol>
                                        <li>Làm thẳng trên dây 012N khoảng 2 tháng, sau đó đổi sang dây 18x25N, làm lạnh và buộc lại dây cho đến khi hoàn tất giai đoạn làm thẳng, thiết lập torque và hình dạng cung răng. Gắn lại mắc cài. Mỗi lần hẹn được khuyên cách nhau 8-10 tuần để đạt hiệu quả lâm sàng tối đa sau buổi hẹn của tháng đầu tiên (để khuyến khích bệnh nhân).</li>
                                        <li>Mắc thun hạng II hoặc hạng III ngắn cho đến khi đạt khớp cắn tốt nhất. Có thể điều chỉnh nhẹ chiều cao mắc cài bằng kềm finishing trong miệng (chỉ bẻ step up, step down, in hoặc out).<br><br></li>
                                    </ol></div>
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <div ng-if="treatmentPlanTemplateSelect != null &amp;&amp; treatmentPlanTemplateSelect[5].Value" ng-bind-html="treatmentPlanTemplateSelect[5].Value" class="treatment-detail ng-binding ng-scope"><p><strong><span style="color: #ff6600;"><u>Kế hoạch mẫu:</u></span></strong></p>
                                    <ol>
                                        <li>Làm thẳng trên dây 012N khoảng 2 tháng, sau đó đổi sang dây 18x25N, làm lạnh và buộc lại dây khoảng 6 tháng để thiết lập torque và hình dạng cung răng. Đánh giá lại vị trí mắc cài. Mỗi lần hẹn được khuyến nghị cách nhau 8-10 tuần để đạt hiệu quả lâm sàng tối đa sau buổi hẹn của tháng đầu tiên (để khuyến khích bệnh nhân).</li>
                                        <li>Chuyển từ dây 18x25N đến 19x25ss ở hàm dưới kết hợp mài kẽ răng, quy trình dây đến 19x25ss hàm trên</li>
                                        <li>Mắc thun khi cần để đạt khớp cắn tốt nhất.&nbsp;</li>
                                        <li>Hoàn tất với dây 018ss và mắc thun theo chiều dọc. Khuyến nghị mỗi lần hẹn cách nhau 4 tuần khi có bẻ dây hoàn tất</li>
                                    </ol>
                                    <p><br> Trong kế hoạch này, thông thường chúng ta cố gắng điều chỉnh chen chúc 1 - 6 mm và cho phép nhô răng cửa thêm, nhưng chúng ta không muốn di chuyển răng cửa ra trước quá nhiều vào cơ môi. Hãy luôn nhớ rằng vị trí răng cửa đầu tiên là vị trí ổn định nhất, chúng ta cần có những biện pháp để hạn chế di chuyển răng cửa ra trước.</p></div>
                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <div ng-if="treatmentPlanTemplateSelect != null &amp;&amp; treatmentPlanTemplateSelect[5].Value" ng-bind-html="treatmentPlanTemplateSelect[5].Value" class="treatment-detail ng-binding ng-scope"><p><span style="color: #ff6600;"><u>Kế hoạch mẫu:</u></span></p>
                                    <ol>
                                        <li>Làm thẳng trên dây 012N khoảng 2 tháng, thay sang dây 18x25N hàm trên và hàm dưới. Đánh giá lại vị trí mắc cài. Khoảng cách các lần hẹn được đề nghị khoảng 8-10 tuần để đạt hiệu quả lâm sàng tối đa .</li>
                                        <li>Thun hạng II ngắn cho đến khi đạt khớp cắn tốt nhất</li>
                                    </ol>
                                    <p>Trong những trường hợp này, răng cửa lúc đầu bị kéo lui (và cũng nghiêng về phía trong?), và chúng ta mong muốn làm nhô răng cửa ra trước nhằm đạt thẩm mỹ tối ưu.&nbsp; Đây là kế hoạch điều trị dễ làm nhất. Nếu có mong muốn làm nhô răng cửa ra trước nhiều, nhiều hơn mức độ làm thẳng các răng chen chúc đạt được, thì có thể dùng headgear kéo ngược với một sợi thun cho mỗi răng cối hàm trên và hàm dưới để làm mất neo chặn của răng cối và kết thúc với răng nhô ra trước nhiều hơn.</p>
                                    <p>Dây kích hoạt nhiệt 18x25 N&nbsp;được dùng cho toàn bộ quá trình điều trị. Phải chắc chắn rằng sai khớp cắn hạng II không quá 2mm được chỉnh bằng thun hạng II, vì dây cung này không chịu được lực thun hạng II mà không bị biến dạng.</p></div>
                            </div>
                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                <div ng-if="treatmentPlanTemplateSelect != null &amp;&amp; treatmentPlanTemplateSelect[5].Value" ng-bind-html="treatmentPlanTemplateSelect[5].Value" class="treatment-detail ng-binding ng-scope"><p><span style="text-decoration: underline;"><span style="color: #ff6600; text-decoration: underline;">Kế hoạch điều trị mẫu</span></span></p>
                                    <ol>
                                        <li>Làm thẳng hàm trên bằng dây 012N khoảng 2 tháng, sau đó chuyển sang 18x25N để thiết lập torque mắc cài. Làm thẳng trên dây 012N, 014N, HOẶC 016N (chọn hình dạng và kích thước) theo lượng chen chúc có trên hàm dưới. Đánh giá lại vị trí mắc cài. Khoảng cách các lần hẹn được đề nghị là 8-10 tuần để đạt hiệu quả lâm sàng tối đa.</li>
                                        <li>Đổi sang dây 19x25ss hàm trên (không có loop) sau khi làm thẳng với dây 18x25N (làm lạnh và buộc lại dây khoảng 6 tháng). Tiến trình dây hàm dưới (016ss, 020ss) đến 19x25ss (không có loop).</li>
                                        <li>Đánh giá khả năng mắc thun hạng III.</li>
                                        <li>Hoàn tất</li>
                                    </ol></div>
                            </div>
                            <div class="tab-pane fade" id="list-settings_1" role="tabpanel" aria-labelledby="list-settings-list_1">
                                <div ng-if="treatmentPlanTemplateSelect != null &amp;&amp; treatmentPlanTemplateSelect[5].Value" ng-bind-html="treatmentPlanTemplateSelect[5].Value" class="treatment-detail ng-binding ng-scope"><p><span style="text-decoration: underline;">Kế hoạch mẫu:</span></p>
                                    <ol>
                                        <li>Dây 012N hoặc 014N để làm thẳng trong giai đoạn đầu khoảng 2 tháng, tiếp theo là dây 18x25N kích hoạt nhiệt hàm trên và hàm dưới. Đánh giá lại vị trí mắc cài. Khuyến nghị hẹn bệnh nhân khoảng 8-10 tuần để đạt hiệu quả lâm sàng tối đa.</li>
                                        <li>Thay sang dây 19x25N hàm trên và hàm dưới (không có loop) sau khi làm thẳng hoàn toàn trên dây 18x25N</li>
                                        <li>Kéo các răng sau bằng thun chain 4-4, headgear kéo ngược, và/hoặc lò xo mở ss giữa các răng 6 và 5.</li>
                                        <li>Hoàn tất.</li>
                                    </ol>
                                    <p>Những ca này có răng nhỏ và khoảng thừa, và/hoặc vị trí lưỡi hoạt động làm cho cung răng lớn hơn so với kích thước của răng. Khoảng trống được đóng về phía trước. Mục tiêu là để răng cửa ở vị trí bắt đầu (hoặc thậm chí có thể làm nhô các răng này nếu có thể), trong khi các răng cối lớn đóng kín khoảng thừa. Headgear kéo ngược có thể được dùng trên các bệnh nhân hợp tác với một sợi thun (Buffalo) cho mỗi răng cối thứ nhất hàm trên và hàm dưới. Chống chỉ định dùng thun chain để đóng khoảng, vì đây có thể là nguyên nhân&nbsp; kéo lui răng trước ra sau một chút.&nbsp;</p>
                                    <p>Mắc dây cung vuông để duy trì vị trí tất cả thân răng cửa nhiều nhất có thể. Có thể thêm torque thân răng về phía môi vào dây cung vuông, phối hợp với plate xương vỏ mặt trong hàm trên và hàm dưới để neo chặn. Tất nhiên, sẽ dễ dàng hơn nếu dùng mắc cài IP có torque chân răng về phía trong (Li) cho mục đích này để tránh xoắn dây cung vuông.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
        CKEDITOR.replace('text', {height: ['200px'], language: 'vi'});
        CKEDITOR.config.allowedContent = true;
        CKEDITOR.replace('body', {height: 200});
    </script>
    <script>
        CKEDITOR.replace('text', {height: ['200px']});
        CKEDITOR.config.allowedContent = true;
        CKEDITOR.replace('body', {height: 200});
    </script>
    <style type="text/css">
        textarea {

            white-space: pre;

            overflow-wrap: normal;

            overflow-x: scroll;

        }
    </style>
@endsection





