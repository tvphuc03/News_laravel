<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleNhapLoai;
use Illuminate\Http\Request;
use App\Models\loaitin;
use App\Models\tin;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

class LoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $listtin = loaitin::orderBy('thuTu', 'asc')
            ->Paginate(6)
            ->withQueryString();
        return view('myauth.loai.show', ['listtin' => $listtin]);
    }

    public function add()
    {
        return view('myauth.loai/add'); // Trả về view them.blade.php để hiển thị form thêm tin
    }
    public function add__(RuleNhapLoai $request)
    {
        $arr = $request->post();
        $tenLoai = ($request->has('ten')) ? $arr['ten'] : "";
        $tenLoai = trim(strip_tags($tenLoai));
        $l = new loaitin; // Tạo mới một instance của model tin
        $l->ten = $_POST['ten']; // Gán giá trị cho thuộc tính tieuDe của đối tượng $l từ dữ liệu $_POST['tieuDe']
        $l->save(); // Lưu đối tượng $l vào cơ sở dữ liệu
        return redirect('layout-a/loaitin'); // Chuyển hướng đến URL tin/ds sau khi thêm thành công
    }
    public function edit($id)
    {
        $l = loaitin::find($id); // Tìm tin trong bảng tin dựa trên id được truyền vào và gán vào biến $t
        if ($l == null) return redirect('/thongbao'); // Nếu không tìm thấy tin, chuyển hướng đến trang thông báo
        return view('myauth.loai/edit', ['loai' => $l]); // Trả về view capnhattin.blade.php với thông tin của tin được truyền vào là biến $tin
    }

    public function edit__(RuleNhapLoai $request,$id)
    {
        // Lấy dữ liệu đầu vào từ request
        $arr = $request->post();
        $tenLoai = ($request->has('ten')) ? $arr['ten'] : "";

        // Loại bỏ các thẻ HTML và khoảng trắng dư thừa từ dữ liệu đầu vào
        $tenLoai = trim(strip_tags($tenLoai));

        $l = loaitin::find($id); // Tìm tin trong bảng tin dựa trên id được truyền vào và gán vào biến $l
        if ($l == null) return redirect('/thongbao'); // Nếu không tìm thấy tin, chuyển hướng đến trang thông báo
        $l->ten = $_POST['ten']; // Cập nhật giá trị cho thuộc tính tomTat của đối tượng $l từ dữ liệu $_POST['tomTat']
        $l->save(); // Lưu đối tượng $l sau khi cập nhật thành công
        return redirect('/layout-a/loaitin'); // Chuyển hướng đến trang tin');
    }

    public function xoa(Request $request)
    {
        // Lấy danh sách các ô kiểm đã được chọn từ yêu cầu
        $checkboxes = $request->input('checkboxes');
        // Xóa dữ liệu của các dòng tương ứng với các ô kiểm đã chọn
        foreach ($checkboxes as $checkbox) {
            // Xóa dữ liệu từ bảng tương ứng
            loaitin::where('id', $checkbox)->delete();
        }
        // Điều hướng trở lại trang trước
        return back();
    }

    public function an($id)
    {
        $l = loaitin::find($id);
        $l->anHien = 0;
        $l->save();
        return redirect('/layout-a/loaitin');
    }

    public function hien($id)
    {
        $l = loaitin::find($id);
        $l->anHien = 1;
        $l->save();
        return redirect('/layout-a/loaitin');
    }









}
