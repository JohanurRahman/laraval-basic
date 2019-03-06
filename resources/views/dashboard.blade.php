@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <br>
                    <br>
                    <h3>Your Blog Posts</h3>

                    @if (count($posts) > 0)

                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</th>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ action('PostsController@destroy', $post->id) }}" method="POST">

                                    @method('DELETE') @csrf

                                    <button type="submit" class="btn btn-danger float-right">Delete</button>

                                </form>

                            </td>
                            
                        </tr>
                        @endforeach
                    </table>

                    @else

                    <p>You have no post</p>

                    @endif @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection