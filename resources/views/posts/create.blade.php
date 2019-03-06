@extends('layouts.app') 
@section('content')

<h1>Create Post</h1>

<br>
<form action="{{ action('PostsController@store') }}" method="POST">

  @csrf

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="article-ckeditor" class="form-control" placeholder="Enter Body Text" cols="30" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection