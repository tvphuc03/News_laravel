@extends('layouts.layout-c')
@section('tieude')
    Kết quả tìm kiếm
@endsection
@section('noidung')

<style>
    /* CSS cho phần kết quả tìm kiếm */
.search-results {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.search-results h2 {
    font-size: 24px;
}

.search-results .tukhoa {
    font-weight: bold;
    color: #e74c3c;
}


/* CSS cho phần kết quả tìm kiếm */
</style>
    @if ($listtin == [])
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 75vh;">
            <h5 class="text-center">Kết quả tìm kiếm <span class="text-danger">{{ $tukhoa }}</span> không tồn tại!</h5>
            <a href="/">
                <button class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ</button>
            </a>
        </div>
    @else
    <div class="search-results">
        <h2>Kết quả tìm kiếm: <span class="tukhoa">"{{ $tukhoa }}"</span></h2>
    </div>
        @foreach ($listtin as $tin)
            <article class="post post-5 clearfix">
                <div class="entry-media">
                    <a href="#" class="prettyPhoto">
                        @if ($tin->urlHinhExists)
                            <img src="{{ asset('upload/' . $tin->urlHinh) }}" class="img-responsive" alt="...">
                        @else
                            @php
                                $randomImage = rand(1, 3);
                            @endphp
                            <img src="{{ asset('images/' . $randomImage . '.jpg') }}" class="card-img" style="height: 230px"
                                alt="...">
                        @endif
                    </a>
                </div>
                <div class="entry-main">
                        <h2 class="entry-title"><a href="news_details-1.html">{{ $tin->tieuDe }}</a></h2>
                    <div class="entry-meta">
                        <span class="entry-meta__item">
                            bởi:
                            <a href="{{ url('/chitiet', [$tin->id]) }}" class="entry-meta__link"> Trần Vĩnh Phúc</a>
                        </span>
                        <span class="entry-meta__item">
                            Đăng ngày: {{date('d/m/Y',strtoTime($tin->ngay))}}
                        </span>
                    </div>
                    <div class="entry-content">
                        <p>{!! $tin->tomTat !!}</p>
                    </div>
                    <div class="entry-footer"><a href="{{ url('/chitiet', [$tin->id]) }}" class="btn-link">Dọc bài viết</a>
                    </div>
                </div>
            </article>
        @endforeach


        <div class="wrap-pagination">
            <div class="p-2 d-flex justify-content-center">
                <p>{{ $listtin->onEachSide(10)->links() }}</p>
            </div>
        </div>
    @endif
@endsection

@section('menudung')
    @include('thanhphan.menudungbv')
@endsection
