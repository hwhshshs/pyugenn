@extends('layout')

@section('title', 'Posts')

@section('content')
    <h2>All Posts</h2>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }} - {{ $post->content }}</li>
        @endforeach
    </ul>
@endsection
