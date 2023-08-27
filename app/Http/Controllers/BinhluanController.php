<?php

namespace App\Http\Controllers;
use App\Models\binhluan;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

class BinhluanController extends Controller
{
    public function index()
    {
        $binhluan = binhluan::orderBy('id')
        ->Paginate(6)
        ->withQueryString();
        return view('myauth.binhluan.show', ['binhluan' => $binhluan]);
    }
    public function xoa(Request $request)
    {
        // Lấy danh sách các ô kiểm đã được chọn từ yêu cầu
        $checkboxes = $request->input('checkboxes');
        // Xóa dữ liệu của các dòng tương ứng với các ô kiểm đã chọn
        foreach ($checkboxes as $checkbox) {
            // Xóa dữ liệu từ bảng tương ứng
            binhluan::where('id', $checkbox)->delete();
        }
        // Điều hướng trở lại trang trước
        return back();
    }
}
