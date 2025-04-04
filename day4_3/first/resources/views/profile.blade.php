<h1>PROFILE PAGE</h1>
{{session('myname')}}
@if(session('myname'))
    <h1>Welcome {{session('myname')}}</h1>
@else
    <h1>User Not Found<a href="login">login</a></h1>
@endif

<a href="{{route('logout')}}">Logout</a>