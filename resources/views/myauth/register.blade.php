<form action="{{route('dangki')}}" method="post">
    @csrf
    <input type="text" name="name" id="" placeholder="name" value="{{old('name')}}">
    <input type="text" name="email" id="" placeholder="email" value="{{old('email')}}">
    <input type="password" name="password" id="" placeholder="password" value="{{old('password')}}">
    <input type="password" name="repeatPassword" id="" placeholder="repeat password" value="{{old('repeatPassword')}}">
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
    <li style="color:red">{{$error}}</li>
        @endforeach
    </ul>
    @endif
<button >Đăng kí</button>
</form>

