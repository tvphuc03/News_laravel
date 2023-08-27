<h1>Đây là trang admin</h1>
@auth
    Xin chào {{auth()->user()->name}}
    <form action="{{route('dangxuat')}}" method="post">
        @csrf
        <button>Đăng Xuất</button>
    </form>
    @else
    <a href="{{route('dangnhap')}}">Đăng nhập</a>
@endauth
