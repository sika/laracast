@extends('app')
@section('content')
<!--Escaping $name - safest-->
<h1>my name is {!!$name !!}</h1>
<p>Some text</p>
@stop

@section('footer')
<script>alert('contact form scripts');</script>
@stop
