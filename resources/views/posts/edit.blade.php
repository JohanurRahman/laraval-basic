@extends('layouts.app') 
@section('content')

<a href="/posts/{{$post->id}}" class="btn btn-primary">Back</a>

<br>
<br>

<h1>Edit Post</h1>

<br>
<form action="{{ action('PostsController@update', $post->id) }}" method="POST" enctype="multipart/form-data">

    @method('PUT') 
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" value="{{ $post->title }}" class="form-control" name="title" id="title" placeholder="Enter Title">
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="article-ckeditor" class="form-control" placeholder="Enter Body Text" cols="30" rows="10">{{ $post->body }}</textarea>
    </div>

    <div class="form-group">
        <input type="file" name="cover_image">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection