@extends('layout')

@section('title', 'Create Post')

@section('content')
    <h2>Create a New Post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        <label>Content:</label>
        <textarea name="content" required></textarea>
        <button type="submit">Save</button>
    </form>
@endsection
