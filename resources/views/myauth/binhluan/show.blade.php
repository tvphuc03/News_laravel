@extends('layouts.layout-a')
@section('tieude')
Danh sách bình luận
@endsection
@section('noidung')
    <form action="{{ route('binhluan-xoa') }}"method="post">
        @csrf
        <div class="p-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" onclick="check()" class="text-center"><input type="checkbox" name=""
                                id=""></th>
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">IdTin</th>
                        <th scope="col" class="text-center">Ngày đăng</th>
                        <th scope="col" class="text-center">Nội dung</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Họ tên</th>
                        <th scope="col" class="text-center">Ẩn hiện</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($binhluan as $bl)
                        <tr>
                            <td scope="row" class="text-center" onclick="anhien()"><input type="checkbox"
                                    name="checkboxes[]" value="{{ $bl->id }}"></td>
                            <td class="text-center" id="check">{{ $bl->id }}</td>
                            <td class="text-center">{{ $bl->idTin }}</td>
                            <td class="text-center">{{ $bl->ngayDang }}</td>
                            <td class="text-center">{{ $bl->noiDung }}</td>
                            <td class="text-center">{{ $bl->email }}</td>
                            <td class="text-center">{{ $bl->hoTen }}</td>
                            <td class="text-center">{{ $bl->anHien }}</td>
                        </tr>
                    @endforeach
            </table>
            <button id="xoa" onclick="return confirm('Bạn xác nhận muốn xóa bình luận?')" hidden
                class="btn btn-danger">Xóa bình luận</button>
            <div class="p-2 d-flex justify-content-center">
                <p>{{ $binhluan->onEachSide(10)->links() }}</p>
            </div>
        </div>
    </form>
@endsection
