<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function changePassword()
    {
        return view('auth.change-password');
    }

    public function doChangePassword(Request $request)
    {
        $user = User::where('email', \Auth::user()->email)->first();
        if($user){
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('homeAdmin')->with('success','Đổi mật khẩu thành công');
        }else{
            return redirect()->route('homeAdmin')->with('error','Không tìm thấy tài khoản');
        }
    }
}
