<!-- @include('admin.header', ['name' => 'hello'])
<h1>Home Page</h1>
@include('admin.footer')
@includeIf('admin.content') -->

<!-- @php
    $fruit = ["Apple","Banana","Orange","Grapes"];
@endphp

@include('pages.header',['names'=>$fruit])

<h1>Home Pages</h1>
@include('pages.footer',['name'=>'Byee!!...']); -->


@php
    $fruits=["Apple","Banana","Orange","Grapes"];
@endphp
@includeWhen(false,'pages.header',['name'=>'$fruits']);
<h1>Home Page</h1>
@include('pages.footer',['name'=>'Bye!!...']);
<!-- @includeFirst(['admin.header','pages.header'],['name'=>'Gaurav']); -->