<form action="" method="post">
    @csrf
    <input type="text" name="email" id="" placeholder="Email">
    <input type="password" name="password" id="" placeholder="password">
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <button>Đăng nhập</button>
</form>
