@extends('layouts.app')

@section('content')
<div class="container">
    <form action="create" method="post">
    @csrf
        <label for="title">Title</label><input name="title" type="text"><br>
        <label for="content">Content</label><input name="content" type="textarea"><br>
        <label for="author">Author</label><input name="author" type="text"><br>
        <button type="submit">Ok</button>

    </form>

</div>
@endsection
