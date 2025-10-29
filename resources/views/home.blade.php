@extends('layout')

@section('content')
    <div class="container">
        <div>
            {{-- <a href="{{ route('root') }}" class="btn btn-success">Go To Root Part</a> --}}
            <a href="post/create" class="btn btn-success">+ Create Post</a>
             <form action="logout" method="POST">
                @csrf
                <button type="submit">Logout</button>
             </form>
        </div>
        <div class="card">
            <h5 class="card-header text-center">Content</h5>
            <div class="card-body">
                @foreach ($data as $post)
                    <h5 class="card-title"> {{ $post->name }}</h5>
                    <p class="card-text">
                        {{ $post->description }}
                    </p>
                        <div class="d-flex justify-between">
                            <a href="post/{{ $post->id }}" class="btn btn-primary">View</a> <hr>
                    <a href="post/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a> <hr>
                    <form action="post/{{ $post->id }}" method="POST" >
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>

                    </form>

                        </div>
                    <hr>
                @endforeach

            </div>
        </div>
    </div>
@endsection
