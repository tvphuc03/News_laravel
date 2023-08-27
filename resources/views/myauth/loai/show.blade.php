@extends('layouts.layout-a')
@section('tieude')
    Danh sách loại
@endsection

@section('noidung')
    <script src="https://kit.fontawesome.com/c43f566c41.js" crossorigin="anonymous"></script>
    <form action="{{ route('loai-xoa') }}" method="post">
        @csrf
        <div class="p-4">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col" onclick="check()" class="text-center"><input type="checkbox" name=""
                                id=""></th>
                        <th scope="col"class="text-center">ID</th>
                        <th scope="col">Tên loại</th>
                        <th scope="col">Ẩn hiện</th>
                        <th scope="col"class="text-center">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listtin as $lt)
                        <tr>
                            <td scope="lt" class="text-center" onclick="anhien()"><input type="checkbox"
                                    name="checkboxes[]" value="{{ $lt->id }}"></td>
                            <td class="text-center">{{ $lt->id }}</td>
                            <td><a class="text-decoration-none text-dark"
                                    href="/admin/loai/{{ $lt->id }}/edit">{{ $lt->ten }}</a>
                            </td>
                            <td class="text-center">
                                @if ($lt->anHien == 1)
                                    <a href="{{ route('loaitin-an', ['id' => $lt->id]) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    @else
                                    <a href="{{ route('loaitin-hien', ['id' => $lt->id]) }}">
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </a>
                                @endif
                            </td>
                            <td class="text-center"><a href="/layout-a/loai-edit/{{ $lt->id }}"
                                    class="btn btn-danger">Sửa</a></td>
                        </tr>
                    @endforeach
            </table>
            <button id="xoa" onclick="return confirm('Bạn xác nhận muốn xóa tin?')" hidden
                class="btn btn-danger">Xóa</button>
            <a href="/layout-a/loai-add" class="btn btn-warning">Thêm mới</a>
            <div class="p-2 d-flex justify-content-center">
                <p>{{ $listtin->onEachSide(10)->links() }}</p>
            </div>
        </div>
    </form>
@endsection
