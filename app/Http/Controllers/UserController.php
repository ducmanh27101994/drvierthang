<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //

    function indexLogin()
    {
        return view('login.login');
    }

    function register(){
        return view('login.register');
    }

    function store_register(Request $request){

        if ($request->password != $request->repeat_password){
            toastr()->error('Mật khẩu không khớp nhau', 'Thất bại!');
            return back();
        }

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status = "1";
        $user->save();

        toastr()->success('Đăng ký thành công / Bạn vui lòng đợi xét duyệt để đăng nhập', 'Thành Công !');
        return redirect()->route('login.index');

    }

    function storeLoginAdmin(Request $request)
    {
        $getUser = DB::table('users')->select('*')->where([
            ['email', '=', $request->exampleInputEmail],
            ['password', '=', $request->exampleInputPassword],
            ['status', '=', "2"]
        ])->get();

        foreach ($getUser as $key => $user) {
            if ($user->email == $request->exampleInputEmail && $user->password == $request->exampleInputPassword) {
                Session::put('loginAuth', $request->exampleInputEmail);
                toastr()->success('Đăng nhập thành công', 'Thành Công !');
                return redirect()->route('hosobenhnhan.list');
            }
        }
        toastr()->error('Vui lòng thử lại', 'Thất bại!');
        return redirect()->route('login.index');
    }

    function logOutAdmin()
    {
        Session::remove('loginAuth');

        return redirect()->route('login.index');
    }

    function list_user(){

        $users = DB::table('users')
            ->select('*')
            ->orderBy('id','desc')
            ->simplePaginate(15);

        $count_user = User::all()->count();

        return view('admin.list_user',compact('users','count_user'));

    }

    function updateStatus_user($id){

        $user = User::findOrFail($id);
        $user->status = "2";
        $user->save();
        toastr()->success('Xác thực tài khoản thành công', 'Thành Công !');
        return back();

    }


}
