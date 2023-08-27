<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleNhapbaiviet;
use App\Http\Requests\RuleSuabaiviet;
use Illuminate\Http\Request;

use App\Models\Tin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

class BaivietController extends Controller
{
    public function index()
    {
        $listtin = Tin::orderBy('id', 'asc')

            ->Paginate(10)
            ->withQueryString();
        foreach ($listtin as $tin) {
            if (file_exists(public_path('upload/'.$tin->urlHinh))) {
                $tin->urlHinhExists = true;
            } else {
                $tin->urlHinhExists = false;
            }
        }
        return view('myauth.tin.show', ['listtin' => $listtin]);
    }


    public function add()
    {
        return view('myauth.tin.add');
    }

    public function add__(RuleNhapbaiviet $request)
    {

        $arr = $request->post();
        $tieude = ($request->has('tieude')) ? $arr['tieude'] : "";
        $tomtat = ($request->has('tomtat')) ? $arr['tomtat'] : 0;
        $ngay = ($request->has('ngay')) ? $arr['ngay'] : "";
        $idLoai = ($request->has('idLoai')) ? (int)$arr['idLoai'] : "";
        $hot = ($request->has('hot')) ? (int)$arr['hot'] : 0;
        $tags = ($request->has('tags')) ? $arr['tags'] : 0;
        $anhien = ($request->has('anhien')) ? (int)$arr['anhien'] : 0;
        $noidung = ($request->has('noidung')) ? $arr['noidung'] : "";

        $tieude = trim(strip_tags($tieude));

        $tin = new tin;
        $tin->tieuDe = $tieude;
        $tin->tomTat = $tomtat;

        if ($request->hasFile('hinh')) {
            // Lấy tệp tin từ yêu cầu
            $file = $request->file('hinh');

            // Đường dẫn đến thư mục đích trong ứng dụng Laravel
            $destinationPath = public_path('upload/upload/images');

            // Tạo tên tệp tin mới sử dụng timestamp để đảm bảo duy nhất
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Lưu tệp tin vào thư mục đích với tên tệp tin mới
            $file->move($destinationPath, $filename);

            $tin->urlHinh = 'upload/images/' . $filename;
        }

        $tin->ngayDang = $ngay;
        $tin->noiBat = $hot;
        $tin->tags = $tags;
        $tin->anhien = $anhien;
        $tin->noiDung = $noidung;
        $tin->idLT = $idLoai;
        $tin->save();

        return redirect('/layout-a/tintuc');
    }

    public function edit($id)
    {
        $tin = Tin::find($id);
        if ($tin == null) {
            return redirect("/layout-a/tintuc");
        }
        return view("myauth.tin.edit", ['tin' => $tin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit__(RuleSuabaiviet $request, $id)
    {
        $arr = $request->post();
        $tieude = ($request->has('tieude')) ? $arr['tieude'] : "";
        $tomtat = ($request->has('tomtat')) ? $arr['tomtat'] : 0;
        $ngay = ($request->has('ngay')) ? $arr['ngay'] : "";
        $idLoai = ($request->has('idLoai')) ? (int)$arr['idLoai'] : "";
        $tags = ($request->has('tags')) ? $arr['tags'] : "";
        $hot = ($request->has('hot')) ? (int)$arr['hot'] : 0;
        $anhien = ($request->has('anhien')) ? (int)$arr['anhien'] : 0;
        $noidung = ($request->has('noidung')) ? $arr['noidung'] : "";

        $tieude = trim(strip_tags($tieude));

        $tin = Tin::find($id);
        $tin->tieuDe = $tieude;
        $tin->tomTat = $tomtat;
        if ($request->hasFile('hinh')) {
            // Lấy tệp tin từ yêu cầu
            $file = $request->file('hinh');

            // Đường dẫn đến thư mục đích trong ứng dụng Laravel
            $destinationPath = public_path('upload/images');

            // Tạo tên tệp tin mới sử dụng timestamp để đảm bảo duy nhất
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Lưu tệp tin vào thư mục đích với tên tệp tin mới
            $file->move($destinationPath, $filename);

            $tin->urlHinh = '/upload/upload/images/' . $filename;
        }
        $tin->ngayDang = $ngay;
        $tin->noiBat = $hot;
        $tin->anhien = $anhien;
        $tin->noiDung = $noidung;
        $tin->idLT = $idLoai;
        $tin->tags = $tags;
        $tin->save();
        return redirect('/layout-a/tintuc');
    }

    public function xoa(Request $request)
    {
        // Lấy danh sách các ô kiểm đã được chọn từ yêu cầu
        $checkboxes = $request->input('checkboxes');

        // Xóa dữ liệu của các dòng tương ứng với các ô kiểm đã chọn
        foreach ($checkboxes as $checkbox) {
            // Xóa dữ liệu từ bảng tương ứng
            // Ví dụ: sử dụng Eloquent ORM để xóa dữ liệu từ bảng "Tin" dựa trên giá trị "id"
            Tin::where('id', $checkbox)->delete();
        }

        // Điều hướng trở lại trang trước
        return back();
    }

    function timkiem(Request $request)
    {
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        $listtin = [];
        if ($tukhoa != "") {
            $listtin = Tin::where("tieude", "like", "%$tukhoa%")
                ->orderBy('id', 'desc')
                ->Paginate(10)
                ->withQueryString();
            if ($listtin->isEmpty()) {
                $listtin = [];
            }
        }
        foreach ($listtin as $tin) {
            $imagePath = public_path($tin->urlHinh);
            if (file_exists($imagePath)) {
                $tin->urlHinhExists = true;
            } else {
                $tin->urlHinhExists = false;
            }
            if (isset($imagePath)) {
                $tin->urlHinhExists = false;
            }
        }

        return view('admin.kqtimkiem', ['tukhoa' => $tukhoa, 'listtin' => $listtin]);
    }
    public function sendIndex()
    {
        return view('admin.thongbao', ['users' => User::where('id', '<>', Auth::user()->id)->select(['id', 'name',])->get()->toArray()]);
    }

    public function an($id)
    {
        $t = tin::find($id);
        $t->anHien = 0;
        $t->save();
        return redirect('/layout-a/tintuc');
    }

    public function hien($id)
    {
        $t = tin::find($id);
        $t->anHien = 1;
        $t->save();
        return redirect('/layout-a/tintuc');
    }

}
