@extends('layouts.app')

@section('content')


    <h1>Posts</h1>
    <br>

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body bg-light">
            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                <small>Written on {{ $post->created_at }} by {{ $post->user->name}} </small>
            </div>
            <br>
        @endforeach

        {{ $posts->links() }}
        
    @else
        <p>No Posts Found</p>
    @endif


@endsection