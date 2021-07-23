<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Khamngoaimat;
use App\Models\Phantichmauham;
use App\Models\Quatrinhdieutri;
use App\Models\Tuvantaichinh;
use Illuminate\Http\Request;
use App\Models\Hosobenhnhan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HosobenhnhanController extends Controller
{
    //
    public function index_hosobenhnhan(){

        return view('admin.hosobenhnhan');

    }

    public function list_hosobenhnhan(){

        $user_session = Session::get('loginAuth');
        if (!empty($user_session) && $user_session == "drvietthang@gmail.com"){
            $hosobenhnhan = DB::table('hosobenhnhan')->select('*')->orderBy('id','desc')->simplePaginate(15);
            $count_hosobenhnhan = DB::table('hosobenhnhan')->count();
        } else {
            $hosobenhnhan = DB::table('hosobenhnhan')->select('*')->orderBy('id','desc')->where('email','=',"$user_session")
                ->simplePaginate(15);
            $count_hosobenhnhan = DB::table('hosobenhnhan')->select('*')->orderBy('id','desc')->where('email','=',"$user_session")
                ->count();
        }


        return view('admin.list_hosobenhnhan',compact("hosobenhnhan",'count_hosobenhnhan'));

    }

    public function store_hosobenhnhan(Request $request){



        $hosobenhnhan = new Hosobenhnhan();
        $hosobenhnhan->date_start = $request->date_start;
        $hosobenhnhan->date_of_birth = $request->date_of_birth;
        $hosobenhnhan->customer_name = $request->customer_name;
        $hosobenhnhan->address = $request->address;
        $hosobenhnhan->area = $request->area;
        $hosobenhnhan->phone = $request->phone;
        $hosobenhnhan->email = $request->email;
        $hosobenhnhan->bacsi = $request->bacsi;
        $hosobenhnhan->gioi_tinh = $request->gioi_tinh;
        $hosobenhnhan->quan = $request->quan;
        $hosobenhnhan->quoc_gia = $request->quoc_gia;
        $hosobenhnhan->so_dien_thoai_ban = $request->so_dien_thoai_ban;
        $hosobenhnhan->dan_toc = $request->dan_toc;

        if (!empty($request->tieu_su_y_khoa)){
            $hosobenhnhan->tieu_su_y_khoa = implode(",", $request->tieu_su_y_khoa);
        }
        if (!empty($request->ly_do_den_kham)){
            $hosobenhnhan->tieu_su_nha_khoa = implode(",", $request->tieu_su_nha_khoa);
        }

        $hosobenhnhan->ly_do_den_kham = $request->ly_do_den_kham;
        $hosobenhnhan->thuoc_dang_su_dung = $request->thuoc_dang_su_dung;
        $hosobenhnhan->status = $request->status;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images','public');
            $hosobenhnhan->image = $path;
        }

        $hosobenhnhan->save();

        $khamngoaimat = new Khamngoaimat();
        $khamngoaimat->check_new = "1";
        $khamngoaimat->save();

        $phantichmauham = new Phantichmauham();
        $phantichmauham->check_new = "1";
        $phantichmauham->save();

        toastr()->success('Tạo hồ sơ thành công', 'Thành Công !');
        return redirect()->route('hosobenhnhan.list');

    }


    public function edit_hosobenhnhan($id){

        $hosobenhnhan = Hosobenhnhan::findOrFail($id);

        \Illuminate\Support\Facades\View::share('hosobenhnhan');

        return view('admin.detail.edit_hanhchinh',compact('hosobenhnhan'));
    }

    public function edit_hanhchinh(Request $request,$id){

        $hosobenhnhan = Hosobenhnhan::findOrFail($id);
        $hosobenhnhan->date_start = $request->date_start;
        $hosobenhnhan->date_of_birth = $request->date_of_birth;
        $hosobenhnhan->customer_name = $request->customer_name;
        $hosobenhnhan->address = $request->address;
        $hosobenhnhan->area = $request->area;
        $hosobenhnhan->phone = $request->phone;
        $hosobenhnhan->email = $request->email;
        $hosobenhnhan->bacsi = $request->bacsi;
        $hosobenhnhan->gioi_tinh = $request->gioi_tinh;
        $hosobenhnhan->quan = $request->quan;
        $hosobenhnhan->quoc_gia = $request->quoc_gia;
        $hosobenhnhan->so_dien_thoai_ban = $request->so_dien_thoai_ban;
        $hosobenhnhan->dan_toc = $request->dan_toc;

        if (!empty($request->tieu_su_y_khoa)){
            $hosobenhnhan->tieu_su_y_khoa = implode(",", $request->tieu_su_y_khoa);
        }
        if (!empty($request->ly_do_den_kham)){
            $hosobenhnhan->tieu_su_nha_khoa = implode(",", $request->tieu_su_nha_khoa);
        }

        $hosobenhnhan->ly_do_den_kham = $request->ly_do_den_kham;
        $hosobenhnhan->thuoc_dang_su_dung = $request->thuoc_dang_su_dung;
        $hosobenhnhan->status = $request->status;

        if (!empty($request->hasFile('image'))){
            if ($request->hasFile('image')){
                $currentImg = $hosobenhnhan->image;
                if($currentImg){
                    Storage::delete('/public'.$currentImg);
                }
                $image = $request->file('image');
                $path = $image->store('images','public');
                $hosobenhnhan->image = $path;
            }
        }

        $hosobenhnhan->save();

        toastr()->success('Lưu hồ sơ thành công', 'Thành Công !');
        return redirect()->route('hosobenhnhan.list');


    }

    public function edit_khamtrongmieng($id){

        $hosobenhnhan = Hosobenhnhan::findOrFail($id);

        return view('admin.detail.edit_khamtrongmieng',compact('hosobenhnhan'));
    }

    public function store_khamtrongmieng(Request $request,$id){

        $hosobenhnhan = Hosobenhnhan::findOrFail($id);

        $hosobenhnhan->ktm_hang = $request->ktm_hang;
        $hosobenhnhan->ktm_chi = $request->ktm_chi;
        $hosobenhnhan->ktm_rangcoi_trai = $request->ktm_rangcoi_trai;
        $hosobenhnhan->ktm_rangcoi_phai = $request->ktm_rangcoi_phai;
        $hosobenhnhan->ktm_rangnanh_trai = $request->ktm_rangnanh_trai;
        $hosobenhnhan->ktm_rangnanh_phai = $request->ktm_rangnanh_phai;
        $hosobenhnhan->ktm_lenhchucnang = $request->ktm_lenhchucnang;
        $hosobenhnhan->ktm_hamtren_phai = $request->ktm_hamtren_phai;
        $hosobenhnhan->ktm_hamtren_trai = $request->ktm_hamtren_trai;
        $hosobenhnhan->ktm_hamduoi_phai = $request->ktm_hamduoi_phai;
        $hosobenhnhan->ktm_hamduoi_trai = $request->ktm_hamduoi_trai;
        $hosobenhnhan->ktm_khoanghamtren = $request->ktm_khoanghamtren;
        $hosobenhnhan->ktm_khoanghamduoi = $request->ktm_khoanghamduoi;
        $hosobenhnhan->ktm_canphu = $request->ktm_canphu;
        $hosobenhnhan->ktm_canphu_number = $request->ktm_canphu_number;
        $hosobenhnhan->ktm_canphu_chia = $request->ktm_canphu_chia;
        $hosobenhnhan->ktm_nuourangnanhhd = $request->ktm_nuourangnanhhd;
        $hosobenhnhan->ktm_duongcongSpee = $request->ktm_duongcongSpee;
        $hosobenhnhan->ktm_cungrang = $request->ktm_cungrang;
        $hosobenhnhan->ktm_giaidoanrang = $request->ktm_giaidoanrang;
        $hosobenhnhan->ktm_nuouvunggRCduoi = $request->ktm_nuouvunggRCduoi;

        $hosobenhnhan->save();

        toastr()->success('Lưu hồ sơ thành công', 'Thành Công !');
        return back();
    }

    public function edit_khamngoaimat($id){

//        $hosobenhnhan = Khamngoaimat::findOrFail($id);
        $hosobenhnhan = Khamngoaimat::find($id);

        return view('admin.detail.edit_khamngoaimat',compact('hosobenhnhan'));
    }

    public function store_khamngoaimat(Request $request,$id){

        $khamngoaimat = Khamngoaimat::findOrFail($id);
        $khamngoaimat->knm_dangmat = $request->knm_dangmat;
        $khamngoaimat->knm_matnghieng = $request->knm_matnghieng;
        $khamngoaimat->knm_duonggiuahamtren = $request->knm_duonggiuahamtren;
        $khamngoaimat->knm_moi = $request->knm_moi;
        $khamngoaimat->knm_gocmuimoi = $request->knm_gocmuimoi;
        $khamngoaimat->knm_cungcuoi = $request->knm_cungcuoi;
        $khamngoaimat->knm_duongcuoi = $request->knm_duongcuoi;
        $khamngoaimat->knm_hanhlangden = $request->knm_hanhlangden;
        $khamngoaimat->knm_ranhcam = $request->knm_ranhcam;
        $khamngoaimat->knm_dolonuoukhicuoi = $request->knm_dolonuoukhicuoi;
        $khamngoaimat->knm_dolorangcualucnghi = $request->knm_dolorangcualucnghi;
        $khamngoaimat->knm_cuongcomoi = $request->knm_cuongcomoi;
        $khamngoaimat->knm_dohomoi = $request->knm_dohomoi;
        $khamngoaimat->knm_tho = $request->knm_tho;
        if (!empty($request->knm_canho)){
            $khamngoaimat->knm_canho = implode(",", $request->knm_canho);
        }
        if (!empty($request->knm_cancheo)){
            $khamngoaimat->knm_cancheo = implode(",", $request->knm_cancheo);
        }
        if (!empty($request->knm_dayluoi)){
            $khamngoaimat->knm_dayluoi = implode(",", $request->knm_dayluoi);
        }
        if (!empty($request->knm_khac)){
            $khamngoaimat->knm_khac = implode(",", $request->knm_khac);
        }

        $khamngoaimat->knm_khamkhopduoiham = $request->knm_khamkhopduoiham;
        $khamngoaimat->knm_clicking_phai = $request->knm_clicking_phai;
        $khamngoaimat->knm_clicking_trai = $request->knm_clicking_trai;
        $khamngoaimat->knm_lechkhiha = $request->knm_lechkhiha;
        $khamngoaimat->knm_dohatoida = $request->knm_dohatoida;
        $khamngoaimat->knm_daudau = $request->knm_daudau;
        if (!empty($request->knm_taitrai)){
            $khamngoaimat->knm_taitrai = implode(",", $request->knm_taitrai);
        }
        if (!empty($request->knm_taiphai)){
            $khamngoaimat->knm_taiphai = implode(",", $request->knm_taiphai);
        }
        $khamngoaimat->knm_ghichu = $request->knm_ghichu;



        $khamngoaimat->save();

        toastr()->success('Lưu hồ sơ thành công', 'Thành Công !');
        return back();


    }

    public function edit_tuvantaichinh($id){

        $hosobenhnhan = Hosobenhnhan::find($id);

        $tuvantaichinh = DB::table('hosobenhnhan')
            ->join('tuvantaichinh','hosobenhnhan.id','tuvantaichinh.hosobenhnhan_id')
            ->select('tuvantaichinh.*')
            ->where('tuvantaichinh.hosobenhnhan_id','=',"$id")
            ->get();

        return view('admin.detail.edit_tuvantaichinh', compact('hosobenhnhan','tuvantaichinh'));
    }

    public function store_tuvantaichinh(Request $request){

        $tuvantaichinh = new Tuvantaichinh();
        $tuvantaichinh->tvtc_tendanhmuc = $request->tvtc_tendanhmuc;
        $tuvantaichinh->tvtc_gia = $request->tvtc_gia;
        $tuvantaichinh->tvtc_soluong = $request->tvtc_soluong;
        $tuvantaichinh->tvtc_giam = $request->tvtc_giam;
        $tuvantaichinh->tvtc_thanhtien = $request->tvtc_thanhtien;

        $tuvantaichinh->hosobenhnhan_id = $request->hosobenhnhan_id;

        $tuvantaichinh->save();

        toastr()->success('Lưu thành công', 'Thành Công !');
        return back();


    }

    public function edit_tuvantaichinh_store(Request $request,$id){

        $hosobenhnhan = Hosobenhnhan::findOrFail($id);

        if (!empty($request->tvtc_mongmuondieutri)){
            $hosobenhnhan->tvtc_mongmuondieutri = implode(",", $request->tvtc_mongmuondieutri);
        }
        $hosobenhnhan->tvtc_thoigiantoida = $request->tvtc_thoigiantoida;
        $hosobenhnhan->tvtc_chiphidutru = $request->tvtc_chiphidutru;
        $hosobenhnhan->tvtc_ghichu = $request->tvtc_ghichu;
        $hosobenhnhan->tvtc_solanthanhtoan = $request->tvtc_solanthanhtoan;
        $hosobenhnhan->tvtc_cacdotthanhtoann = $request->tvtc_cacdotthanhtoann;

        $hosobenhnhan->save();

        toastr()->success('Lưu hồ sơ thành công', 'Thành Công !');
        return back();
    }

    public function index_thuvientuvan($id){
        $hosobenhnhan = Hosobenhnhan::findOrFail($id);
        return view('admin.detail.thuvientuvan',compact('hosobenhnhan'));
    }

    public function index_image($id){
        $hosobenhnhan = Hosobenhnhan::find($id);

        $images = DB::table('hosobenhnhan')
            ->join('images','hosobenhnhan.id','images.hosobenhnhan_id')
            ->select('images.*')
            ->where('images.hosobenhnhan_id','=',"$id")
            ->simplePaginate(9);

        return view('admin.detail.edit_image', compact('hosobenhnhan','images'));
    }

    public function store_image(Request $request){

        $images = new Images();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images','public');
            $images->image = $path;
        }

        $images->hosobenhnhan_id = $request->hosobenhnhan_id;
        $images->save();
        toastr()->success('Lưu thành công', 'Thành Công !');
        return back();
    }

    public function index_quatrinhdieutri($id){
        $hosobenhnhan = Hosobenhnhan::find($id);

        $quatrinhdieutri = DB::table('hosobenhnhan')
            ->join('quatrinhdieutri','hosobenhnhan.id','quatrinhdieutri.hosobenhnhan_id')
            ->select('quatrinhdieutri.*')
            ->where('quatrinhdieutri.hosobenhnhan_id','=',"$id")
            ->get();

        return view('admin.detail.quatrinhdieutri', compact('hosobenhnhan','quatrinhdieutri'));

    }

    public function store_quatrinhdieutri(Request $request){

        $quatrinhdieutri = new Quatrinhdieutri();
        $quatrinhdieutri->ngay = $request->ngay;
        $quatrinhdieutri->bacsi = $request->bacsi;
        $quatrinhdieutri->dieutrilantruoc = $request->dieutrilantruoc;
        $quatrinhdieutri->congviecdieutrilannay = $request->congviecdieutrilannay;
        $quatrinhdieutri->congviecdukienlantoi = $request->congviecdukienlantoi;
        $quatrinhdieutri->thanhtoan = $request->thanhtoan;
        $quatrinhdieutri->hosobenhnhan_id = $request->hosobenhnhan_id;
        $quatrinhdieutri->save();
        toastr()->success('Lưu thành công', 'Thành Công !');
        return back();
    }

    public function index_kehoachdieutri($id){

        $hosobenhnhan = Hosobenhnhan::find($id);


        return view('admin.detail.kehoachdieutri', compact('hosobenhnhan'));

    }

    public function store_kehoachdieutri(Request $request,$id){

        $hosobenhnhan = Hosobenhnhan::findOrFail($id);

        $hosobenhnhan->kehoachdieutri = $request->kehoachdieutri;
        $hosobenhnhan->khdt_vandequantamchinh = $request->khdt_vandequantamchinh;
        $hosobenhnhan->khdt_vandedieutri = $request->khdt_vandedieutri;
        $hosobenhnhan->khdt_ghichu = $request->khdt_ghichu;
        $hosobenhnhan->khdt_chuandoan = $request->khdt_chuandoan;
        $hosobenhnhan->khdt_muctieudieutri = $request->khdt_muctieudieutri;
        $hosobenhnhan->khdt_gioihandieutri = $request->khdt_gioihandieutri;

        $hosobenhnhan->save();

        toastr()->success('Lưu thành công', 'Thành Công !');
        return back();
    }

    public function index_phantichphim($id){

        $hosobenhnhan = Hosobenhnhan::findOrFail($id);

        $phantichphim = Phantichmauham::findOrFail($id);

        return \view('admin.detail.phantichphim',compact('hosobenhnhan','phantichphim'));

    }

    public function store_phantichphim(Request $request, $id){

        $phantichphim = Phantichmauham::findOrFail($id);

        $phantichphim->number_1 = $request->number_1;
        $phantichphim->number_2 = $request->number_2;
        $phantichphim->number_3 = $request->number_3;
        $phantichphim->number_4 = $request->number_4;
        $phantichphim->number_5 = $request->number_5;
        $phantichphim->number_6 = $request->number_6;
        $phantichphim->number_7 = $request->number_7;
        $phantichphim->number_8 = $request->number_8;
        $phantichphim->number_9 = $request->number_9;
        $phantichphim->number_10 = $request->number_10;
        $phantichphim->number_11 = $request->number_11;
        $phantichphim->number_12 = $request->number_12;
        $phantichphim->number_13 = $request->number_13;
        $phantichphim->number_14 = $request->number_14;
        $phantichphim->number_15 = $request->number_15;
        $phantichphim->number_16 = $request->number_16;
        $phantichphim->number_17 = $request->number_17;
        $phantichphim->number_18 = $request->number_18;
        $phantichphim->number_19 = $request->number_19;

        $phantichphim->ptp_theochieungang = $request->ptp_theochieungang;
        $phantichphim->ptp_huongtangtruong = $request->ptp_huongtangtruong;
        $phantichphim->ptp_hamtren = $request->ptp_hamtren;
        $phantichphim->ptp_hamduoi = $request->ptp_hamduoi;
        $phantichphim->ptp_hang = $request->ptp_hang;
        $phantichphim->ptp_donghiengrangcuaduoi = $request->ptp_donghiengrangcuaduoi;
        $phantichphim->ptp_donhorangcuahamduoi = $request->ptp_donhorangcuahamduoi;
        $phantichphim->ptp_donghiengrangcuatren = $request->ptp_donghiengrangcuatren;
        $phantichphim->ptp_donhorangcuahamtren = $request->ptp_donhorangcuahamtren;

        if (!empty($request->hasFile('khac'))){
            if ($request->hasFile('khac')){
                $currentImg = $phantichphim->khac;
                if($currentImg){
                    Storage::delete('/public'.$currentImg);
                }
                $image = $request->file('khac');
                $path = $image->store('images','public');
                $phantichphim->khac = $path;
            }
        }
        if (!empty($request->hasFile('xuongbantay'))){
            if ($request->hasFile('xuongbantay')){
                $currentImg = $phantichphim->xuongbantay;
                if($currentImg){
                    Storage::delete('/public'.$currentImg);
                }
                $image = $request->file('xuongbantay');
                $path = $image->store('images','public');
                $phantichphim->xuongbantay = $path;
            }
        }
        if (!empty($request->hasFile('phantichphim'))){
            if ($request->hasFile('phantichphim')){
                $currentImg = $phantichphim->phantichphim;
                if($currentImg){
                    Storage::delete('/public'.$currentImg);
                }
                $image = $request->file('phantichphim');
                $path = $image->store('images','public');
                $phantichphim->phantichphim = $path;
            }
        }
        if (!empty($request->hasFile('phantichmauham'))){
            if ($request->hasFile('phantichmauham')){
                $currentImg = $phantichphim->phantichmauham;
                if($currentImg){
                    Storage::delete('/public'.$currentImg);
                }
                $image = $request->file('phantichmauham');
                $path = $image->store('images','public');
                $phantichphim->phantichmauham = $path;
            }
        }
        if (!empty($request->hasFile('vto'))){
            if ($request->hasFile('vto')){
                $currentImg = $phantichphim->vto;
                if($currentImg){
                    Storage::delete('/public'.$currentImg);
                }
                $image = $request->file('vto');
                $path = $image->store('images','public');
                $phantichphim->vto = $path;
            }
        }
        if (!empty($request->hasFile('cantroxuong'))){
            if ($request->hasFile('cantroxuong')){
                $currentImg = $phantichphim->cantroxuong;
                if($currentImg){
                    Storage::delete('/public'.$currentImg);
                }
                $image = $request->file('cantroxuong');
                $path = $image->store('images','public');
                $phantichphim->cantroxuong = $path;
            }
        }

        $phantichphim->save();

        toastr()->success('Lưu thành công', 'Thành Công !');
        return back();

    }

    public function index_phantichmauham($id){

        $hosobenhnhan = Hosobenhnhan::findOrFail($id);

        $phantichphim = Phantichmauham::findOrFail($id);

        return \view('admin.detail.phantichmauham',compact('hosobenhnhan','phantichphim'));
    }

    public function store_phantichmauham(Request $request, $id){
        $phantichphim = Phantichmauham::findOrFail($id);

        $phantichphim->ptmh_bolton6_tren = $request->ptmh_bolton6_tren;
        $phantichphim->ptmh_bolton12_tren = $request->ptmh_bolton12_tren;
        $phantichphim->ptmh_bolton6_duoi = $request->ptmh_bolton6_duoi;
        $phantichphim->ptmh_bolton12_duoi = $request->ptmh_bolton12_duoi;
        $phantichphim->ptmh_chieunganghamduoi = $request->ptmh_chieunganghamduoi;
        $phantichphim->ptmh_chieunganghamtren = $request->ptmh_chieunganghamtren;
        $phantichphim->ptmh_nongrong = $request->ptmh_nongrong;

        $phantichphim->save();

        toastr()->success('Lưu thành công', 'Thành Công !');
        return back();
    }

    public function index_vto($id){

        $hosobenhnhan = Hosobenhnhan::findOrFail($id);

        $phantichphim = Phantichmauham::findOrFail($id);

        return \view('admin.detail.vto',compact('hosobenhnhan','phantichphim'));
    }




}
