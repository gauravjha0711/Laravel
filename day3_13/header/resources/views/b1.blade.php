{{"Hello World"}}
<br><br>
{{5+5}}
@php
    $color=["Red","Green","Yellow","White"];
    @endphp
    <ul> @foreach($color as $n)
        <li>{{$loop->index}}-{{$n}}</li>
        @endforeach
    </ul>
    <br><br>
    