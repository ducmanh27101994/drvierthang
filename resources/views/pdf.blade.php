<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;;
            font-size: 11px;
        }

        a {
            color: #7e1d0c;
            font-size: 16px;
            font-weight: bold;
        }

        .form-check-input {
            margin-top: 0px !important;
        }

        .di-chuyen-rang {
            position: relative;
        }

        .di-chuyen-rang .title {
            text-align: center;
        }

        .di-chuyen-rang .title span {
            display: inline-block;
            margin-top: 15px;
            padding: 4px 15px;
            border-radius: 15px;
            background-color: #d9ce00;
            color: #fff;
            font-size: 13px;
            font-weight: bold;
        }

        .di-chuyen-rang .image {
            margin-top: 25px;
            width: 100%;
        }

        .di-chuyen-rang span {
            position: absolute;
            width: 30px;
            text-align: center;
            border: 1px #ccc solid;
            border-radius: 5px;
        }

        /*img {*/
        /*   width: auto;*/
        /*    height: 250px;*/
        /*    object-fit: cover;*/
        /*    padding: 20px;*/
        /*}*/
        img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            padding: 20px;
        }

    </style>
</head>
<body>
<?php if (in_array("Hành chính", $check_pdf)): ?>
<a>Thông tin hành chính</a>

<table class="table">
    <tr>
        <th>Ngày bắt đầu:</th>
        <td><?= !empty($hosobenhnhan->date_start) ? date('d/m/Y', strtotime($hosobenhnhan->date_start)) : "" ?></td>
        <th>Họ và tên:</th>
        <td><?= !empty($hosobenhnhan->customer_name) ? $hosobenhnhan->customer_name : "" ?></td>
    </tr>
    <tr>
        <th>Địa chỉ:</th>
        <td colspan="3"><?= !empty($hosobenhnhan->address) ? $hosobenhnhan->address : "" ?></td>
    </tr>
    <tr>
        <th>Tỉnh thành:</th>
        <td><?= !empty($hosobenhnhan->area) ? $hosobenhnhan->area : "" ?></td>
        <th>Số điện thoại:</th>
        <td><?= !empty($hosobenhnhan->phone) ? $hosobenhnhan->phone : "" ?></td>

    </tr>
    <tr>
        <th>Tên bác sĩ:</th>
        <td><?= !empty($hosobenhnhan->bacsi) ? $hosobenhnhan->bacsi : "" ?></td>
        <th>Giới tính:</th>
        <td><?= !empty($hosobenhnhan->gioi_tinh) ? $hosobenhnhan->gioi_tinh : "" ?></td>

    </tr>
    <tr>
        <th>Quốc gia:</th>
        <td><?= !empty($hosobenhnhan->quoc_gia) ? $hosobenhnhan->quoc_gia : "" ?></td>
        <th>Số điện thoại bàn:</th>
        <td><?= !empty($hosobenhnhan->so_dien_thoai_ban) ? $hosobenhnhan->so_dien_thoai_ban : "" ?></td>
    </tr>
    <tr>
        <th>Ngày sinh:</th>
        <td><?= !empty($hosobenhnhan->date_of_birth) ? date('d/m/Y', strtotime($hosobenhnhan->date_of_birth)) : "" ?></td>
        <th>Email:</th>
        <td><?= !empty($hosobenhnhan->email) ? $hosobenhnhan->email : "" ?></td>
    </tr>
    <tr>
        <th>Quận:</th>
        <td><?= !empty($hosobenhnhan->quan) ? $hosobenhnhan->quan : "" ?></td>
        <th>Dân tộc:</th>
        <td>      <?= !empty($hosobenhnhan->dan_toc) ? $hosobenhnhan->dan_toc : "" ?></td>

    </tr>
</table>
<?php !empty($hosobenhnhan->tieu_su_y_khoa) ? $arr_tsyk = explode(",", $hosobenhnhan->tieu_su_y_khoa) : $arr_tsyk = []; ?>
<?php !empty($hosobenhnhan->tieu_su_nha_khoa) ? $arr_tsnk = explode(",", $hosobenhnhan->tieu_su_nha_khoa) : $arr_tsnk = []; ?>
<br>
<table class="table">
    <thead>
    <tr>
        <th colspan="2" style="text-align: center">Tiểu sử y khoa</th>
        <th colspan="2" style="text-align: center">Tiểu sử nha khoa</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Đã phẫu thuật" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Đã phẫu thuật", $arr_tsyk) ? "checked" : "" ?>>
                Đã phẫu thuật
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Uống thuốc ngừa thai"
                       id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Uống thuốc ngừa thai", $arr_tsyk) ? "checked" : "" ?>>

                Uống thuốc ngừa thai

            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Hen suyễn" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Hen suyễn", $arr_tsyk) ? "checked" : "" ?>>

                Hen suyễn

            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Máu khó đông" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Máu khó đông", $arr_tsyk) ? "checked" : "" ?>>

                Máu khó đông

            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Hóa trị liệu" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Hóa trị liệu", $arr_tsyk) ? "checked" : "" ?>>

                Hóa trị liệu

            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Xạ trị" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Xạ trị", $arr_tsyk) ? "checked" : "" ?>>

                Xạ trị

            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bệnh lý hô hấp" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Bệnh lý hô hấp", $arr_tsyk) ? "checked" : "" ?>>

                Bệnh lý hô hấp

            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bệnh lý tiêu hóa"
                       id="" name="tieu_su_y_khoa[]" <?= in_array("Bệnh lý tiêu hóa", $arr_tsyk) ? "checked" : "" ?>>

                Bệnh lý tiêu hóa

            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Lao" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Lao", $arr_tsyk) ? "checked" : "" ?>>

                Lao

            </div>
        </td>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Cho con bú" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Cho con bú", $arr_tsyk) ? "checked" : "" ?>>

                Cho con bú

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Có thai" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Có thai", $arr_tsyk) ? "checked" : "" ?>>

                Có thai

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Tiểu đường" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Tiểu đường", $arr_tsyk) ? "checked" : "" ?>>

                Tiểu đường

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Động kinh" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Động kinh", $arr_tsyk) ? "checked" : "" ?>>

                Động kinh

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Huyết hữu" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Huyết hữu", $arr_tsyk) ? "checked" : "" ?>>

                Huyết hữu

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Cao huyết áp" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Cao huyết áp", $arr_tsyk) ? "checked" : "" ?>>

                Cao huyết áp

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bệnh lý tuần hoàn"
                       id="" name="tieu_su_y_khoa[]" <?= in_array("Bệnh lý tuần hoàn", $arr_tsyk) ? "checked" : "" ?>>

                Bệnh lý tuần hoàn

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="HIV/AIDS" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("HIV/AIDS", $arr_tsyk) ? "checked" : "" ?>>

                HIV/AIDS

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Dị ứng" id=""
                       name="tieu_su_y_khoa[]" <?= in_array("Dị ứng", $arr_tsyk) ? "checked" : "" ?>>

                Dị ứng

            </div>
        </td>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Hôi miệng" id=""
                       name="tieu_su_nha_khoa[]" <?= in_array("Hôi miệng", $arr_tsnk) ? "checked" : "" ?>>

                Hôi miệng

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Chảy máu nướu" id=""
                       name="tieu_su_nha_khoa[]" <?= in_array("Chảy máu nướu", $arr_tsnk) ? "checked" : "" ?>>

                Chảy máu nướu

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Răng nhạy cảm" id=""
                       name="tieu_su_nha_khoa[]" <?= in_array("Răng nhạy cảm", $arr_tsnk) ? "checked" : "" ?>>

                Răng nhạy cảm

            </div>
        </td>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bệnh lý nha chu"
                       id="" name="tieu_su_nha_khoa[]" <?= in_array("Bệnh lý nha chu", $arr_tsnk) ? "checked" : "" ?>>

                Bệnh lý nha chu

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Nghiến răng" id=""
                       name="tieu_su_nha_khoa[]" <?= in_array("Nghiến răng", $arr_tsnk) ? "checked" : "" ?>>

                Nghiến răng

            </div>
        </td>
    </tr>
    <tr>
        <th>Lý do đến khám:</th>
        <td><?= !empty($hosobenhnhan->ly_do_den_kham) ? $hosobenhnhan->ly_do_den_kham : "" ?></td>
        <th>Các thuốc đang sử dụng:</th>
        <td><?= !empty($hosobenhnhan->thuoc_dang_su_dung) ? $hosobenhnhan->thuoc_dang_su_dung : "" ?></td>
    </tr>
    </tbody>
</table>
<?php endif; ?>


<?php if (in_array("Khám trong miệng", $check_pdf)): ?>
<a>Khám trong miệng</a>

<table class="table">
    <tr>
        <th>Hạng:</th>
        <td><?= !empty($hosobenhnhan->ktm_hang) ? $hosobenhnhan->ktm_hang : "" ?></td>
        <th>Chi:</th>
        <td><?= !empty($hosobenhnhan->ktm_chi) ? $hosobenhnhan->ktm_chi : "" ?></td>
    </tr>
    <tr>
        <th>Răng cối trái (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_rangcoi_trai) ? $hosobenhnhan->ktm_rangcoi_trai : "" ?></td>
        <th>Răng cối phải (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_rangcoi_phai) ? $hosobenhnhan->ktm_rangcoi_phai : "" ?></td>
    </tr>
    <tr>
        <th>Răng nanh trái (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_rangnanh_trai) ? $hosobenhnhan->ktm_rangnanh_trai : "" ?></td>
        <th>Răng nanh phải (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_rangnanh_phai) ? $hosobenhnhan->ktm_rangnanh_phai : "" ?></td>
    </tr>
</table>
<br>
<table class="table">
    <tr>
        <th colspan="2">Lệnh chức năng:</th>
        <td colspan="2"><?= !empty($hosobenhnhan->ktm_lenhchucnang) ? $hosobenhnhan->ktm_lenhchucnang : "" ?></td>
    </tr>
    <tr>
        <th>Hàm trên trái (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_hamtren_trai) ? $hosobenhnhan->ktm_hamtren_trai : "" ?></td>
        <th>Hàm trên phải (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_hamtren_phai) ? $hosobenhnhan->ktm_hamtren_phai : "" ?></td>
    </tr>
    <tr>
        <th>Hàm dưới trái (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_hamduoi_trai) ? $hosobenhnhan->ktm_hamduoi_trai : "" ?></td>
        <th>Hàm dưới phải (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_hamduoi_phai) ? $hosobenhnhan->ktm_hamduoi_phai : "" ?></td>
    </tr>
</table>
<br>
<table class="table">
    <tr>
        <th>Khoảng hàm trên (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_khoanghamtren) ? $hosobenhnhan->ktm_khoanghamtren : "" ?></td>
        <th>Khoảng hàm dưới (mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_khoanghamduoi) ? $hosobenhnhan->ktm_khoanghamduoi : "" ?></td>
    </tr>
</table>
<br>
<table class="table">
    <tr>
        <th>Cắn phủ:</th>
        <td><?= !empty($hosobenhnhan->ktm_canphu) ? $hosobenhnhan->ktm_canphu : "" ?></td>
        <th>(mm):</th>
        <td><?= !empty($hosobenhnhan->ktm_canphu_number) ? $hosobenhnhan->ktm_canphu_number : "" ?></td>
    </tr>
    <tr>
        <th>Cắn chìa:</th>
        <td><?= !empty($hosobenhnhan->ktm_canphu_chia) ? $hosobenhnhan->ktm_canphu_chia : "" ?></td>
        <th>Nướu răng nanh HD:</th>
        <td><?= !empty($hosobenhnhan->ktm_nuourangnanhhd) ? $hosobenhnhan->ktm_nuourangnanhhd : "" ?></td>
    </tr>
    <tr>
        <th>Đường cong Spee:</th>
        <td><?= !empty($hosobenhnhan->ktm_duongcongSpee) ? $hosobenhnhan->ktm_duongcongSpee : "" ?></td>
        <th>Cung răng:</th>
        <td><?= !empty($hosobenhnhan->ktm_cungrang) ? $hosobenhnhan->ktm_cungrang : "" ?></td>
    </tr>
    <tr>
        <th>Nướu vùng RC dưới:</th>
        <td><?= !empty($hosobenhnhan->ktm_nuouvunggRCduoi) ? $hosobenhnhan->ktm_nuouvunggRCduoi : "" ?></td>
        <th>Giai đoạn răng:</th>
        <td><?= !empty($hosobenhnhan->ktm_giaidoanrang) ? $hosobenhnhan->ktm_giaidoanrang : "" ?></td>
    </tr>
</table>

<?php endif; ?>

<?php if (in_array("Khám ngoài mặt", $check_pdf)): ?>
<a>Khám ngoài mặt</a>
<table class="table">
    <tr>
        <th>Dạng mặt:</th>
        <td><?= !empty($khamngoaimat->knm_dangmat) ? $khamngoaimat->knm_dangmat : "" ?></td>
        <th>Mặt nghiêng:</th>
        <td><?= !empty($khamngoaimat->knm_matnghieng) ? $khamngoaimat->knm_matnghieng : "" ?></td>
    </tr>
    <tr>
        <th>Đường giữa hàm trên:</th>
        <td><?= !empty($khamngoaimat->knm_duonggiuahamtren) ? $khamngoaimat->knm_duonggiuahamtren : "" ?></td>
        <th>Môi:</th>
        <td><?= !empty($khamngoaimat->knm_moi) ? $khamngoaimat->knm_moi : "" ?></td>
    </tr>
</table>
<br>
<table class="table">
    <tr>
        <th>Góc mũi môi:</th>

        <td><?= !empty($khamngoaimat->knm_gocmuimoi) && $khamngoaimat->knm_gocmuimoi != "< 90" ? $khamngoaimat->knm_gocmuimoi : "" ?>
            <?= !empty($khamngoaimat->knm_gocmuimoi) && $khamngoaimat->knm_gocmuimoi == "< 90" ? "Nhỏ hơn 90" : "" ?>

        </td>
        <th>Cung cười:</th>
        <td><?= !empty($khamngoaimat->knm_cungcuoi) ? $khamngoaimat->knm_cungcuoi : "" ?></td>
    </tr>
    <tr>
        <th>Đường cười:</th>
        <td><?= !empty($khamngoaimat->knm_duongcuoi) ? $khamngoaimat->knm_duongcuoi : "" ?></td>
    </tr>
</table>
<br>
<table class="table">
    <tr>
        <th>Hành lang đen:</th>
        <td><?= !empty($khamngoaimat->knm_hanhlangden) ? $khamngoaimat->knm_hanhlangden : "" ?></td>
        <th>Rãnh cằm:</th>
        <td><?= !empty($khamngoaimat->knm_ranhcam) ? $khamngoaimat->knm_ranhcam : "" ?></td>
    </tr>
    <tr>
        <th>Độ lộ nướu khi cười (mm):</th>
        <td><?= !empty($khamngoaimat->knm_dolonuoukhicuoi) ? $khamngoaimat->knm_dolonuoukhicuoi : "" ?></td>
        <th>Độ lộ răng cửa lúc nghỉ (mm):</th>
        <td><?= !empty($khamngoaimat->knm_dolorangcualucnghi) ? $khamngoaimat->knm_dolorangcualucnghi : "" ?></td>
    </tr>
</table>
<br>
<?php !empty($khamngoaimat->knm_canho) ? $arr_knm_canho = explode(",", $khamngoaimat->knm_canho) : $arr_knm_canho = []; ?>
<?php !empty($khamngoaimat->knm_cancheo) ? $arr_knm_cancheo = explode(",", $khamngoaimat->knm_cancheo) : $arr_knm_cancheo = []; ?>
<?php !empty($khamngoaimat->knm_dayluoi) ? $arr_knm_dayluoi = explode(",", $khamngoaimat->knm_dayluoi) : $arr_knm_dayluoi = []; ?>
<?php !empty($khamngoaimat->knm_khac) ? $arr_knm_khac = explode(",", $khamngoaimat->knm_khac) : $arr_knm_khac = []; ?>
<?php !empty($khamngoaimat->knm_taitrai) ? $arr_knm_taitrai = explode(",", $khamngoaimat->knm_taitrai) : $arr_knm_taitrai = []; ?>
<?php !empty($khamngoaimat->knm_taiphai) ? $arr_knm_taiphai = explode(",", $khamngoaimat->knm_taiphai) : $arr_knm_taiphai = []; ?>
<a>Khám chức năng cơ</a>
<table class="table">
    <tr>
        <th>Cường cơ môi:</th>
        <td><?= !empty($khamngoaimat->knm_cuongcomoi) ? $khamngoaimat->knm_cuongcomoi : "" ?></td>
        <th>Độ hở môi:</th>
        <td><?= !empty($khamngoaimat->knm_dohomoi) ? $khamngoaimat->knm_dohomoi : "" ?></td>
    </tr>
    <tr>
        <th>Thở:</th>
        <td><?= !empty($khamngoaimat->knm_tho) ? $khamngoaimat->knm_tho : "" ?></td>
    </tr>
</table>
<br>
<table class="table">

    <tr>
        <th>Cắn hở:</th>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Phía trước"
                       id="" name="knm_canho[]" <?= in_array("Phía trước", $arr_knm_canho) ? "checked" : "" ?>>
                Phía trước
            </div>
        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Phía sau" id=""
                   name="knm_canho[]" <?= in_array("Phía sau", $arr_knm_canho) ? "checked" : "" ?>>
            Phía sau
        </td>
    </tr>
    <tr>
        <th>Đẩy lưỡi:</th>
        <td>
            <input class="form-check-input" type="checkbox" value="Phía trước"
                   id="" name="knm_dayluoi[]" <?= in_array("Phía trước", $arr_knm_dayluoi) ? "checked" : "" ?>>

            Phía trước

        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Phía sau" id=""
                   name="knm_dayluoi[]" <?= in_array("Phía sau", $arr_knm_dayluoi) ? "checked" : "" ?>>
            Phía sau
        </td>
    </tr>
    <tr>
        <th>Cắn chéo:</th>
        <td>
            <input class="form-check-input" type="checkbox" value="Phía trước"
                   id="" name="knm_cancheo[]" <?= in_array("Phía trước", $arr_knm_cancheo) ? "checked" : "" ?>>
            Phía trước
        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Phía sau phải" id=""
                   name="knm_cancheo[]" <?= in_array("Phía sau phải", $arr_knm_cancheo) ? "checked" : "" ?>>
            Phía sau phải
        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Phía sau trái" id=""
                   name="knm_cancheo[]" <?= in_array("Phía sau trái", $arr_knm_cancheo) ? "checked" : "" ?>>
            Phía sau trái
        </td>
    </tr>
    <tr>
        <th>Khác:</th>
        <td>
            <input class="form-check-input" type="checkbox" value="Thói quen môi"
                   id="" name="knm_khac[]" <?= in_array("Thói quen môi", $arr_knm_khac) ? "checked" : "" ?>>
            Thói quen môi
        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Lưỡi lớn" id=""
                   name="knm_khac[]" <?= in_array("Lưỡi lớn", $arr_knm_khac) ? "checked" : "" ?>>
            Lưỡi lớn
        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Thói quen xấu" id=""
                   name="knm_khac[]" <?= in_array("Thói quen xấu", $arr_knm_khac) ? "checked" : "" ?>>
            Thói quen xấu
        </td>
    </tr>
</table>
<br>
<a>Khám khớp thái dương hàm</a>
<table class="table">
    <tr>
        <th>Clicking phải:</th>
        <td><?= !empty($khamngoaimat->knm_clicking_phai) ? $khamngoaimat->knm_clicking_phai : "" ?></td>
    </tr>
    <tr>
        <th>Clicking trái:</th>
        <td><?= !empty($khamngoaimat->knm_clicking_trai) ? $khamngoaimat->knm_clicking_trai : "" ?></td>
    </tr>
    <tr>
        <th>Lệch khi há:</th>
        <td><?= !empty($khamngoaimat->knm_lechkhiha) ? $khamngoaimat->knm_lechkhiha : "" ?></td>
        <th>Độ há tối đa (mm):</th>
        <td><?= !empty($khamngoaimat->knm_dohatoida) ? $khamngoaimat->knm_dohatoida : "" ?></td>
        <th>Đau đầu (x mỗi tuần):</th>
        <td><?= !empty($khamngoaimat->knm_daudau) ? $khamngoaimat->knm_daudau : "" ?></td>
    </tr>
    <tr>
        <th>Tai trái:</th>
        <td>
            <input class="form-check-input" type="checkbox" value="Fullness"
                   id="" name="knm_taitrai[]" <?= in_array("Fullness", $arr_knm_taitrai) ? "checked" : "" ?>>

            Fullness

        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Ringing" id=""
                   name="knm_taitrai[]" <?= in_array("Ringing", $arr_knm_taitrai) ? "checked" : "" ?>>

            Ringing

        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Đau" id=""
                   name="knm_taitrai[]" <?= in_array("Đau", $arr_knm_taitrai) ? "checked" : "" ?>>

            Đau

        </td>
    </tr>
    <tr>
        <th>Tai phải:</th>
        <td>
            <input class="form-check-input" type="checkbox" value="Fullness"
                   id="" name="knm_taiphai[]" <?= in_array("Fullness", $arr_knm_taiphai) ? "checked" : "" ?>>

            Fullness


        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Ringing" id=""
                   name="knm_taiphai[]" <?= in_array("Ringing", $arr_knm_taiphai) ? "checked" : "" ?>>

            Ringing


        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Đau" id=""
                   name="knm_taiphai[]" <?= in_array("Đau", $arr_knm_taiphai) ? "checked" : "" ?>>
            Đau

        </td>
    </tr>
    <tr>
        <th>Ghi chú:</th>
        <td><?= !empty($khamngoaimat->knm_ghichu) ? $khamngoaimat->knm_ghichu : "" ?></td>
    </tr>
</table>

<?php endif; ?>


<?php if (in_array("Tư vấn", $check_pdf)): ?>
<a>Tư vấn</a>

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
<br>
<?php !empty($hosobenhnhan->tvtc_mongmuondieutri) ? $arr_tvtc_mongmuondieutri = explode(",", $hosobenhnhan->tvtc_mongmuondieutri) : $arr_tvtc_mongmuondieutri = []; ?>
<a>Mong muốn điều trị</a>
<table class="table">
    <tr>
        <td>
            <input class="form-check-input" type="checkbox" value="Không nhổ răng"
                   id=""
                   name="tvtc_mongmuondieutri[]" <?= in_array("Không nhổ răng", $arr_tvtc_mongmuondieutri) ? "checked" : "" ?>>

            Không nhổ răng
        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Phẫu thuật chỉnh nha"
                   id=""
                   name="tvtc_mongmuondieutri[]" <?= in_array("Phẫu thuật chỉnh nha", $arr_tvtc_mongmuondieutri) ? "checked" : "" ?>>

            Phẫu thuật chỉnh nha

        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Nhổ răng"
                   id=""
                   name="tvtc_mongmuondieutri[]" <?= in_array("Nhổ răng", $arr_tvtc_mongmuondieutri) ? "checked" : "" ?>>

            Nhổ răng

        </td>
        <td>
            <input class="form-check-input" type="checkbox" value="Cắt vỏ xương" id=""
                   name="tvtc_mongmuondieutri[]" <?= in_array("Cắt vỏ xương", $arr_tvtc_mongmuondieutri) ? "checked" : "" ?>>

            Cắt vỏ xương

        </td>

    </tr>
    <tr>
        <th>Thời gian tối đa:</th>
        <td><?= !empty($hosobenhnhan->tvtc_thoigiantoida) ? $hosobenhnhan->tvtc_thoigiantoida : "" ?></td>
        <th>Chi phí dự trù:</th>
        <td><?= !empty($hosobenhnhan->tvtc_chiphidutru) ? $hosobenhnhan->tvtc_chiphidutru : "" ?></td>
    </tr>
    <tr>
        <th>Số lần thanh toán:</th>
        <td><?= !empty($hosobenhnhan->tvtc_solanthanhtoan) ? $hosobenhnhan->tvtc_solanthanhtoan : "" ?></td>
        <th>Các đợt thanh toán:</th>
        <td><?= !empty($hosobenhnhan->tvtc_cacdotthanhtoann) ? $hosobenhnhan->tvtc_cacdotthanhtoann : "" ?></td>
    </tr>
    <tr>
        <th>Ghi chú:</th>
        <td><?= !empty($hosobenhnhan->tvtc_ghichu) ? $hosobenhnhan->tvtc_ghichu : "" ?></td>
    </tr>
</table>
<?php endif; ?>

<?php if (in_array("Phân tích", $check_pdf)): ?>
<a>Phân tích</a>

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
            <span><?= !empty($phantichphim->number_1) ? $phantichphim->number_1 : '' ?></span>
        </td>
        <td rowspan="2" style="padding-top: 33px;background-color: white">
            <span>Theo chiều ngang: </span><br>
            <span><?= !empty($phantichphim->ptp_theochieungang) ? $phantichphim->ptp_theochieungang : '' ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: center">2</td>
        <td>Mandibular Plane Angle (FMA)</td>
        <td>20 (Closed) to 30 (Open) 18 (Closed) to 28 (Open)</td>
        <td style="text-align: center">26</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_2) ? $phantichphim->number_2 : '' ?></span>

        </td>
    </tr>

    <tr>
        <td style="text-align: center">3</td>
        <td>Y-Axis</td>
        <td>57 (Horizontal) to 62 (Vetical)</td>
        <td style="text-align: center">59</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_3) ? $phantichphim->number_3 : '' ?></span>

        </td>
        <td>
            <span>Hướng tăng trưởng: </span><br>
            <span><?= !empty($phantichphim->ptp_huongtangtruong) ? $phantichphim->ptp_huongtangtruong : '' ?></span>
        </td>
    </tr>

    <tr>
        <td style="text-align: center">4</td>
        <td>Nasion Perpendicular to A point</td>
        <td>-1 (Retruded) to +3 (Protruded)</td>
        <td style="text-align: center">+1mm</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_4) ? $phantichphim->number_4 : '' ?></span>
        </td>
        <td rowspan="2" style="padding-top: 33px">
            <span>Hàm trên: </span><br>
            <span><?= !empty($phantichphim->ptp_hamtren) ? $phantichphim->ptp_hamtren : '' ?></span>

        </td>
    </tr>
    <tr>
        <td style="text-align: center">5</td>
        <td>SNA</td>
        <td>76 (Retruded) to 83 (Protruded)</td>
        <td style="text-align: center">81</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_5) ? $phantichphim->number_5 : '' ?></span>
        </td>
    </tr>

    <tr>
        <td style="text-align: center">6</td>
        <td>Nasion Perpendicular to Pogonion</td>
        <td>-10 (Retruded) to -4 (Protruded) -4(Retruded) to 1 (Protruded)</td>
        <td style="text-align: center">9yr - 7mmAdult - 1mm</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_6) ? $phantichphim->number_6 : '' ?></span>
        </td>
        <td rowspan="2" style="padding-top: 33px; background-color: #f2f2f2">
            <span>Hàm dưới: </span><br>
            <span><?= !empty($phantichphim->ptp_hamduoi) ? $phantichphim->ptp_hamduoi : '' ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: center">7</td>
        <td>SNB</td>
        <td>75 (Retruded) to 83 (Protruded)</td>
        <td style="text-align: center">80</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_7) ? $phantichphim->number_7 : '' ?></span>
        </td>
    </tr>

    <tr>
        <td style="text-align: center">8</td>
        <td>ANB</td>
        <td>CI +2 to +4.5CIII tendency 0.5 to 1.5</td>
        <td style="text-align: center">2</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_8) ? $phantichphim->number_8 : '' ?></span>
        </td>
        <td rowspan="2" style="padding-top: 33px">
            <span>Hạng: </span><br>
            <span><?= !empty($phantichphim->ptp_hang) ? $phantichphim->ptp_hang : '' ?></span>

        </td>
    </tr>
    <tr>
        <td style="text-align: center">9</td>
        <td>Wits</td>
        <td>Class I -1 to +2</td>
        <td style="text-align: center">0</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_9) ? $phantichphim->number_9 : '' ?></span>
        </td>
    </tr>

    <tr>
        <td style="text-align: center">10</td>
        <td>Interincisal Angle</td>
        <td>Best Finish 125 to 130</td>
        <td style="text-align: center">130</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_10) ? $phantichphim->number_10 : '' ?></span>
        </td>
        <td style="background-color: #f2f2f2"></td>
    </tr>

    <tr>
        <td style="text-align: center">11</td>
        <td>Lower 1MP</td>
        <td>89 (Retroclined) to 98 (Proclined)</td>
        <td style="text-align: center">92</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_11) ? $phantichphim->number_11 : '' ?></span>
        </td>
        <td style="background-color: white">
            <span>Độ nghiêng răng cửa dưới: </span><br>
            <span><?= !empty($phantichphim->ptp_donghiengrangcuaduoi) ? $phantichphim->ptp_donghiengrangcuaduoi : '' ?></span>

        </td>
    </tr>

    <tr>
        <td style="text-align: center">12</td>
        <td>Lower 1NB</td>
        <td>+1 (Retruded) to +6 (Protruded)</td>
        <td style="text-align: center">+4mm</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_12) ? $phantichphim->number_12 : '' ?></span>
        </td>
        <td rowspan="2" style="padding-top: 33px; background-color: #f2f2f2">
            <span>Độ nhô răng cửa hàm dưới: </span><br>
            <span><?= !empty($phantichphim->ptp_donhorangcuahamduoi) ? $phantichphim->ptp_donhorangcuahamduoi : '' ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: center">13</td>
        <td>Lower 1APo</td>
        <td>0 (Retruded) to +4 (Protruded)</td>
        <td style="text-align: center">+2mm</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_13) ? $phantichphim->number_13 : '' ?></span>
        </td>

    </tr>

    <tr>
        <td style="text-align: center">14</td>
        <td>Upper 1SN</td>
        <td>99 (Retroclined) to 106 (Proclined)</td>
        <td style="text-align: center">103</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_14) ? $phantichphim->number_14 : '' ?></span>
        </td>
        <td>
            <span>Độ nghiêng răng cửa trên: </span><br>
            <span><?= !empty($phantichphim->ptp_donghiengrangcuatren) ? $phantichphim->ptp_donghiengrangcuatren : '' ?></span>

        </td>
    </tr>

    <tr>
        <td style="text-align: center">15</td>
        <td>Upper 1APo</td>
        <td>+2 (Retruded) to +7 (Protruded)</td>
        <td style="text-align: center"> +5mm</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_15) ? $phantichphim->number_15 : '' ?></span>
        </td>
        <td rowspan="2" style="padding-top: 33px">
            <span>Độ nhô răng cửa hàm trên: </span><br>
            <span><?= !empty($phantichphim->ptp_donhorangcuahamtren) ? $phantichphim->ptp_donhorangcuahamtren : '' ?></span>

        </td>
    </tr>
    <tr>
        <td style="text-align: center">16</td>
        <td>Upper 1 to A Vertical</td>
        <td>+2 (Retruded) to +6 (Protruded)</td>
        <td style="text-align: center">+4mm</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_16) ? $phantichphim->number_16 : '' ?></span>
        </td>
    </tr>

    <tr>
        <td style="text-align: center">17</td>
        <td>Nasiolabial Angle</td>
        <td>90 - 110</td>
        <td style="text-align: center">100</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_17) ? $phantichphim->number_17 : '' ?></span>
        </td>
        <td style="background-color: white"></td>
    </tr>

    <tr>
        <td style="text-align: center">18</td>
        <td>EPlane Upper</td>
        <td>+1 to -4</td>
        <td style="text-align: center">-2mm</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_18) ? $phantichphim->number_18 : '' ?></span>
        </td>
        <td style="background-color: #f2f2f2"></td>
    </tr>

    <tr>
        <td style="text-align: center">19</td>
        <td>EPlane Lower</td>
        <td>+1 to -4</td>
        <td style="text-align: center">-2mm</td>
        <td style="text-align: center">
            <span><?= !empty($phantichphim->number_19) ? $phantichphim->number_19 : '' ?></span>
        </td>
        <td style="background-color: white"></td>
    </tr>

    </tbody>

</table>
<br>
<table class="table">
    <thead style="background-color: #7e1d0c; color: white">
    <tr>
        <th rowspan="3" style="text-align: center"></th>
        <th colspan="4" style="text-align: center">Hàm dưới</th>
        <th colspan="4" style="text-align: center">Hàm trên</th>
    </tr>
    <tr>

        <th colspan="2" style="text-align: center">Cung 3-3</th>
        <th colspan="2" style="text-align: center">Cung 7-7</th>
        <th colspan="2" style="text-align: center">Cung 3-3</th>
        <th colspan="2" style="text-align: center">Cung 7-7</th>
    </tr>
    <tr>

        <th style="text-align: center">Phải</th>
        <th style="text-align: center">Trái</th>
        <th style="text-align: center">Phải</th>
        <th style="text-align: center">Trái</th>
        <th style="text-align: center">Phải</th>
        <th style="text-align: center">Trái</th>
        <th style="text-align: center">Phải</th>
        <th style="text-align: center">Trái</th>
    </tr>
    </thead>
    <tbody>

    <?php !empty($phantichphim->chenchucrang) ? $arr_chenchucrang = explode(",", $phantichphim->chenchucrang) : $arr_chenchucrang = []; ?>
    <?php !empty($phantichphim->duongcongspee) ? $arr_duongcongspee = explode(",", $phantichphim->duongcongspee) : $arr_duongcongspee = []; ?>
    <?php !empty($phantichphim->duonggiuahieuchinh) ? $arr_duonggiuahieuchinh = explode(",", $phantichphim->duonggiuahieuchinh) : $arr_duonggiuahieuchinh = []; ?>
    <?php !empty($phantichphim->piprangcua) ? $arr_piprangcua = explode(",", $phantichphim->piprangcua) : $arr_piprangcua = []; ?>
    <?php !empty($phantichphim->nhorang) ? $arr_nhorang = explode(",", $phantichphim->nhorang) : $arr_nhorang = []; ?>
    <?php !empty($phantichphim->dixa) ? $arr_dixa = explode(",", $phantichphim->dixa) : $arr_dixa = []; ?>
    <?php !empty($phantichphim->nongham) ? $arr_nongham = explode(",", $phantichphim->nongham) : $arr_nongham = []; ?>
    <?php !empty($phantichphim->maike) ? $arr_maike = explode(",", $phantichphim->maike) : $arr_maike = []; ?>

    <tr>
        <th style="text-align: center">Chen chúc răng</th>
        <td style="text-align: center">
            <span><?= !empty($arr_chenchucrang[0]) ? $arr_chenchucrang[0] : '0' ?></span>

        </td>
        <td style="text-align: center">

            <span><?= !empty($arr_chenchucrang[1]) ? $arr_chenchucrang[1] : '0' ?></span>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_chenchucrang[2]) ? $arr_chenchucrang[2] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_chenchucrang[3]) ? $arr_chenchucrang[3] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_chenchucrang[4]) ? $arr_chenchucrang[4] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_chenchucrang[5]) ? $arr_chenchucrang[5] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_chenchucrang[6]) ? $arr_chenchucrang[6] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_chenchucrang[7]) ? $arr_chenchucrang[7] : '0' ?>

        </td>
    </tr>
    <tr>
        <th style="text-align: center">Đường cong Spee</th>
        <td style="text-align: center">

            <?= !empty($arr_duongcongspee[0]) ? $arr_duongcongspee[0] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_duongcongspee[1]) ? $arr_duongcongspee[1] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_duongcongspee[2]) ? $arr_duongcongspee[2] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_duongcongspee[3]) ? $arr_duongcongspee[3] : '0' ?>
        </td>
        <td style="text-align: center">

            <?= !empty($arr_duongcongspee[4]) ? $arr_duongcongspee[4] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_duongcongspee[5]) ? $arr_duongcongspee[5] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_duongcongspee[6]) ? $arr_duongcongspee[6] : '0' ?>

        </td>
        <td style="text-align: center">

            <?= !empty($arr_duongcongspee[7]) ? $arr_duongcongspee[7] : '0' ?>

        </td>
    </tr>
    <tr>
        <th style="text-align: center">Đường giữa hiệu chỉnh</th>
        <?php for ($i = 0; $i < 8;$i++): ?>
        <td style="text-align: center">

            <?= !empty($arr_duonggiuahieuchinh[$i]) ? $arr_duonggiuahieuchinh[$i] : '0' ?>
        </td>
        <?php endfor; ?>
    </tr>
    <tr>
        <th style="text-align: center">PIP răng cửa</th>
        <?php for ($i = 0; $i < 8;$i++): ?>
        <td style="text-align: center">

            <?= !empty($arr_piprangcua[$i]) ? $arr_piprangcua[$i] : '0' ?>
        </td>
        <?php endfor; ?>
    </tr>
    <tr style="background-color: #f2f2f2; color: black">
        <th style="text-align: center">Khoảng cần</th>
        <?php for ($i = 0; $i < 8;$i++): ?>
        <?php $total_khoangcan = (!empty($arr_chenchucrang[$i]) ? $arr_chenchucrang[$i] : 0) + (!empty($arr_duongcongspee[$i]) ? $arr_duongcongspee[$i] : 0) + (!empty($arr_duonggiuahieuchinh[$i]) ? $arr_duonggiuahieuchinh[$i] : 0) + (!empty($arr_piprangcua[$i]) ? $arr_piprangcua[$i] : 0) ?>
        <td style="text-align: center">
            <?= $total_khoangcan ?>

        </td>
        <?php endfor; ?>
    </tr>
    <tr>
        <th style="text-align: center">Nhổ răng</th>
        <?php for ($i = 0; $i < 8;$i++): ?>
        <td style="text-align: center">

            <?= !empty($arr_nhorang[$i]) ? $arr_nhorang[$i] : '0' ?>
        </td>
        <?php endfor; ?>
    </tr>
    <tr>
        <th style="text-align: center">Di xa</th>
        <?php for ($i = 0; $i < 8;$i++): ?>
        <td style="text-align: center">

            <?= !empty($arr_dixa[$i]) ? $arr_dixa[$i] : '0' ?>
        </td>
        <?php endfor; ?>
    </tr>
    <tr>
        <th style="text-align: center">Nong hàm</th>
        <?php for ($i = 0; $i < 8;$i++): ?>
        <td style="text-align: center">

            <?= !empty($arr_nongham[$i]) ? $arr_nongham[$i] : '0' ?>
        </td>
        <?php endfor; ?>
    </tr>
    <tr>
        <th style="text-align: center">Mài kẽ</th>
        <?php for ($i = 0; $i < 8;$i++): ?>
        <td style="text-align: center">

            <?= !empty($arr_maike[$i]) ? $arr_maike[$i] : '0' ?>
        </td>
        <?php endfor; ?>
    </tr>
    <tr style="background-color: #f2f2f2; color: black">
        <th style="text-align: center">Kết quả</th>
        <?php for ($i = 0; $i < 8;$i++): ?>
        <?php $total_ketqua = (!empty($arr_nhorang[$i]) ? $arr_nhorang[$i] : 0) + (!empty($arr_dixa[$i]) ? $arr_dixa[$i] : 0) + (!empty($arr_nongham[$i]) ? $arr_nongham[$i] : 0) + (!empty($arr_maike[$i]) ? $arr_maike[$i] : 0) ?>
        <td style="text-align: center">

            <?= $total_ketqua + (int)$total_khoangcan ?>
        </td>
        <?php endfor; ?>
    </tr>
    </tbody>
</table>
<br>
<table class="table">
    <tr>
        <th style="text-align: center">Khác</th>
        <th style="text-align: center">Xương bàn tay</th>
    </tr>
   <tr>
       <td style="text-align: center">
           <?php if (!empty($phantichphim->khac)): ?>
           <img src="{{asset('storage/'.$phantichphim->khac)}}" alt="">
               <?php endif; ?>
       </td>
       <td style="text-align: center">
           <?php if (!empty($phantichphim->xuongbantay)): ?>
           <img src="{{asset('storage/'.$phantichphim->xuongbantay)}}" alt="">
               <?php endif; ?>
       </td>
   </tr>
    <tr>
        <th style="text-align: center">Phân tích mẫu hàm</th>
        <th style="text-align: center">VTO</th>
    </tr>
    <tr>
        <td style="text-align: center">
            <?php if (!empty($phantichphim->phantichmauham)): ?>
            <img src="{{asset('storage/'.$phantichphim->phantichmauham)}}" alt="">
                <?php endif; ?>
        </td>
        <td style="text-align: center">
            <?php if (!empty($phantichphim->vto)): ?>
            <img src="{{asset('storage/'.$phantichphim->vto)}}" alt="">
                <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th style="text-align: center">Cản trở xương</th>
        <th style="text-align: center">Phân tích phim</th>
    </tr>
    <tr>
        <td style="text-align: center">
            <?php if (!empty($phantichphim->phantichphim)): ?>
            <img src="{{asset('storage/'.$phantichphim->phantichphim)}}" alt="">
                <?php endif; ?>
        </td>
        <td style="text-align: center">
            <?php if (!empty($phantichphim->cantroxuong)): ?>
            <img src="{{asset('storage/'.$phantichphim->cantroxuong)}}" alt="">
                <?php endif; ?>
        </td>
    </tr>




</table>
<br>
<a>VTO răng cửa hàm dưới</a>
<table class="table">
    <thead>
    <tr>
        <th colspan="2">Kết quả Ceph</th>
        <th colspan="2">Kế hoạch</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Độ nghiêng (độ):</td>
        <td><?= !empty($phantichphim->hamduoi_1) ? $phantichphim->hamduoi_1 : '' ?></td>
        <td>Độ nghiêng (độ):</td>
        <td><?= !empty($phantichphim->hamduoi_3) ? $phantichphim->hamduoi_3 : '' ?></td>
    </tr>
    <tr>
        <td>Độ nhô (mm)</td>
        <td><?= !empty($phantichphim->hamduoi_2) ? $phantichphim->hamduoi_2 : '' ?></td>
        <td>Độ nhô (mm)</td>
        <td><?= !empty($phantichphim->hamduoi_4) ? $phantichphim->hamduoi_4 : '' ?></td>
    </tr>
    </tbody>
</table>
<br>
<a>VTO răng cửa hàm trên</a>
<table class="table">
    <thead>
    <tr>
        <th colspan="2">Kết quả Ceph</th>
        <th colspan="2">Kế hoạch</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Độ nghiêng (độ):</td>
        <td><?= !empty($phantichphim->hamtren_1) ? $phantichphim->hamtren_1 : '' ?></td>
        <td>Độ nghiêng (độ):</td>
        <td><?= !empty($phantichphim->hamtren_3) ? $phantichphim->hamtren_3 : '' ?></td>
    </tr>
    <tr>
        <td>Độ nhô (mm)</td>
        <td><?= !empty($phantichphim->hamtren_2) ? $phantichphim->hamtren_2 : '' ?></td>
        <td>Độ nhô (mm)</td>
        <td><?= !empty($phantichphim->hamtren_4) ? $phantichphim->hamtren_4 : '' ?></td>
    </tr>
    </tbody>
</table>
<br>
<?php !empty($phantichphim->di_chuyen_rang) ? $arr_di_chuyen_rang = explode(",", $phantichphim->di_chuyen_rang) : $arr_di_chuyen_rang = []; ?>
<a>Kế hoạch di chuyển răng</a>
<div class="di-chuyen-rang" style="position:relative;">
    <table class="table">
        <tr>
            <th> <?= !empty($arr_di_chuyen_rang[0]) ? $arr_di_chuyen_rang[0] : '0' ?></th>
            <th>   <?= !empty($arr_di_chuyen_rang[1]) ? $arr_di_chuyen_rang[1] : '0' ?></th>
            <th>   <?= !empty($arr_di_chuyen_rang[2]) ? $arr_di_chuyen_rang[2] : '0' ?></th>
            <th>   <?= !empty($arr_di_chuyen_rang[3]) ? $arr_di_chuyen_rang[3] : '0' ?></th>
        </tr>
    </table>
    <img src="https://service.egate.global/uploads/avatar/1627100007-30f31982305acb0ab05837d4d4490577.png"
         class="image">&nbsp;
    <table class="table">
        <tr>
            <th> <?= !empty($arr_di_chuyen_rang[4]) ? $arr_di_chuyen_rang[4] : '0' ?></th>
            <th>   <?= !empty($arr_di_chuyen_rang[5]) ? $arr_di_chuyen_rang[5] : '0' ?></th>
            <th>   <?= !empty($arr_di_chuyen_rang[6]) ? $arr_di_chuyen_rang[6] : '0' ?></th>
            <th>   <?= !empty($arr_di_chuyen_rang[7]) ? $arr_di_chuyen_rang[7] : '0' ?></th>
        </tr>
    </table>

</div>
<br>
<a>Phân tích hàm mẫu</a>
<table class="table">
    <tr>
        <th>Bolton 6/Hàm trên:</th>
        <td><?= !empty($phantichphim->ptmh_bolton6_tren) ? $phantichphim->ptmh_bolton6_tren : '' ?></td>
        <th>Bolton 6/Hàm dưới:</th>
        <td><?= !empty($phantichphim->ptmh_bolton6_duoi) ? $phantichphim->ptmh_bolton6_duoi : '' ?></td>
    </tr>
    <tr>
        <th>Bolton 12/Hàm trên:</th>
        <td><?= !empty($phantichphim->ptmh_bolton12_tren) ? $phantichphim->ptmh_bolton12_tren : '' ?></td>
        <th>Bolton 12/Hàm dưới:</th>
        <td><?= !empty($phantichphim->ptmh_bolton12_duoi) ? $phantichphim->ptmh_bolton12_duoi : '' ?></td>
    </tr>
    <tr>
        <th>Chiều ngang hàm dưới:</th>
        <td><?= !empty($phantichphim->ptmh_chieunganghamduoi) ? $phantichphim->ptmh_chieunganghamduoi : '' ?></td>
        <th>Chiều ngang hàm trên:</th>
        <td><?= !empty($phantichphim->ptmh_chieunganghamtren) ? $phantichphim->ptmh_chieunganghamtren : '' ?></td>
    </tr>
    <tr>
        <th>Nong rộng:</th>
        <td><?= !empty($phantichphim->ptmh_nongrong) ? $phantichphim->ptmh_nongrong : '' ?></td>

    </tr>
</table>
<?php endif; ?>

<?php if (in_array("Kế hoạch điều trị", $check_pdf)): ?>
<a>Kế hoạch điều trị</a>

<span>
    <?= !empty($hosobenhnhan->kehoachdieutri) ? $hosobenhnhan->kehoachdieutri : "" ?>
</span>
<br>
<span style="font-weight: bold">Vấn đề điều trị: </span>
<span>
    <?= !empty($hosobenhnhan->khdt_vandedieutri) ? $hosobenhnhan->khdt_vandedieutri : "" ?>
</span>
<br>
<span style="font-weight: bold">Chuẩn đoán: </span>
<span>
    <?= !empty($hosobenhnhan->khdt_chuandoan) ? $hosobenhnhan->khdt_chuandoan : "" ?>
</span>
<br>
<span style="font-weight: bold">Mục tiêu điều trị: </span>
<span>
    <?= !empty($hosobenhnhan->khdt_muctieudieutri) ? $hosobenhnhan->khdt_muctieudieutri : "" ?>
</span>
<br>
<span style="font-weight: bold">Giới hạn điều trị: </span>
<span>
    <?= !empty($hosobenhnhan->khdt_gioihandieutri) ? $hosobenhnhan->khdt_gioihandieutri : "" ?>
</span>
<br>
<span style="font-weight: bold">Ghi chú: </span>
<span>
    <?= !empty($hosobenhnhan->khdt_ghichu) ? $hosobenhnhan->khdt_ghichu : "" ?>
</span>
<br>
<span style="font-weight: bold">Vấn đề quan tâm chính: </span>
<span>
    <?= !empty($hosobenhnhan->khdt_vandequantamchinh) ? $hosobenhnhan->khdt_vandequantamchinh : "" ?>
</span>
<br>
<?php endif; ?>

<?php if (in_array("Quá trình điều trị", $check_pdf)): ?>
<a>Quá trình điều trị</a>

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
        <td style="text-align: center"><?= !empty($value->ngay) ? date('d/m/Y', strtotime($value->ngay)) : "" ?></td>
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
<?php endif; ?>
<?php if (in_array("Hình ảnh", $check_pdf)): ?>
<a>Hình ảnh</a>
<br>
<table class="table">
    <thead>
        <tr >
            <th style="text-align: center">Album</th>
            <th style="text-align: center">Ảnh</th>
        </tr>
    </thead>
    <?php if (!empty($image)): ?>
    <?php foreach ($image as $key => $value): ?>
          <tr>
              <td style="text-align: center"><?= $value->name ?></td>
              <td style="text-align: center"><img src="{{asset('storage/'.$value->image)}}" ></td>
          </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>



<?php endif; ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
