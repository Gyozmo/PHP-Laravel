@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/create" method="post">
    @csrf
        <label for="title">Title</label><input name="title" type="text" value=" {{ $post->title }} "><br>
        <label for="content">Content</label><input name="content" type="textarea" value=" {{ $post->content }} "><br>
        <label for="author">Author</label><input name="author" type="text" value=" {{ $post->author }} "><br>
        <button type="submit" name="id" value="{{ $post->id }}">Ok</button>
    </form>

</div>
@endsection
