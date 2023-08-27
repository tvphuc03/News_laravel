@extends('layouts.layout-c')
@section('tieudetrang')
    {{ $loaitin[0]->ten }}
@endsection
@section('slider')
    <div class="section-title section-bg">
        <div class="section__inner">
            <h1 class="ui-title-page">{{ $loaitin[0]->ten }}</h1>
        </div>
    </div>
@endsection
@section('noidung')
    @foreach ($tinTL->take(8) as $tin)
        <article class="post post-5 clearfix">
            <div class="entry-media">
                <a href="#" class="prettyPhoto">
                    <img src="/upload/{{ $tin->urlHinh }}" alt="Foto" class="img-responsive" />
                </a>
            </div>
            <div class="entry-main">
                <div class="entry-header"><span class="category color-4">{{ $loaitin[0]->ten }}</span>
                    <h2 class="entry-title"><a href="news_details-1.html">{{ $tin->tieuDe }}</a></h2>
                </div>
                <div class="entry-meta"><span class="entry-meta__item">bởi:<a href="{{ url('/chitiet', [$tin->id]) }}"
                            class="entry-meta__link"> Trần Vĩnh Phúc</a></span><span class="entry-meta__item"><a
                            href="{{ url('/chitiet', [$tin->id]) }}"
                            class="entry-meta__link">{{ $tin->ngayDang }}</a></span><span class="entry-meta__item"><i
                            class="icon pe-7s-comment"></i><a href="{{ url('/chitiet', [$tin->id]) }}"
                            class="entry-meta__link">23</a></span></div>
                <div class="entry-content">
                    <p>{{ $tin->tomTat }}</p>
                </div>
                <div class="entry-footer"><a href="{{ url('/chitiet', [$tin->id]) }}" class="btn-link">Dọc bài viết</a>
                </div>
            </div>
        </article>
    @endforeach
    <div class="wrap-pagination">
        <div class="p-2 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                @if ($tinTL->lastPage() > 1)
                    @include('page.custom_pagination', ['paginator' => $tinTL])
                @endif
            </nav>
        </div>
    </div>
@endsection
@section('menudung')
    @include('thanhphan.menudungbv')
@endsection
