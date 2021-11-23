@extends('layouts.default')

@section('content')
@if(count($posts) > 1)
    @foreach($posts as $post)
    <div class="well">
        <h1><a href="/posts/{{$post->id}}">{{$post->name}}</a></h1>
    </div>
    @endforeach
@else
<p>no post found</p>
@endif
@endsection