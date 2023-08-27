@extends('layouts.layout-a')
@section('tieude')
    PHUCNEWS - Thêm loại
@endsection
@section('noidung')
<style>
    #text {
    color: red; /* Đổi màu chữ thành đỏ */
    /* Các thuộc tính CSS khác cho thông báo lỗi */
    padding: 10px;
    list-style-type: none
    }
</style>
    <form class="mx-auto  " style="padding: 30px" method="post" action="/layout-a/loai-add">
        {{-- @if ($errors->any())
            <div class="alert alert-info">
                <ul>
                    @foreach ($errors->all() as $list)
                        <li>{{ $list }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <h1 class="text-primary  h3" >THÊM LOẠI TIN</h1>
        <div class="mb-3">
            <label>ID</label> <input disabled placeholder="Tự động" class="form-control" name="tieude">
        </div>
        <div class="mb-3">
            <label>Tên loại</label>
            <input class="form-control" name="ten" value="{{old('ten')}}">
            @error('ten')
            <li id="text">
                {{ $message }}
            </li>
            @enderror
        </div>
        <button type="submit" class="btn btn-warning">Lưu</button>
        @csrf
    </form>
@endsection
