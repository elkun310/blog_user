<form action="{{route('postForm')}}" method="post">
    <input type="text" name="hoten">
    <input type="submit">
    {{ csrf_field() }}
</form>