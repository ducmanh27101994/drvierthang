<?php

namespace App\Http\Controllers;

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

    function storeLoginAdmin(Request $request)
    {
        $getUser = DB::table('users')->select('*')->where([
            ['email', '=', $request->exampleInputEmail],
            ['password', '=', $request->exampleInputPassword]
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


}
