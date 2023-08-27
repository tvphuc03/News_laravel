<ul class="pagination">
    <!-- Nút Trang Đầu -->
    <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
        <a class="page-link" href="{{ $paginator->url(1) }}">Trang đầu</a>
    </li>

    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item {{ $i == $paginator->currentPage() ? 'active' : '' }}">
            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor

    <!-- Nút Trang Cuối -->
    <li class="page-item {{ $paginator->currentPage() == $paginator->lastPage() ? 'disabled' : '' }}">
        <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">Trang cuối</a>
    </li>
</ul>
