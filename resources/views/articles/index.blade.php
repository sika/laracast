@extends('app')

@section('content')
<h1>Articles</h1>
<hr>
<!--each value in articles array put in $article for each iteration-->
@foreach($articles as $article)
<article>
    <h2>
        <!--'articles/{{$article->id}}'-->
        <a href="{{ action('ArticlesController@show', [$article->id]) }}"> {{$article->title}}</a>
    </h2>

    <div class="body">{{$article->body}}</div>
</article>
@endforeach

@stop