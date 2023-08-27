@extends('layouts.layout-a')
@section('tieude')
    Chỉnh sửa tin tức
@endsection
@section('noidung')
    <style>
        .form {
            margin-top: 50px
        }
    </style>
    <form class="form" method="post" action="/layout-a/tintuc-edit/{{ $tin->id }}" enctype="multipart/form-data">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <h1 class="text-primary p-2 h3">CHỈNH SỬA TIN TỨC</h1>
        <div class="mb-3">
            <label>Tiêu đề</label> <input value="{{ $tin->tieuDe }}" class="form-control" name="tieude">
        </div>
        <div class="mb-3">
            <label>Tóm tắt</label>
            <textarea name="tomtat" rows="5" class="form-control">{{ $tin->tomTat }} </textarea>
        </div>
        <div class="mb-3 row">
            <div class="col-md-6">
                <label>Ngày đăng</label> <input value="{{ $tin->ngayDang }}" class="form-control" name="ngay"
                    type="date">
            </div>
            <div class="col-md-6">
                <label>Hình </label> <input class="form-control" name="hinh" type="file">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-md-6">
                <label>Loại</label>
                <select class="form-control" name="idLoai">
                    <?php $loaitin = \App\Models\LoaiTin::all(); ?>
                    @foreach ($loaitin as $loai)
                        @if ($tin->idLT == $loai->id)
                            <option value="{{ $loai->id }}" selected> {{ $loai->ten }}</option>
                        @endif
                        <option value="{{ $loai->id }}"> {{ $loai->ten }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label>Tags</label> <input value="{{ $tin->tags }}" class="form-control" name="tags" type="text">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-md-6">
                <label>Nổi bật</label>
                <div class="form-control">
                    @if ($tin->noiBat == 1)
                        <input name="hot" type="radio" value="1" checked> Nổi bật
                        <input name="hot" type="radio" value="0"> Không nổi bật
                    @else
                        <input name="hot" type="radio" value="1"> Nổi bật
                        <input name="hot" type="radio" value="0" checked> Không nổi bật
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <label>Ẩn hiện</label>
                <div class="form-control">
                    @if ($tin->anHien == 1)
                        <input name="anhien" type="radio" value="1" checked> Hiện
                        <input name="anhien" type="radio" value="0"> Ẩn
                    @else
                        <input name="anhien" type="radio" value="1"> Hiện
                        <input name="anhien" type="radio" value="0" checked> Ẩn
                    @endif
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label>Nội dung</label>
            <textarea name="noidung" rows="10" class="form-control">{{ $tin->noiDung }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-warning py-2 px-5">Lưu</button>
        </div>
    </form>


@endsection
