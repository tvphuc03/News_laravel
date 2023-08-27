<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tin;
use App\Models\loaitin;
use Illuminate\Pagination\Paginator;

use function Pest\Laravel\get;

Paginator::useBootstrap();
class Tincontroller extends Controller
{
    public function index()
    {
        //slide
        $loaiTinLayMotTin = [];
        $dem = 0;
        // Lấy tất cả các loại tin
        $loaiTin = loaitin::orderBy('thuTu', 'asc')->get();
        $tatcatin = tin::orderBy('urlHinh', 'desc')->get();


        foreach ($loaiTin as $loai) {
            // Lấy tin đầu tiên của mỗi loại tin
            $tin = tin::where('idLT', $loai->id)->first();

            // Kiểm tra nếu có tin thì thêm vào mảng
            if ($tin && $dem < 5) {
                $loaiTinLayMotTin[] = $tin;
                $dem++;
            }
        }

        // Lấy một tin nổi bật trong các loại tin
        $loaiTinNB = loaitin::orderBy('thuTu', 'asc')->get();
        foreach ($loaiTinNB as $l) {
            $tinOfLoai = tin::where('noiBat', 1)
                ->where('idLT', $l->id)
                ->orderBy('xem', 'desc')
                ->first();
            $loaiTinLayMotTinNB[] = $tinOfLoai;
            $dem++;
        }
        //tin muộn
        $tinTL_muon = tin::orderBy('urlHinh', 'desc')
            ->orderBy('ngayDang', 'asc')
            ->get();

        $idLTs = $tinTL_muon->pluck('idLT')->unique()->toArray();

        //tin mới
        $tinTL_moi = tin::orderBy('ngayDang', 'desc')
            ->get();

        $idLTs = $tinTL_moi->pluck('idLT')->unique()->toArray();
        $loaitin_arr = loaitin::orderBy('thuTu', 'desc')
            ->whereIn('id', $idLTs)
            ->get();

        foreach ($loaitin_arr as $lt) {
            // Tin nóng
            $tinTL_nong = tin::orderBy('xem', 'desc')->where('idLT', $lt->id)
                ->get();
            $idLTs = $tinTL_nong->pluck('idLT')->unique()->toArray();
        }




        $data = [
            'slide' => $loaiTinLayMotTin,
            'loai' => $loaiTin,
            'loaiNB' => $loaiTinNB,
            'tinnoibat' => $loaiTinLayMotTinNB,
            'tin' => $tatcatin,
            'tinmuon' => $tinTL_muon,
            'tinmoi' => $tinTL_moi,
            'tinnong' => $tinTL_nong,
            'loaitin' => $loaitin_arr,
        ];
        return view('page.home', $data);
    }



    public function chitiet($id = 0)

    {
        $tin = tin::where('id', $id)->first();
        $loaitin_laytatca = loaitin::select('id', 'ten')
            ->orderby('thuTu', 'asc')
            ->where('AnHien', '=', '1')
            ->limit(5)
            ->get();

        $loaitin_arr = loaitin::select('id', 'ten')
            ->where('id', $id)
            ->get();
        $data = ['id' => $id, 'tin' => $tin, 'loaitin' => $loaitin_arr, 'loaibaiviet' => $loaitin_laytatca];
        return view('page.chitiet', $data);
    }



    public function baiviet($idLT = 0)

    {

        $tinTL = tin::where('idLT', $idLT)
            ->orderBy('urlHinh', 'desc')
            ->paginate(6)
            ->withQueryString();

        $loaitin_laytatca = loaitin::select('id', 'ten')
            ->orderby('thuTu', 'asc')
            ->where('AnHien', '=', '1')
            ->limit(5)
            ->get();

        $loaitin_arr = loaitin::select('id', 'ten')
            ->where('id', $idLT)
            ->get();

        // menudungbv
        $tin=tin::orderBy('xem','desc')
        ->get();
        $loai=loaitin::select('id', 'ten')
        ->orderby('thuTu', 'asc')
        ->where('AnHien', '=', '1')
        ->limit(5)
        ->get();

        $data = [
        'idLT' => $idLT,
        'tinTL' => $tinTL,
        'loaitin' => $loaitin_arr,
        'loaibaiviet' => $loaitin_laytatca,
        'tinbv'=>$tin,
        'loaibv'=>$loai];

        return view('page.baiviet', $data);
    }


    function timkiem(Request $request)
    {
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        $listtin = [];
        if ($tukhoa != "") {
            $listtin = tin::where("tieuDe", "like", "%$tukhoa%")
                ->orderBy('id', 'desc')
                ->Paginate(10)
                ->withQueryString();
            if ($listtin->isEmpty()) {
                $listtin = [];
            }
        }
        foreach ($listtin as $tin) {
            // Kiểm tra nếu trường $tin->urlHinh không tồn tại hoặc không có giá trị ban đầu
            if ($tin->urlHinh=="") {
                $tin->urlHinhExists = false; // Gán mặc định là false nếu không có giá trị
            } else {
                $imagePath = public_path('upload/'.$tin->urlHinh);
                $tin->urlHinhExists = file_exists($imagePath);
            }
        }
        $loaitin_laytatca = loaitin::select('id', 'ten')
        ->orderby('thuTu', 'asc')
        ->where('AnHien', '=', '1')
        ->limit(5)
        ->get();

        // menudungbv
        $tin=tin::orderBy('xem','desc')
        ->get();
        $loai=loaitin::select('id', 'ten')
        ->orderby('thuTu', 'asc')
        ->where('AnHien', '=', '1')
        ->limit(5)
        ->get();


        return view('page.kqtimkiem', ['tukhoa' => $tukhoa, 'listtin' => $listtin,'tinbv'=>$tin,
        'loaibv'=>$loai,'loaibaiviet'=>$loaitin_laytatca]);
    }

}
