@extends('layouts.layout-a')
@section('tieude')
Danh sách tin tức
@endsection
@section('noidung')
<script src="https://kit.fontawesome.com/c43f566c41.js" crossorigin="anonymous"></script>

    <form action="{{ route('tintuc-xoa') }}"method="post">
        @csrf
        <div class="p-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" onclick="check()" class="text-center"><input type="checkbox" name=""
                                id=""></th>
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">Hình ảnh</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col" class="text-center">Lượt xem</th>
                        <th scope="col" class="text-center">Nổi bật</th>
                        <th scope="col" class="text-center">Ẩn hiện</th>
                        <th>Ngày đăng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listtin as $row)
                        <tr>
                            <td scope="row" class="text-center" onclick="anhien()"><input type="checkbox"
                                    name="checkboxes[]" value="{{ $row->id }}"></td>
                            <td class="text-center" id="check">{{ $row->id }}</td>
                            <td class="text-center">
                                @if ($row->urlHinhExists == true)
                                    <img src="/upload/{{ $row->urlHinh }}" alt="{{ $row->tieuDe }}" class="card-img-top"
                                        style="width: 50px;" />
                                @else
                                    @php
                                        $randomImage = rand(1, 3);
                                    @endphp
                                    <img src="{{ asset('images/' . $randomImage . '.jpg') }}" class="card-img-top"
                                        alt="{{ $row->tieuDe }}" style="width: 50px;">
                                @endif
                            </td>
                            <td><a class="text-decoration-none text-dark"
                                    href="/layout-a/tintuc-edit/{{ $row->id }}">{{ $row->tieuDe }}</a></td>
                            <td class="text-center">{{ $row->xem }}</td>
                            <td class="text-center">{{ $row->noiBat }}</td>
                            <td class="text-center">
                                @if ($row->anHien == 1)
                                    <a href="{{ route('tintuc-an', ['id' => $row->id]) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    @else
                                    <a href="{{ route('tintuc-hien', ['id' => $row->id]) }}">
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </a>
                                @endif
                            </td>
                            <td class="text-center">{{ $row->ngayDang }}</td>
                        </tr>
                    @endforeach
            </table>
            <button id="xoa" onclick="return confirm('Bạn xác nhận muốn xóa tin?')" hidden
                class="btn btn-danger">Xóa</button>
            <div class="p-2 d-flex justify-content-center">
                <p>{{ $listtin->onEachSide(10)->links() }}</p>
            </div>
        </div>
    </form>
@endsection
