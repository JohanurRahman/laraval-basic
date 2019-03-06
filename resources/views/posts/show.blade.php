@extends('layouts.app') 
@section('content')

<a href="/posts" class="btn btn-primary">Go Back</a>

<br>
<br>

<h1>{{ $post->title }}</h1>
<div>
    {!! $post->body !!}
    <!-- Parsing HTML -->
</div>

<hr>
<small>Written on {{ $post-> created_at }} by {{ $post->user->name}}</small>

<hr>

<p>

    <form>

        <a class="btn btn-success float-left" href="/posts/{{$post->id}}/edit" role="button">Edit</a>

    </form>
    
    <form action="{{ action('PostsController@destroy', $post->id) }}" method="POST">

        @method('DELETE') @csrf

        <button type="submit" class="btn btn-danger float-right">Delete</button>

    </form>



</p>
@endsection