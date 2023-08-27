<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserauthController extends Controller
{

public function login(Request $req)
{
    $req->validate(
        [
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'password.required' => 'Vui lòng nhập password',
        ]
    );

    if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {

        // Kiểm tra role của người dùng sau khi đăng nhập

            return redirect('/'); // Chuyển hướng đến trang chủ nếu role là 0
    } else {
        return redirect()->back()->withErrors('Email hoặc mật khẩu không đúng');
    }
}

    public function register(Request $req)
    {
        $validatedValue = $req->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'repeatPassword' => 'required|same:password',
            ],
            [

                'name.required' => 'Vui lòng nhập "HỌ VÀ TÊN"',
                'email.required' => 'Vui lòng nhập "Email"',
                'email.unique' => 'Email đã được đăng kí',
                'email.email' => 'Vui lòng nhập đúng định dạng Email',
                'password.required' => 'Vui lòng nhập "MẬT KHẨU"',
                'repeatPassword.required' => 'Vui lòng Nhập "XÁC NHẬN MẬT KHẨU"',
                'repeatPassword.same' => 'Xác nhận mật khẩu không khớp',
            ]
        );
        // Thêm trường 'role' với giá trị là 0 vào mảng validatedValue
        $validatedValue['role'] = 0;
        $validatedValue['password'] = bcrypt($validatedValue['password']);
        $user = User::Create($validatedValue);
        Auth::login($user); 
        return redirect('layout-a/home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('dangnhap');
    }
}
