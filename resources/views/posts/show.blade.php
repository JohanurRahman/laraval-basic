@extends('layouts.app') 
@section('content')

<a href="/posts" class="btn btn-primary">Go Back</a>

<br>
<br>

<h1>{{ $post->title }}</h1>
<img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
<br><br>
<div>
    {!! $post->body !!}
    <!-- Parsing HTML -->
</div>

<hr>
<small>Written on {{ $post-> created_at }} by {{ $post->user->name}}</small>

<hr>

<p>

    @if (!Auth::guest())

        @if (Auth::user()->id == $post->user_id)
    
            <form>
                <a class="btn btn-success float-left" href="/posts/{{$post->id}}/edit" role="button">Edit</a>
            </form>
            
            <form action="{{ action('PostsController@destroy', $post->id) }}" method="POST">

                @method('DELETE') @csrf

                <button type="submit" class="btn btn-danger float-right">Delete</button>

            </form>

        @endif
            

    @endif


</p>
@endsection