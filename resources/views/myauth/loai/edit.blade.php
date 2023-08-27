@extends('layouts.layout-a')
@section('tieude')
    Chỉnh sửa loại
@endsection
@section('noidung')
    <form class="mx-auto p-3" method="post" action="/layout-a/loai-edit/{{ $loai->id }}">
        <h1 class="text-primary p-2 h3">CHỈNH SỬA LOẠI TIN</h1>
        <div class="mb-3">
            <label>ID</label> <input disabled value="{{ $loai->id }}" class="form-control" name="id">
        </div>
        <div class="mb-3">
            <label>Tên loại</label>
            <input value="{{ $loai->ten }}" class="form-control" name="ten" value="{{old('ten')}}">
            @error('ten')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-warning">Lưu</button>
        @csrf
    </form>
@endsection
